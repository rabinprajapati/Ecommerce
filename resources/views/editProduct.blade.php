@extends('layout')
@section('content')
    <h1>edit product</h1>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <form action="/editProduct" method="post">
                    <div class="form-group">
                        @csrf
                        <input type="hidden" name="productId" value={{$product->id}}>
                        <label>Product name</label>
                        <input type="text" class="form-control" name="productName" value={{$product->productName}} placeholder="product name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">price</label>
                      <input type="number" class="form-control" name="productPrice" value={{$product->productPrice}} placeholder="price">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Description</label>
                      <textarea name="productDescription" value={{$product->productDescription}} id="" cols="70" rows="4"></textarea>
                    </div>
                    <div class="form-group">
                        <label>category</label>
                        <input type="text" class="form-control" name="productCategory" value={{$product->productCategory}} placeholder="category">
                    </div>
                    <button type="submit" class="btn btn-primary">Edit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
