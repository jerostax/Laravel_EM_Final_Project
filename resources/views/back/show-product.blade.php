@extends('layouts.master')

@section('content')


<i class="fas fa-arrow-left animated bounceInRight"></i> <a href='{{route('shop')}}'>Retour</a>

<!-- SECTION 1 PRODUIT DU SHOP -->
<section class='row show-product'>        
    <div class='col-lg-5 product-left'>
        <h1 class='single-title animated fadeInLeft'>Shop</h1>    
        <img class='animated zoomIn'src="{{asset('images/'.$product->pictureProduct->url_img_products)}}">
        <h2 class='animated fadeInDown'>{{$product->titre}}</h2>
        <p class='animated fadeInLeft'>{{$product->description}}</p>
        <p class="animated fadeInUp product-price">{{$product->prix}} €</p>
    </div>
    <div class='col-lg-5 product-right'>
        <!-- FORMULAIRE DE PAIEMENT -->
        <iframe id="haWidget"  class=' animated fadeInRight'src="{{$product->form}}" style="width: 350px; height: 450px; border: none;" ></iframe>
    </div>
</section>
@endsection