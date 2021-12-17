@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img class="detail-img" src="{{$product->productGallery}}" alt="detail img">
            </div>
            <div class="col-sm-6">
                <a href="/products">go back</a>
                <br><br>
                <h3>{{$product->productName}}</h3>
                <h2>Price: ${{$product->productPrice}}</h2>
                <h4>Category: {{$product->productCategory}}</h4>
                <h4>{{$product->productDescription}}</h4>
                <br>
                <button class="btn btn-primary">buy</button>
                <br>
                    <form action="/addToCart" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{$product->id}}">
                        <button class="btn btn-success" type="submit">add to cart</button>
                    </form>
            </div>
        </div>
    </div>
@endsection
