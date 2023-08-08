@extends('layouts.masterauthen')
@section('content')
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="row w-100 m-0">
        <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
          <div class="card col-lg-4 mx-auto">
            <div class="card-body px-5 py-5">
              <h3 class="card-title text-left mb-3">Register</h3>
              <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <label>name *</label>
                    <input type="text" name="name" class="form-control p_input">
                </div>

                <div class="form-group">
                  <label>email *</label>
                  <input type="email" name="email" class="form-control p_input">
                </div>

                <div class="form-group">
                  <label>Password *</label>
                  <input type="password" name="password"class="form-control p_input">
                </div>

                <div class="form-group">
                    <label>Password Confirm *</label>
                    <input type="password" name="password_confirmation"class="form-control p_input">
                  </div>

                <div class="form-group d-flex align-items-center justify-content-between">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input"> Remember me </label>

                <div class="text-center">
                  <button type="submit" class="btn btn-primary btn-block enter-btn">Sign Up</button>
                </div>
               
                <p class="sign-up">Don't have an Account?<a href="{{route('login')}}"> Sign Up</a></p>
              </form>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- row ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>

@endsection
