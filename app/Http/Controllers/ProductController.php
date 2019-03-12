<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Product;
use App\Partner;
use App\Category;

Use Storage;

class ProductController extends Controller
{
    protected $paginate = 5;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        $products = Product::orderby('created_at', 'DESC')->paginate($this->paginate);
    
        return view('back.products', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.create-product');
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
            'titre' => 'required',
            'description' => 'required|string',
            'prix' => 'required',
            'status' => 'in:Publié,Brouillon',
            'form' => 'required|string',
            'picture' => 'image|max:3000', 
        ]);
        $product = Product::create($request->all());
        
        $im = $request->file('picture');
        if (!empty($im)) {
            
            $link = $request->file('picture')->store('');

            // mettre à jour la table picture pour le lien vers l'image dans la base de données
            $product->pictureProduct()->create([
                'url_img_products' => $link,
                'titre' => 'default'
            ]);
        }

        return redirect()->route('product.index')->with('message-success', 'Produit créé avec succès !');   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);

         return view('back.show-product', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);

        return view('back.edit-product', compact('product'));
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
            'titre' => 'required',
            'description' => 'required|string',
            'prix' => 'required',
            'status' => 'in:Publié,Brouillon',
            'form' => 'required|string',
            'picture' => 'image|max:3000',
        ]);
        $product = Product::find($id); // associé les fillables

        $product->update($request->all());
        
        // image
        $im = $request->file('picture');
        
        // si on associe une image à un product 
        if (!empty($im)) {

            $link = $request->file('picture')->store('');

            // suppression de l'image si elle existe 
            if(count($product->pictureProduct)>0){
                Storage::disk('local')->delete($product->pictureProduct->url_img_products); // supprimer physiquement l'image
                $product->pictureProduct()->delete(); // supprimer l'information en base de données
            }

            // mettre à jour la table picture pour le lien vers l'image dans la base de données
            $product->pictureProduct()->create([
                'url_img_products' => $link,
                'titre' => 'default'
            ]);
            
        }

        return redirect()->route('product.index')->with('message-success', 'Produit édité avec succès !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::where('id',$id)->firstOrFail();

        $product->delete();

        return redirect()->route('product.index')->with('message-danger', 'Supprimé sans sommation !'); 
    }
}
