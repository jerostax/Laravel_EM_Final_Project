@extends('layouts.master')
@section('content')
<h1>PAGE EVENT</h1>

<div class='row event-view'>
 
        <div class="card col-sm-12 col-lg-5 animated fadeInLeft"><a href="{{url('event', $expos->id)}}">
                <h2>Éxposition</h2>
                <img src="{{asset('images/'.$expos->pictureEvent->url_img_event)}}" class="card-img-top" alt="{{$expos->titre}}">
                <div class="card-body">
                  <h5 class="card-title">{{$expos->titre}}</h5>
                  <p class="card-text"><small class="text-muted">Status : {{$expos->status}} </small></p>
                  <p class="card-text"><small class="text-muted" style='font-weight:bold'>Prix : {{$expos->prix}} €</small></p>
                  <p class="card-text"><small class="text-muted" style='font-weight:bold'>Prix Adhérent: {{$expos->promo}} €</small></p>
                  <p class="card-text"><small class="text-muted" style='font-weight:bold'>Date: {{$expos->date}} €</small></p>
                </div>
          </a></div>
        

       
        <div class="card col-sm-12 col-lg-5 animated fadeInRight"><a href="{{url('event', $workshops->id)}}">
                <h2>WorkShop</h2>
                <img src="{{asset('images/'.$workshops->pictureEvent->url_img_event)}}" class="card-img-top" alt="{{$workshops->titre}}">
                <div class="card-body">
                  <h5 class="card-title">{{$workshops->titre}}</h5>
                  <p class="card-text"><small class="text-muted">Status : {{$workshops->status}} </small></p>
                  <p class="card-text"><small class="text-muted" style='font-weight:bold'>Prix : {{$workshops->prix}} €</small></p>
                  <p class="card-text"><small class="text-muted" style='font-weight:bold'>Prix Adhérent: {{$workshops->promo}} €</small></p>
                </div>
          </a></div>
      

       
        <div class="card col-sm-12 col-lg-5 animated fadeInDown"><a href="{{url('event', $excursions->id)}}">
                <h2>Éxcursion</h2>
                <img src="{{asset('images/'.$excursions->pictureEvent->url_img_event)}}" class="card-img-top" alt="{{$excursions->titre}}">
                <div class="card-body">
                  <h5 class="card-title">{{$excursions->titre}}</h5>
                  <p class="card-text"><small class="text-muted">Status : {{$excursions->status}} </small></p>
                  <p class="card-text"><small class="text-muted" style='font-weight:bold'>Prix : {{$excursions->prix}} €</small></p>
                  <p class="card-text"><small class="text-muted" style='font-weight:bold'>Prix Adhérent: {{$excursions->promo}} €</small></p>
                </div>
          </a></div>
      

       
        <div class="card col-sm-12 col-lg-5 animated fadeInDown"><a href="{{url('event', $soirees->id)}}">
                <h2>Soirée</h2>
                <img src="{{asset('images/'.$soirees->pictureEvent->url_img_event)}}" class="card-img-top" alt="{{$soirees->titre}}">
                <div class="card-body">
                  <h5 class="card-title">{{$soirees->titre}}</h5>
                  <p class="card-text"><small class="text-muted">Status : {{$soirees->status}} </small></p>
                  <p class="card-text"><small class="text-muted" style='font-weight:bold'>Prix : {{$soirees->prix}} €</small></p>
                  <p class="card-text"><small class="text-muted" style='font-weight:bold'>Prix Adhérent: {{$soirees->promo}} €</small></p>
                </div>
          </a></div>
        
</div>
@endsection