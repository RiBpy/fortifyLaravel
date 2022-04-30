@extends("layouts.app")
@section("content")
<div class="container mt-5">
      <div class="row justify-content-center">
          <div class=" col-md-5 ">
              <h3 class="text-center">Registration form</h3>
              <div class="  card p-4 bg-dark text-light">
              <form action="{{route('register')}}" method="POST">
                  @csrf
                <label class="form-label">Name</label>
                <input type="text" id="inputPassword5" class="form-control" name="name">
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
                <label class="form-label">Email</label>
                <input type="email" id="inputPassword5" class="form-control" name="email">
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
                <label  class="form-label">Password</label>
                <input type="password" id="inputPassword5" class="form-control" name="password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
                <label  class="form-label">Confirm Password</label>
                <input type="password" id="inputPassword5" class="form-control" name="password-confirmation">
                @error('password-confirmation')
                <span class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
                <button type="submit" class="btn btn-outline-info my-2">Submit</button>
                <div class="py-2">
                <a href="login">If Registered</a>
                </div>
              </form>
              </div>
          </div>
      </div>
  </div>
  @endsection