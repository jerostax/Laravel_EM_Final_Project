@extends('layouts.master')

@section('content')
<h1>TEST PAGE PRODUCT</h1>


<h1>{{$product->titre}}</h1>
<p>{{$product->description}}</p>
<img src="{{asset('images/'.$product->pictureProduct->url_img_products)}}">


@endsection