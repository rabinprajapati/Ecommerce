<h1>search page</h1>
@extends('layout')
@section('content')
    <h1>product page</h1>  
      <div class="trending-products">
        <h1>Searched Products</h1>  
        @foreach ($products as $product)
        <div class="searched-items">
          <a href="detail/{{$product->id}}">
            <img class="trending-image" src={{$product->productGallery}} alt="slider img">
            <h2>{{$product->productName}}</h2>
            <h2>{{$product->productPrice}}</h2>
            <p>{{$product->productDescription}}</p>
          </a>
        </div>
        @endforeach  
      </div> 
@endsection
