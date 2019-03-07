@extends('layouts.master')

@section('content')
<h1>TEST PAGE EVENT</h1>




<h1>{{$events->titre}}</h1>
<p>{{$events->description}}</p>
<img src="{{asset('images/'.$events->pictureEvent->url_img_event)}}">

@endsection


