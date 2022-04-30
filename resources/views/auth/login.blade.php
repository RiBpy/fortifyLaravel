@extends("layouts.app")
@section("content")
  <div class="container mt-5">
      <div class="row justify-content-center">
          <div class=" col-md-5 ">
              <h3 class="text-center">Login form</h3>
              <div class="  card p-4 bg-dark text-light">
              <form action="{{route('login')}}" method="post" class="form-group">
              @csrf
                <label class="form-label">Email</label>
                <input type="email" id="inputPassword5" class="form-control" name="email">
                <label  class="form-label">Password</label>
                <input type="password" id="inputPassword5" class="form-control" name="password">
                <button type="submit" class="btn btn-outline-info my-2">Submit</button>
                <div class="d-flex justify-content-between py-2">
                    <a href="#">Forgot Password</a>
                    <a href="register">If New</a>
                </div> 
              </form>
              </div>
          </div>
      </div>
  </div>
@endsection