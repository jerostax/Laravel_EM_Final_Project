<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Category;
use App\Product;
use App\Partner;
Use Newsletter;
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

        $events = Event::published()->paginate($this->paginate); // pagination
        $products = Product::published()->paginate($this->paginate);
        $partners = Partner::paginate($this->paginate);
        // $categories = Category::find($id);

        return view('front.index', ['events' => $events, 'products' => $products, 'partners' => $partners]);

    }
    //Vue de tous les évènements
    public function showEvents(){

        $events = Event::published()->paginate(1);
        $expos = Event::where('id',1)->get();
        $workshops = Event::where('id', 2)->get();
        $excursions = Event::where('id', 3)->get();
        $soirees = Event::where('id', 4)->get();
      

        return view('front.events', ['events' => $events, 'expos' => $expos, 'workshops' => $workshops, 'excursions' => $excursions, 'soirees' => $soirees]);
    }
    //Vue du shop
    public function showShop(){
        
        $products = Product::published()->paginate(5);
        

        return view('front.shop', ['products' => $products]);
    }
    public function showOneEvent(int $id){

        
        $events = Event::find($id);

        
        return view('front.show-event', ['events' => $events]);
    }
    public function showOneProduct(int $id){

        
        $events = Product::find($id);

        
        return view('front.show-product', ['events' => $events]);
    }
    //NewsLetter MailChimp
    public function newsLetter (Request $request) {
        if(!Newsletter::isSubscribed($request->email)){
            Newsletter::subscribePending($request->email);
            return redirect('/')->with('success', "Vérifiez votre mail pour confirmer l'abonnement!");
        }
        return redirect('/')->with('failure', 'désolé vous êtes déjà abonné');
    }
}
