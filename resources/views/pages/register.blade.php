@extends('layouts.layout')

@section('content')
<div class="container">   
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <!-- Sign Up form -->
        <form action="{{ route('register') }}" method="post" class="Signup">
          @csrf
          <h3 class="mt-4 text-center">Registration user form</h3>
          <div class="form-group">
              <label for="name">Name</label>
            <input type="text" class="form-control" placeholder="Enter your name" name="name" required>
          </div>
          <div class="form-group">
              <label for="surname">Surame</label>
            <input type="text" class="form-control" placeholder="Enter your surname" name="surname" required>
          </div>
          <div class="form-group">
              <label for="email">Email</label>
            <input type="text" class="form-control" placeholder="Enter Email" name="email" required>
          </div>      
          <div class="form-group">
              <label for="password_confirmation">Password</label>
            <input type="password" class="form-control" placeholder="Enter Password" name="password_confirmation" required> 
          </div>
          <div class="form-group">
            <label>Insert image</label>
            <input type="file" id="Profile-pic" name="channel-img" class="form-control">
            <label for="Profile-pic" class="choose-icon"><i class="fa fa-camera" aria-hidden="true"></i></label>
          </div>
          <button type="submit" class="btn btn-success">Sign Up</button>
          <hr>
          <div class="form-group">
            <p class="not-yet">Already have an account? <a href="login">Login</a></p>
          </div>
        </form>
      </div>
    </div>
@endsection