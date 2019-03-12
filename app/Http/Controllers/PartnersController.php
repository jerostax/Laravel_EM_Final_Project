<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Product;
use App\Partner;
use App\Category;

Use Storage;

class PartnersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partners = Partner::paginate($this->paginate);

        return view('back.partners', ['partners' => $partners]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.create-partner');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nom' => 'required',
            'description' => 'required|string',
            'picture' => 'image|max:3000', 
        ]);
        $partner = Partner::create($request->all());
        
        $im = $request->file('picture');
        if (!empty($im)) {
            
            $link = $request->file('picture')->store('');

            // mettre à jour la table picture pour le lien vers l'image dans la base de données
            $partner->picturePartner()->create([
                'url_img_partners' => $link,
                'titre' => 'default'
            ]);
        }

        return redirect()->route('partner.index')->with('message-success', 'Partenaire créé avec succès !'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $partner = Partner::find($id);

         return view('back.show-partner', ['partner' => $partner]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $partner = Partner::find($id);

        return view('back.edit-partner', compact('partner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nom' => 'required',
            'description' => 'required|string',
            'picture' => 'image|max:3000', 
        ]);
        $partner = Partner::find($id); // associé les fillables

        $partner->update($request->all());
        
        // image
        $im = $request->file('picture');
        
        // si on associe une image à un product 
        if (!empty($im)) {

            $link = $request->file('picture')->store('');

            // suppression de l'image si elle existe 
            if(count($partner->picturePartner)>0){
                Storage::disk('local')->delete($partner->picturePartner->url_img_partners); // supprimer physiquement l'image
                $partner->picturePartner()->delete(); // supprimer l'information en base de données
            }

            // mettre à jour la table picture pour le lien vers l'image dans la base de données
            $partner->picturePartner()->create([
                'url_img_partners' => $link,
                'titre' => 'default'
            ]);
            
        }

        return redirect()->route('partner.index')->with('message-success', 'Partenaire modifié avec succès !'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $partner = Partner::where('id',$id)->firstOrFail();

        $partner->delete();

        return redirect()->route('partner.index')->with('message-danger', 'Supprimé sans sommation !'); 
    }
}
