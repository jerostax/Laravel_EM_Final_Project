@extends('layouts.master')
@section('content')
<h1>PAGE EVENT</h1>

@foreach($events as $event)
<p>{{$event->titre}}</p>
<p>{{$event->Status}}</p>
@endforeach
@endsection