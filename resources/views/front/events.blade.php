@extends('layouts.master')
@section('content')

<!-- SECTION EXPOSITIONS -->
<section class='col-lg-12 col-sm-12 event event-expo'>
  <h2 class='animated fadeInRight'>Expositions</h2>
  <p class='animated fadeInLeft'>Des expositions pour assouvir votre soif de connaissance.</p>
  <p class='animated zoomIn'>Prix négociés avec conférencier ou non pour expositions ou parcours de visite extérieur.</p>
  @foreach($expos as $expo)
  <div class='row'>
  <div class='col-lg-6 animated zoomIn'>
      <img src="{{asset('images/'.$expo->pictureEvent->url_img_event)}}" class='event-view-img' alt="{{$expo->titre}}">
  </div>
  <div class='col-lg-6 animated fadeInDown info-event'>
      <h3>{{$expo->titre}}</h3>
      <p>{{$expo->date->format('d-m-Y')}}</p>
      <p class='desc'>{{$expo->description}}</p>
      <a class='savoir-plus'href='{{url('event', $expo->id)}}'>En savoir plus</a>
   </div>
  </div>
  @endforeach
</section>

<!-- SECTION WORKSHOPS -->
<section class='col-lg-12 col-sm-12 event event-work'>
    <h2 class='animated hideR'>Workshops</h2>
    <p class='animated hideL'>Des Workshops organisés en petits groupes, en soirée (2/3 heures) ou week-end (demi-journée).</p>
    <p class='animated hideZ'>Prix variable selon l'atelier.</p>
    @foreach($workshops as $workshop)
    <div class='row'>
    <div class='col-lg-6 animated hideZ'>
        <img src="{{asset('images/'.$workshop->pictureEvent->url_img_event)}}" class='event-view-img' alt="{{$workshop->titre}}">
    </div>
    <div class='col-lg-6 animated hideD info-event'>
        <h3>{{$workshop->titre}}</h3>
        <p>{{$workshop->date->format('d-m-Y')}}</p>
        <p class='desc'>{{$workshop->description}}</p>
        <a class='savoir-plus' href='{{url('event', $workshop->id)}}'>En savoir plus</a>
     </div>
    </div>
    @endforeach
</section>

<!-- SECTION EXCURSIONS -->
<section class='col-lg-12 col-sm-12 event event-excu'>
      <h2 class='animated hideR'>Excursions</h2>
      <p class='animated hideL col-lg-7'>Voyages organisés sur deux jours pour des évènements créatifs. Réservation du logement et du transport à prix de groupe, organisation des visites.</p>
      @foreach($excursions as $excursion)
      <div class='row'>
      <div class='col-lg-6 animated hideZ'>
          <img src="{{asset('images/'.$excursion->pictureEvent->url_img_event)}}" class='event-view-img' alt="{{$excursion->titre}}">
      </div>
      <div class='col-lg-6 animated hideD info-event'>
          <h3>{{$excursion->titre}}</h3>
          <p>{{$excursion->date->format('d-m-Y')}}</p>
          <p class='desc'>{{$excursion->description}}</p>
          <a class='savoir-plus' href='{{url('event', $excursion->id)}}'>En savoir plus</a>
       </div>
      </div>
      @endforeach
</section>

<!-- SECTION SOIREES -->
<section class='col-lg-12 col-sm-12 event event-soiree'>
        <h2 class='animated hideR'>Soirées</h2>
        <p class='animated hideL'>Des soirées pour mélanger notre FLUID entre deux bouchées de charcut' fromage.</p>
        @foreach($soirees as $soiree)
        <div class='row'>
        <div class='col-lg-6 animated hideZ'>
            <img src="{{asset('images/'.$soiree->pictureEvent->url_img_event)}}" class='event-view-img' alt="{{$soiree->titre}}">
        </div>
        <div class='col-lg-6 animated hideD info-event'>
            <h3>{{$soiree->titre}}</h3>
            <p>{{$soiree->date->format('d-m-Y')}}</p>
            <p class='desc'>{{$soiree->description}}</p>
            <a class='savoir-plus' href='{{url('event', $soiree->id)}}'>En savoir plus</a>
         </div>
        </div>
        @endforeach
</section>
@endsection