@extends('layouts.master')

@section('content')
<h1>TEST PAGE EVENT</h1>


<a href='{{route('events')}}'>retour</a>

<h1>{{$events->titre}}</h1>
<p>{{$events->description}}</p>
<img src="{{asset('images/'.$events->pictureEvent->url_img_event)}}">


<iframe id="haWidget" allowtransparency="true" scrolling="auto" src="{{$events->form}}" style="width:50%;height:600px;border:none;margin-left: 25%;margin-top: 5em;" onload="window.scroll(0, this.offsetTop)"></iframe><div style="width:100%;text-align:center;">Propulsé par <a href="https://www.helloasso.com" rel="nofollow">HelloAsso</a></div>


@endsection


