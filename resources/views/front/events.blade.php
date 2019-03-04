@extends('layouts.master')
@section('content')
<h1>PAGE EVENT</h1>

@foreach($events as $event)
<p>{{$event->Titre}}</p>
<p>{{$event->Status}}</p>
@endforeach
@endsection