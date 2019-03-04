@extends('layouts.master')
@section('content')
<h1>PAGE PARTENAIRES</h1>

@foreach($partners as $partner)
<p>{{$partner->nom}}</p>
<p>{{$partner->description}}</p>
@endforeach
@endsection