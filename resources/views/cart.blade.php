@extends('layout')
@section('content')
      <div class="trending-products">
        <h1>Cart Products</h1>  
        @foreach ($cartlist as $product)
        <div class="cart-items">
          <a href="detail/{{$product->id}}">
            <img class="trending-image" src={{$product->productGallery}} alt="slider img">
            <h2>{{$product->productName}}</h2>
          </a>
        </div>
        @endforeach  
      </div> 
@endsection
