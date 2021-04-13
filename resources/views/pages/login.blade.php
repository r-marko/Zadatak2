@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h3 class="card-title text-center">Sign In</h3>
            <form class="form-signin">
            @csrf
              <div class="form-label-group">
                <label for="inputName">Name</label>
                <input type="text" id="inputName" class="form-control" placeholder="Your name" required autofocus>
              </div>
              <div class="form-label-group pt-3">
                <label for="inputPassword">Password</label>
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember password</label>
              </div>
              <button class="btn btn-lg btn-success btn-block" type="submit">Sign in</button>
              <p>You don't have account yet? <a href="/register">Sign Up</a></p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
