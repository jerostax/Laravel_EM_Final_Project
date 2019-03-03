@extends('layouts.master')

@section('content')
<div class='col-12'>
{{$events->links()}}
<h2>TOUS LES EVENTS</h2>

<ul class="list-group">
@forelse($events as $event)
<li class="list-group-item">
<h2><a href="{{url('event', $event->id)}}">{{$event->Titre}}</a></h2>

<img width="171" src="{{asset('images/'.$event->pictureEvent->url_img_event)}}" alt="{{$event->pictureEvent->titre}}">


<div class="col-xs-6 col-md-9">
<h2>Déscription</h2>
{{$event->Description}}
</div>
<div class="col-xs-6 col-md-9">
    <h3>Prix</h3>
    {{$event->Prix}}
</div>
<div class="col-xs-6 col-md-9">
        <h3>Date</h3>
        {{$event->Date}}
</div>
<div class="col-xs-6 col-md-9">
        <h3>Status</h3>
        {{$event->Status}}
</div>
@empty
<li>Désolé pour l'instant aucun évènement n'est publié sur le site</li>
@endforelse
</ul>
</div>
<div class='col-12'>
        {{$products->links()}}
        <h2>TOUS LES PRODUITS</h2>
        
        <ul class="list-group">
        @forelse($products as $product)
        <li class="list-group-item">
        <h2><a href="{{url('product', $product->id)}}">{{$product->Nom}}</a></h2>
        
        <img width="171" src="{{asset('images/'.$product->pictureProduct->url_img_products  )}}" alt="{{$product->pictureProduct->titre}}">
        
        
        <div class="col-xs-6 col-md-9">
        <h2>Déscription</h2>
        {{$product->Description}}
        </div>
        <div class="col-xs-6 col-md-9">
            <h3>Prix</h3>
            {{$product->Prix}}
        </div>
        <div class="col-xs-6 col-md-9">
                <h3>Status</h3>
                {{$product->status}}
        </div>
        @empty
        <li>Désolé pour l'instant aucun produit n'est publié sur le site</li>
        @endforelse
        </ul>
        </div>
        <div class='col-12'>
                {{$partners->links()}}
                <h2>TOUS LES PRODUITS</h2>
                
                <ul class="list-group">
                @forelse($partners as $partner)
                <li class="list-group-item">
                <h2><a href="{{url('partner', $partner->id)}}">{{$partner->Nom}}</a></h2>
                
                <img width="171" src="{{asset('images/'.$partner->picturePartner->url_img_partners  )}}" alt="{{$partner->picturePartner    ->titre}}">
                
                
                <div class="col-xs-6 col-md-9">
                <h2>Déscription</h2>
                {{$partner->Description}}
                </div>
                @empty
                <li>Désolé pour l'instant aucun produit n'est publié sur le site</li>
                @endforelse
                </ul>
                </div>
@endsection 


