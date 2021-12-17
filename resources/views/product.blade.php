@extends('layout')
@section('content')
    <h1>product page</h1>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          @foreach ($products as $product)
          <div class="carousel-item {{$product['id']==1?'active':''}}">
            <a href="detail/{{$product->id}}">
              <img class="slider-img" src={{$product->productGallery}} alt="slider img">
              <h2>{{$product->productName}}</h2>
              <p>{{$product->productDescription}}</p>
            </a>
          </div>
          @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>   
      <div class="trending-products">
        <h1>Trending Products</h1>  
        @foreach ($products as $product)
        <div class="trending-items">
          <a href="detail/{{$product->id}}">
            <img class="trending-image" src={{$product->productGallery}} alt="slider img">
            <h2>{{$product->productName}}</h2>
          </a>
        </div>
        @endforeach  
      </div> 
@endsection
