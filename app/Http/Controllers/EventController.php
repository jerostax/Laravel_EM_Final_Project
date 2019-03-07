<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Product;
use App\Partner;
use App\Category;

Use Storage;


class EventController extends Controller
{
    protected $paginate = 5;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::paginate($this->paginate);
        $products = Product::paginate($this->paginate);
        $partners = Partner::paginate($this->paginate);

        return view('back.index', ['events' => $events, 'products' => $products, 'partners' => $partners]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $categories = Category::pluck('titre', 'id')->all();

        return view('back.create-event', [ 'categories' => $categories]);
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
            'status' => 'in:Publié,Brouillon',
            'prix' => 'required',
            // // 'date' => "datetime:Y-m-d|nullable",
            'category_id' => 'integer',
            // 'status' => 'in:Publié,Brouillon',
            
            'pictureEvent' => 'image|max:3000',
        ]);
        $event = Event::create($request->all());

        return redirect()->route('event.index') ;
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
        $event = Event::where('id',$id)->firstOrFail();

        $event->delete();

        return redirect()->route('event.index') ;
    }
}
