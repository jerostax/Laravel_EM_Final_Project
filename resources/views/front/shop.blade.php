@extends('layouts.master')
@section('content')
<h1 class='animated fadeInLeft'>PAGE SHOP</h1>


<div class="row">
@foreach($products as $product)
<div class="card col-sm-8 col-lg-3 product-view animated fadeInUp"><a href="{{url('product', $product->id)}}">
        <img src="{{asset('images/'.$product->pictureProduct->url_img_products)}}" class="card-img-top" alt="{{$product->titre}}">
        <div class="card-body">
          <h5 class="card-title"><a href="{{url('product', $product->id)}}">{{$product->titre}}</a></h5>
          <p class="card-text"><small class="text-muted">Status : {{$product->status}} </small></p>

          <p class="card-text"><small class="text-muted" style='font-weight:bold'>Prix : {{$product->prix}} €</small></p>

        </div>
  </a></div>
@endforeach
</div>
@endsection