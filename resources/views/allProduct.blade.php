@extends('layout')
@section('content')
<h1>Product List</h1>
  @foreach ($products as $product)
    <div class="container">
      <div class="row">
        <div class="col-sm-3">
          <img class="editProduct" src={{$product->productGallery}} alt="" srcset="">
        </div>
        <div class="col-sm-6">
          <h2>{{$product->productName}}</h2>
          <p>{{$product->productDescription}}</p>
        </div>
        <div class="col-sm-3">
          <a href="/editProduct/{{$product->id}}"><button class="btn btn-primary">edit</button></a>
        </div>
      </div>
    </div>
    <br>
  @endforeach
@endsection
