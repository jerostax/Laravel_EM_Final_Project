@extends('layouts.master')

@section('content')
<h1>TEST PAGE EVENT</h1>




<h1>{{$event->titre}}</h1>
<p>{{$event->description}}</p>
<img src="{{asset('images/'.$event->pictureEvent->url_img_event)}}">

<iframe id="haWidget" allowtransparency="true" scrolling="auto" src="{{$event->form}}" style="width:50%;height:600px;border:none;margin-left: 25%;margin-top: 5em;" onload="window.scroll(0, this.offsetTop)"></iframe><div style="width:100%;text-align:center;">Propulsé par <a href="https://www.helloasso.com" rel="nofollow">HelloAsso</a></div>

@endsection


