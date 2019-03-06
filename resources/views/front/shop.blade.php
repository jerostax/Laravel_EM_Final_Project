@extends('layouts.master')
@section('content')
<h1>PAGE SHOP</h1>

@foreach($products as $product)
<a href='{{url('product', $product->id)}}'>{{$product->titre}}</a>
<p>{{$product->status}}</p>
@endforeach
@endsection