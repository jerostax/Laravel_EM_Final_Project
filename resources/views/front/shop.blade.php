@extends('layouts.master')
@section('content')
<h1>PAGE SHOP</h1>

@foreach($products as $product)
<p>{{$product->titre}}</p>
<p>{{$product->status}}</p>
@endforeach
@endsection