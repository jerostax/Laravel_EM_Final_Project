@extends('layouts.master')
@section('content')
<h1 class='animated fadeInLeft title'>Shop</h1>

<div class='paginate-product'>{{$products->links()}}</div>
<div class="row">
@foreach($products as $product)
<div class=" col-sm-8 col-lg-2 product-view"><a href="{{url('product', $product->id)}}">
        <img src="{{asset('images/'.$product->pictureProduct->url_img_products)}}" class="card-img-top animated zoomIn" alt="{{$product->titre}}">
        <div class="">
          <h5 class="animated fadeInDown"><a href="{{url('product', $product->id)}}">{{$product->titre}}</a></h5>
         <p class="animated fadeInUp product-price">{{$product->prix}} €</p>

        </div>
  </a></div>
@endforeach
</div>
@endsection