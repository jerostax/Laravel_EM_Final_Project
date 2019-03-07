@extends('layouts.master')
@section('header')

<div id="carouselExampleFade" class="carousel carousel-fade "
data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="carouselExampleCaptions" data-slide-to="0" class="active"></li>
              <li data-target="carouselExampleCaptions" data-slide-to="1"></li>
              <li data-target="carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                @foreach($excursions as $excursion)
              <div class="carousel-item active ">
                <img src="{{asset('assets/excursion.jpg')}}" class="d-block w-100" alt="...">
                <div class='cartouche animated fadeInRight'>
                <h2>{{$excursion->titre}}</h2>
                <h3><a href="{{url('event', $excursion->id)}}">Excursion</a></h3>
                <p>{{$excursion->description}}</p>
                </div>
              </div>
              @endforeach
              @foreach($expos as $expo)
              <div class="carousel-item ">
                <img src="{{asset('assets/expoaaltoalvaro.jpg')}}" class="d-block .img-fluid w-100 " alt="...">
                <div class='cartouche animated fadeInRight'>
                        <h2>{{$expo->titre}}</h2>
                        <h3><a href="{{url('event', $expo->id)}}">Exposition</a></h3>
                        <p>{{$expo->description}}</p>
                </div>
              </div>
              @endforeach
              @foreach($workshops as $workshop)
              <div class="carousel-item ">
                <img src="{{asset('assets/friseworkshop.jpg')}}" class="d-block w-100" alt="...">
                <div class='cartouche animated fadeInRight'>
                        <h2>{{$workshop->titre}}</h2>
                        <h3><a href="{{url('event', $workshop->id)}}">WorkShop</a></h3>
                        <p>{{$workshop->description}}</p>
                </div>
              </div>
              @endforeach
            </div>
        </div>
        
    @endsection
@section('content')

<div class='slogan' id='slogan'>
<p class='sl-1 animated hideR'>Se bouger les fesses pour aller</p>
<p class='sl-1 animated hideL'>voir plus loin si on y est</p>
<p class='sl-2 animated hideR'>Se mélanger en vrai, entre potes, pro et passionnés</p>
<p class='sl-3 animated hideL'>Savoir faire des choses de ses dix doigts</p>
</div>


<div class='row'>
        @foreach($expos as $expo)
    <div class='col-4 poster animated hideL'>
            <a href="{{url('event', $expo->id)}}">
        <img src='{{asset('images/'.$expo->pictureEvent->url_img_event)}}'>
        <div class='info'>
        <h2>{{$expo->titre}}</h2>
        <h3>Exposition</h3>
        <p>{{$expo->date}}</p>
        </div>
            </a>
        </div>
    @endforeach
    @foreach($excursions as $excursion)
    <div class='col-4 poster animated hideU'><a href="{{url('event', $excursion->id)}}">
        <img src='{{asset('images/'.$excursion->pictureEvent->url_img_event)}}'>
        <div class='info'>
        <h2>{{$excursion->titre}}</h2>
        <h3>Exposition</h3>
        <p>{{$excursion->date}}</p>
        </div>
    </a> </div>
    @endforeach
    @foreach($workshops as $workshop)
    <div class='col-4 poster animated hideR'>
            <a href="{{url('event', $workshop->id)}}">
        <img src='{{asset('images/'.$workshop->pictureEvent->url_img_event)}}'>
        <div class='info'>
        <h2>{{$workshop->titre}}</h2>
        <h3>Exposition</h3>
        <p>{{$workshop->date}}</p>
        </div>
    </a>
    </div>
    @endforeach
</div>

<div class='row'>
    <div class='col-6'>
        <div class='social-network animated hideD'><a target="_blank" href='https://www.facebook.com/groups/1797643553621438/'><i class="fab fa-facebook-f"></i></a></div>
        <div class='social-network animated hideU'><a target="_blank" href='https://www.instagram.com/fluid_flot_graphique/?hl=fr'><i class="fab fa-instagram"></i></a></div>
    </div>
    <div class='col-6 animated hideL' id='newsletter'>
                <div class="card-body">
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
                        
                       <h2 class='hideU animated'>La newsletter des Fluids</h2>
                       <p class='hideU animated'>M'abonner à la newsletter</p>
    
                       <form  class='hideU animated' action="{{url('/newsletter')}}" method='post'>
                        {{ csrf_field() }}
                           <div class='form-group'>
                               <label for="email">Email</label>
                               <input id='email' name='email' type="text" class='form-control' placeholder='Votre Email'>
                           </div>
                           <div class='form-group'>
                                <input type="submit" class='form-control'>
                            </div>
                       </form>
                    </div>
         </div>
</div>
@endsection 


