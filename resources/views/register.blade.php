@extends('layout')
@section('content')
 <h1>Register</h1>
 <div class="container">
    <div class="row">
        <form action="register" method="POST" >
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">User name</label>
                <input type="text" class="form-control" name="userName" aria-describedby="emailHelp" placeholder="Enter email">
              </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" name="userEmail" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" name="userPassword" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
 </div>
 
@endsection