<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Category;
use App\Product;
use App\Partner;


class FrontController extends Controller
{
    protected $paginate = 1;

    public function __construct(){

        // méthode pour injecter des données à une vue partielle 
        view()->composer('partials.menu', function($view){
            $categories = Category::pluck('Titre', 'id')->all(); // on récupère un tableau associatif ['id' => 1]
            $view->with('categories', $categories ); // on passe les données à la vue
        });
    }
    public function index(){

        $events = Event::paginate($this->paginate); // pagination
        $products = Product::paginate($this->paginate);
        $partners = Partner::paginate($this->paginate);

        return view('front.index', ['events' => $events, 'products' => $products, 'partners' => $partners]);

    }
}
