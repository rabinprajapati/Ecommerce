@extends('layout')
@section('content')
      <div class="trending-products">
        <h1>Cart Products</h1>  
        @foreach ($cartlist as $product)
          <div class="container cart-item">
            <div class="row">
              <div class="col-sm-4">
                <div class="cart-items">
                  <a href="detail/{{$product->id}}">
                    <img class="trending-image" src={{$product->productGallery}} alt="slider img">
                  </a>
                </div>
              </div>
              <div class="col-sm-4">
                <h3>{{$product->productName}}</h3>
                <p>{{$product->productDescription}}</p>
              </div>
              <div class="col-sm-4">
                <a href="/removeCart/{{$product->cart_id}}"><button class="btn btn-warning">remove</button></a>
              </div>
            </div>
          </div>
        @endforeach  
      </div> 
@endsection
