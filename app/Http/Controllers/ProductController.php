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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
