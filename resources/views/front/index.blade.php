@extends('layouts.master')
@section('header')

<!-- SLIDER -->
<header id="carouselExampleFade" class="carousel carousel-fade "
data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="carouselExampleCaptions" data-slide-to="0" class="active"></li>
              <li data-target="carouselExampleCaptions" data-slide-to="1"></li>
              <li data-target="carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active ">
                <img src="{{asset('assets/excursion.jpg')}}" class="d-block w-100" alt="Excursion">
                <div class='cartouche animated fadeInRight'>
                    <h2>{{$excursions->titre}}</h2>
                    <h3><a href="{{url('event', $excursions->id)}}">Excursion</a></h3>
                    <p>{{$excursions->description}}</p>
                    <p>Le {{$excursions->date->format('d-m-Y')}}</p>
                    <img class='logo-scroll'src='{{asset('assets/pictoscroll.png')}}'>
                </div>
              </div>         
              <div class="carousel-item ">
                <img src="{{asset('assets/expoaaltoalvaro.jpg')}}" class="d-block .img-fluid w-100 " alt="Exposition">
                <div class='cartouche animated fadeInRight'>
                    <h2>{{$expos->titre}}</h2>
                    <h3><a href="{{url('event', $expos->id)}}">Exposition</a></h3>
                    <p>{{$expos->description}}</p>
                    <p>Le {{$expos->date->format('d-m-Y')}}</p>
                    <img class='logo-scroll'src='{{asset('assets/pictoscroll.png')}}'>
                        
                </div>
              </div>            
              <div class="carousel-item ">
                <img src="{{asset('assets/friseworkshop.jpg')}}" class="d-block w-100" alt="WorkShop">
                <div class='cartouche animated fadeInRight'>
                    <h2>{{$workshops->titre}}</h2>
                    <h3><a href="{{url('event', $workshops->id)}}">WorkShop</a></h3>
                    <p>{{$workshops->description}}</p>
                    <p>Le {{$workshops->date->format('d-m-Y')}}</p>
                    <img class='logo-scroll'src='{{asset('assets/pictoscroll.png')}}'>
                </div>
              </div>            
            </div>
        </header>     
    @endsection
@section('content')

<!-- SLOGAN -->
<section class='row' id='slogan'>
    <div class='col-lg-4 col-sm-12 animated hideR'>
        <img class='slogan-img' src='{{asset('assets/pictocoeur.jpg')}}' alt='Pictogramme Coeur'>
        <div>
        <span>FLUID est pour vous</span><br>
        <span>et ne sera que par vous</span>
        </div>
    </div>
    <div class='col-lg-4 col-sm-12 animated hideD'>
        <div >
        <span>FLUID est un collectif</span><br>
        <span>de curieux</span>
        </div>
        <img class='slogan-img' src='{{asset('assets/pictooeil.jpg')}}' alt='Pictogramme Oeil'>    
    </div>
    <div class='col-lg-4 col-sm-12 animated hideL'>
        <img class='slogan-img' src='{{asset('assets/pictobouche.jpg')}}' alt='Pictogramme Oeil'>
        <div>
        <span>FLUID n'existe pas sans</span><br>
        <span>partage ni échange</span>
        </div>
    </div>
</section>

<!-- EQUIPE FLUID -->

<section class='row' id='equipe'>       
    <div class='col-lg-4 col-sm-10 poster animated hideBL'>       
            <figure>
                <figcaption class='caption'>Caroline<legend class='legend'>La fondatrice de FLUID</legend></figcaption>
                <picture> 
                        <source media="(min-width: 600px)"
                        srcset='{{asset('assets/caroline.jpg')}}'>
                        <img class='equipe' src='{{asset('assets/carolinepetite.jpg')}}'> 
                </picture>          
            </figure>
    </div>  
    <div class='col-lg-4 col-sm-10 poster animated hideZ' id="poster-middle">      
            <figure>
                <figcaption class='caption'>Sasha<legend class='legend'>L'étudiante en design'</legend></figcaption>
                <picture> 
                        <source media="(min-width: 600px)"
                        srcset='{{asset('assets/femme.jpg')}}'>
                        <img class='equipe' src='{{asset('assets/femmepetite.jpg')}}'>  
                </picture>
                <div class='adn'>
                        <h2>L'adn de fluid</h2>
                        <a class='btn-perso btn-adn' href='{{url('/collectif')}}'>Découvre le collectif fluid</a>
                </div>
            </figure>
    </div>  
    <div class='col-lg-4 col-sm-10 poster animated hideBR'>       
            <figure>
                <figcaption class='caption'>Julien<legend class='legend'>Le passionné</legend></figcaption>
                <picture> 
                        <source media="(min-width: 600px)"
                        srcset='{{asset('assets/homme.jpg')}}'>
                        <img class='equipe' src='{{asset('assets/hommepetit.jpg')}}'>  
                </picture>
            </figure>
    </div>  
</section>

<!-- INFOS EVENEMENTS -->
<section class='row'>        
    <div class='col-lg-4 col-sm-10 poster animated hideL'>
            <a href="{{url('event', $expos->id)}}">
            <img src='{{asset('images/'.$expos->pictureEvent->url_img_event)}}'>
                <div class='info'>
                    <h2>{{$expos->titre}}</h2>
                    <h3>Exposition</h3>
                    <p>{{$expos->date->format('d-m-Y')}}</p>
                </div>
            </a>
    </div>  
    <div class='col-lg-4 col-sm-10 poster animated hideU'>
        <a href="{{url('event', $excursions->id)}}">
        <img src='{{asset('images/'.$excursions->pictureEvent->url_img_event)}}'>
            <div class='info'>
                <h2>{{$excursions->titre}}</h2>
                <h3>Excursion</h3>
                <p>{{$excursions->date->format('d-m-Y')}}</p>
            </div>
        </a> 
    </div>  
    <div class='col-lg-4 col-sm-10 poster animated hideR'>
        <a href="{{url('event', $workshops->id)}}">
        <img src='{{asset('images/'.$workshops->pictureEvent->url_img_event)}}'>
            <div class='info'>
                <h2>{{$workshops->titre}}</h2>
                <h3>WorkShop</h3>
                <p>{{$workshops->date->format('d-m-Y')}}</p>
            </div>
        </a>
    </div>  
</section>

<!-- REJOINS FLUID -->
<section class='row join-fluid'>
    <div class='col-lg-3 animated hideR'>
        <span>Deviens un membre actif et réactif de FLUID.</span><br>
        <span>Assouvis ton envie  de culture, ta soif de pratiques artistiques et d'échanges professionnels.</span>
    </div>
    <div class='col-lg-3 animated hideZ'>
        <img src='{{asset('assets/picto.jpg')}}'>
    </div>
    <div class='col-lg-3 animated hideL'>
        <h2>rejoins le fluid</h2>
        <a class='btn-perso btn-fluid'href='{{url('/adhesion')}}'>J'adhère au collectif</a>
    </div>
</section>

<!-- NEWSLETTER & VIDEO -->
<section class='row' id='video-nl'>  
    <div class='col-lg-5 col-sm-12 animated hideR' id='newsletter'>
        <div class="card-body ">
            @if (session('success'))
                <div class="alert alert-success  alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

                <h2 class='hideU animated'>La newsletter des Fluids</h2>
                <p class='hideU animated'>M'abonner à la newsletter</p>   
                    <form  class='hideU animated' action="{{url('/newsletter')}}" method='POST'>
                        {{ csrf_field() }}
                    <div class='form-group '>
                        <label for="email">Email</label>
                        <input id='email' name='email' type="text" class='form-control ' placeholder='Votre Email'>
                    </div>
                    <div class='form-group'>
                        <input type="submit" class='form-control'>
                    </div>
                    </form>
        </div>                    
    </div>
    <div class='col-lg-3 col-sm-12  video animated hideD'>
        <video controls poster="{{asset('assets/videobouton.jpg')}}" width="500">                   
                <source src="{{asset('assets/soireefluid-converted.mp4')}}" type="video/mp4">                               
                       Désolé, votre navigateur ne supporte pas cette vidéo :(
        </video>
    </div>
</section>

<!-- SECTION INSTAGRAM -->
<section id='instafluid'>
    <p class='insta-fluid animated hideD'><a target='_blank'href='https://www.instagram.com/fluid_flot_graphique/?hl=fr'><i class="fab fa-instagram "></i></a></p>
    <h2 class='animated hideBR'>Rejoins le FLUID Instagram</h2>
    <div class='col-lg-12 animated hideZ'id="instafeed"></div>   
</section>

@endsection 


