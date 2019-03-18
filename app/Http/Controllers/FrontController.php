<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Category;
use App\Product;
use App\Partner;
use DB;


class FrontController extends Controller
{
    protected $paginate = 1;

    public function __construct(){

        // méthode pour injecter des données à une vue partielle 
        view()->composer('partials.menu', function($view){
            $categories = Category::pluck('titre', 'id')->all(); // on récupère un tableau associatif ['id' => 1]
            $view->with('categories', $categories ); // on passe les données à la vue
        });
    }
    //Vue page d'acceuil
    public function index(){

        
        $events = Event::publishedEvent()->paginate($this->paginate); // pagination
        $products = Product::publishedProduct()->paginate($this->paginate);
        $partners = Partner::paginate($this->paginate);
        $expos = Event::where('category_id',1)->publishedEvent()->orderby('date', 'DESC')->first();
        $workshops = Event::where('category_id', 2)->publishedEvent()->orderby('date', 'DESC')->first();
        $excursions = Event::where('category_id', 3)->publishedEvent()->orderby('date', 'DESC')->first();
        $soirees = Event::where('category_id', 4)->publishedEvent()->orderby('date', 'DESC')->first();
       

        return view('front.index', ['events' => $events, 'products' => $products, 'partners' => $partners, 'expos' => $expos, 'workshops' => $workshops, 'excursions' => $excursions, 'soirees' => $soirees]);

    }
    //Vue de tous les évènements
    public function showEvents(){

        // $events = Event::publishedEvent()->paginate($this->$paginate);
        $expos = Event::where('category_id', 1)->publishedEvent()->orderby('date', 'DESC')->get();
        $workshops = Event::where('category_id', 2)->publishedEvent()->orderby('date', 'DESC')->get();
        $excursions = Event::where('category_id', 3)->publishedEvent()->orderby('date', 'DESC')->get();
        $soirees = Event::where('category_id', 4)->publishedEvent()->orderby('date', 'DESC')->get();
      


        return view('front.events', ['events' => $events, 'expos' => $expos, 'workshops' => $workshops, 'excursions' => $excursions, 'soirees' => $soirees]);
    }
    //Vue du shop
    public function showShop(){
        
        $products = Product::publishedProduct()->orderby('created_at', 'DESC')->paginate(5);
        

        return view('front.shop', ['products' => $products]);
    }
    //vue 1 évènement
    public function showOneEvent(int $id){

        
        $events = Event::find($id);

        
        return view('front.show-event', ['events' => $events]);
    }
    //vue 1 produit
    public function showOneProduct(int $id){

        
        $products = Product::find($id);

        
        return view('front.show-product', ['products' => $products]);
    }
 
}
