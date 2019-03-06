@extends('layouts.master')
@section('content')
<h1>PAGE EVENT</h1>

{{-- @foreach($events as $event)
@foreach($categories as $category)

<p>{{$category->titre}}</p>
<a href='{{url('event', $event->id)}}'>{{$event->titre}}</a>
<p>{{$event->description}}</p>
@endforeach
@endforeach --}}
<div class='col-12'>
@foreach($expos as $expo)
<h2>Expositions</h2>
<a href="{{url('event', $expo->id)}}">{{$expo->titre}}</a>
@endforeach
</div>

<div class='col-12'>
@foreach($workshops as $workshop)
<h2>Workshops</h2>
<a href="{{url('event', $workshop->id)}}">{{$workshop->titre}}</a>
@endforeach
</div>

<div class='col-12'>
@foreach($excursions as $excursion)
<h2>Excursions</h2>
<a href="{{url('event', $excursion->id)}}">{{$excursion->titre}}</a>
@endforeach
</div>

<div class='col-12'>
@foreach($soirees as $soiree)
<h2>Soirée</h2>
<a href="{{url('event', $soiree->id)}}">{{$soiree->titre}}</a>
@endforeach
</div>
@endsection