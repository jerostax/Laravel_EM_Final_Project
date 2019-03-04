<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Category;
use App\Product;
use App\Partner;
Use Newsletter;


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
    public function index(){

        $events = Event::published()->paginate($this->paginate); // pagination
        $products = Product::published()->paginate($this->paginate);
        $partners = Partner::paginate($this->paginate);

        return view('front.index', ['events' => $events, 'products' => $products, 'partners' => $partners]);

    }
    public function showEvents(){

        $events = Event::published()->paginate(5);

        return view('front.events', ['events' => $events]);
    }
    public function showShop(){
        
        $products = Product::published()->paginate(5);
        

        return view('front.shop', ['products' => $products]);
    }
    public function showPartners(){
        
        $partners = Partner::paginate(5);
        

        return view('front.partners', ['partners' => $partners]);
    }
    public function newsLetter (Request $request) {
        if(!Newsletter::isSubscribed($request->email)){
            Newsletter::subscribePending($request->email);
            return redirect('/')->with('success', "Vérifiez votre mail pour confirmer l'abonnement!");
        }
        return redirect('/')->with('failure', 'désolé vous êtes déjà abonné');
    }
}
