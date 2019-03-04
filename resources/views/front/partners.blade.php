@extends('layouts.master')
@section('content')
<h1>PAGE PARTENAIRES</h1>

@foreach($partners as $partner)
<p>{{$partner->Nom}}</p>
<p>{{$partner->Description}}</p>
@endforeach
@endsection