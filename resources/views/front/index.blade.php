@extends('layouts.master')
@section('header')
<div id='slider'>
        <div id="carouselExampleFade" class="carousel slide carousel-fade"
            data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                
                <div class="carousel-item active">
                    <img src="{{asset('assets/excursion.jpg')}} "class="d-block " alt="...">
                    <div class='cartouche animated fadeInRight'>TEST CARTOUCHE</div>
                </div>
                <div class="carousel-item">
                        <img src="{{asset('assets/expoaaltoalvaro.jpg')}} "class="d-block " alt="...">
                        <div class='cartouche animated fadeInRight'>TEST CARTOUCHE</div>
                    </div>
                    <div class="carousel-item">
                            <img src="{{asset('assets/friseworkshop.jpg')}} "class="d-block " alt="...">
                            <div class='cartouche animated fadeInRight'>TEST CARTOUCHE</div>
                        </div>
                
                {{-- @foreach($products as $product)
                <div class="carousel-item">
                    <img src="{{asset('images/'.$product->pictureProduct->url_img_products)}}" class="d-block " alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h2>Shop</h2>
                        <p>{{$product->titre}}</p>
                        <p>{{$product->prix}} €</p>
                    </div>
                </div>
                @endforeach --}}
                {{-- <div class="carousel-item">
                    <img src="" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h2>Mbappé</h2>
                        <p>Le jeune phénomène hors norme</p>
                    </div>
                </div> --}}
            </div>
            {{-- <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a> --}}
        </div>
      </div>
    @endsection
@section('content')
@component('components.who')
@endcomponent
<div class='col-12 animated fadeInLeft'>

{{$events->links()}}

<h2 id='events'><a href='{{route('events')}}'>TOUS LES EVENTS</a></h2>

<ul class="list-group">
@forelse($events as $event)

<h2><a href="{{url('event', $event->id)}}">{{$event->titre}}</a></h2>

<img width="171" src="{{asset('images/'.$event->pictureEvent->url_img_event)}}" alt="{{$event->pictureEvent->titre}}">


<div class="col-xs-6 col-md-9">
<h3>Déscription :</h3>
{{$event->description}}
</div>
<div class="col-xs-6 col-md-9">
    <h3>Prix :</h3>
    <p>{{$event->prix}} €</p>
</div>
<div class="col-xs-6 col-md-9">
        <h3>Date :</h3>
        {{$event->date}} 
</div>
<div class="col-xs-6 col-md-9">
        <h3>Status :</h3>
        {{$event->status}}
</div>
<div class="col-xs-6 col-md-9">
        <h3>Catégorie :</h3>
        {{$event->category->titre}}
</div>
@empty
<li>Désolé pour l'instant aucun évènement n'est publié sur le site</li>
@endforelse
</ul>
</div>

<div class='col-12 hideR animated '>
        
        <h2 id='products'><a href='{{route('shop')}}'>TOUS LES PRODUITS</a></h2>  
        <ul class="list-group">               
        @forelse($products as $product)
        
        
        <h2><a href="{{url('product', $product->id)}}">{{$product->titre}}</a></h2>
        
        <img width="171" src="{{asset('images/'.$product->pictureProduct->url_img_products  )}}" alt="{{$product->pictureProduct->titre}}">
        
        
        <div class="col-xs-6 col-md-9">
        <h3>Déscription :</h3>
        {{$product->description}}
        </div>
        <div class="col-xs-6 col-md-9">
            <h3>Prix :</h3>
            <p>{{$product->prix}} €</p>
        </div>
        <div class="col-xs-6 col-md-9">
                <h3>Status :</h3>
                {{$product->status}}
        </div>
        @empty
        <li>Désolé pour l'instant aucun produit n'est publié sur le site</li>
        @endforelse
        </ul>
        </div>
        
        <div class='col-12 hideL animated '>
                
                {{-- <h2 id='partners'><a href='{{route('partners')}}'>TOUS LES PARTENAIRES</a></h2> --}}
                
                <ul class="list-group">
                @forelse($partners as $partner)
                <h2><a href="{{url('partner', $partner->id)}}">{{$partner->nom}}</a></h2>
                
                <img width="171" src="{{asset('images/'.$partner->picturePartner->url_img_partners  )}}" alt="{{$partner->picturePartner    ->titre}}">
                
                
                <div class="col-xs-6 col-md-9">
                <h3>Déscription :</h3>
                {{$partner->description}}
                </div>
                @empty
                <li>Désolé pour l'instant aucun produit n'est publié sur le site</li>
                @endforelse
                </ul>
                </div>
                <div class="card-body col-3 hideR animated">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
    
                        @if (session('failure'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('failure') }}
                            </div>
                        @endif
                        
                       <h2>Inscrivez-vous à notre NewsLetter</h2>
    
                       <form  action="{{url('/newsletter')}}" method='post'>
                        {{ csrf_field() }}
                           <div class='form-group'>
                               <label for="email">Email</label>
                               <input id='email' name='email' type="text" class='form-control'>
                           </div>
                           <div class='form-group'>
                                <input type="submit" class='form-control'>
                            </div>
                       </form>
                    </div>
@endsection 


