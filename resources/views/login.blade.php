@extends('layouts.main')

@section('container')
<div class="halaman">
    <p class="title">customer's Login</p>
    <p class="pages">HOME / Login</p>
  </div>

  <!-- Login -->
  <div class="login-wrapper">
    <div class="cards">
      <div class="login-card">
        <div class="login-title">
          <h3>LOGIN</h3>
        </div>
        <div class="form-login">
          <form id="login" action="">
            <label for="">Email/Username/Phone Number</label>
            <input type="text" placeholder="Email/Username/Phone Number" />
            <label for="">Password:</label>
            <div class="password-container">
              <input
                type="password"
                placeholder="Enter your password"
                id="password" />
              <button id="toogle-password" type="button">
                <img
                  src="{{ asset('assets/asset/images/eye.png') }}"
                  alt="##"
                  width="25px"
                  class="eye" />
                <img
                  src="{{ asset('assets/asset/images/eye-off.png') }}"
                  alt="###"
                  width="25px"
                  class="eye-off"
                  style="display: none" />
              </button>
            </div>
            <button class="btn-login">Login</button>
            <a href="" class="forgot">FORGOT YOUR PASSWORD?</a>
          </form>
        </div>
      </div>
      <div class="register-card">
        <div class="register-title">
          <h3>REGISTER</h3>
        </div>
        <div class="form-register">
          <p>
            Sign up for a free account at our store. Registration is quick and
            easy. It allows you to be able to order from our shop. To start
            shopping click register.
          </p>
          <a href="{{ route('register') }}" class="register">REGISTER</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Login End -->
@endsection