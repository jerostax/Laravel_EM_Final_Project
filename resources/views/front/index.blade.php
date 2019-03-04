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
<h3>Déscription :</h3>
{{$event->Description}}
</div>
<div class="col-xs-6 col-md-9">
    <h3>Prix :</h3>
    <p>{{$event->Prix}} €</p>
</div>
<div class="col-xs-6 col-md-9">
        <h3>Date :</h3>
        {{$event->Date}} 
</div>
<div class="col-xs-6 col-md-9">
        <h3>Status :</h3>
        {{$event->Status}}
</div>
<div class="col-xs-6 col-md-9">
        <h3>Catégorie :</h3>
        {{$event->category->Titre}}
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
        <h3>Déscription :</h3>
        {{$product->Description}}
        </div>
        <div class="col-xs-6 col-md-9">
            <h3>Prix :</h3>
            <p>{{$product->Prix}} €</p>
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
        <div class='col-12'>
                {{$partners->links()}}
                <h2>TOUS LES PARTENAIRES</h2>
                
                <ul class="list-group">
                @forelse($partners as $partner)
                <li class="list-group-item">
                <h2><a href="{{url('partner', $partner->id)}}">{{$partner->Nom}}</a></h2>
                
                <img width="171" src="{{asset('images/'.$partner->picturePartner->url_img_partners  )}}" alt="{{$partner->picturePartner    ->titre}}">
                
                
                <div class="col-xs-6 col-md-9">
                <h3>Déscription :</h3>
                {{$partner->Description}}
                </div>
                @empty
                <li>Désolé pour l'instant aucun produit n'est publié sur le site</li>
                @endforelse
                </ul>
                </div>
                <div class="card-body col-3">
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
    
                       <form action="{{url('/newsletter')}}" method='post'>
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


