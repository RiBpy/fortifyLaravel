@extends("layouts.app")
@section("content")
  <div class="container mt-5">
      <div class="row justify-content-center">
          <div class=" col-md-5 ">
              <h3 class="text-center">Welcome:{{Auth::user()->name}}</h3>
              <h6>This is Home page</h6>   
          </div>
      </div>
  </div>
@endsection