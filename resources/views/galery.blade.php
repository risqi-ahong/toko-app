@extends('layouts.main')

@section('container')
<div class="halaman">
    <p class="title">GALLERY</p>
    <p class="pages">HOME / Login</p>
  </div>

     <!-- Galery -->
     <div class="galery-wrapper">
        <div class="galery-filter">
          <button class="active">All</button>
          <button>Shoes</button>
          <button>Bags</button>
          <button>Luggage</button>
          <button>Belt</button>
          <button>Wallet</button>
        </div>
        <div class="galery">
          <div class="thumb">
            <img
              src="{{ asset('assets/asset/image-toko/canon.png') }}"
              alt="assets/images/bags/epson.png" />
          </div>
          <div class="thumb">
            <img
              src="{{ asset('assets/asset/image-toko/canon.png') }}"
              alt="assets/images/bags/bags1.jpg" />
          </div>
          <div class="thumb">
            <img
              src="{{ asset('assets/asset/image-toko/epson.png') }}"
              alt="assets/images/bags/bags1.jpg" />
          </div>
          <div class="thumb">
            <img
              src="{{ asset('assets/asset/image-toko/epson.png') }}"
              alt="assets/images/bags/bags1.jpg" />
          </div>
        </div>
      </div>
      <!-- Galery End -->
@endsection