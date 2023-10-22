@extends('layouts.main')

@section('container')
<!-- Halaman -->
<div class="halaman">
    <p class="title">Create User</p>
    <p class="pages">HOME / Register</p>
  </div>
  <!-- Halaman End-->

  <!-- Registered -->
  <div class="registered-wrapper">
    <div class="cards">
      <div class="registered-card">
        <div class="registered-title">
          <h3>Create User</h3>
        </div>
        <div class="form-registered">
          <form id="registered" action="">
            <div class="inputan">
              <label for="">First Name:</label>
              <input type="text" placeholder="First Name" />
            </div>

            <div class="inputan">
              <label for="">Last Name:</label>
              <input type="text" placeholder="Last Name" />
            </div>

            <div class="inputan">
              <label for="">Username</label>
              <input type="text" placeholder="Username" />
            </div>

            <div class="inputan">
              <label for="">Phone</label>
              <input type="number" placeholder="Phone" />
            </div>

            <div class="inputan">
              <label for="">Birth Date</label>
              <input type="text" placeholder="Birth Date" />
            </div>

            <div class="inputan">
              <label for="">Email</label>
              <input type="email" placeholder="Email" />
            </div>
            <div class="inputan">
              <label for="">Password:</label>
              <div class="password-container">
                <input
                  type="password"
                  placeholder="Enter your password"
                  id="password1" />
                <button id="toogle-password1" type="button">
                  <img
                    src="{{ asset('assets/asset/images/eye.png') }}"
                    alt="##"
                    width="25px"
                    class="eye1" />
                  <img
                    src="{{ asset('assets/asset/images/eye-off.png') }}"
                    alt="###"
                    width="25px"
                    class="eye-off1"
                    style="display: none" />
                </button>
              </div>
            </div>

            <div class="inputan">
              <label for="">Confirm Password:</label>
              <div class="password-container">
                <input
                  type="password"
                  placeholder="Enter your password"
                  id="password2" />
                <button id="toogle-password2" type="button">
                  <img
                    src="{{ asset('assets/asset/images/eye.png') }}"
                    alt="##"
                    width="25px"
                    class="eye2" />
                  <img
                    src="{{ asset('assets/asset/images/eye-off.png') }}"
                    alt="###"
                    width="25px"
                    class="eye-off2"
                    style="display: none" />
                </button>
              </div>
            </div>

            <button class="btn-registered">Create User</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Registered End -->
@endsection