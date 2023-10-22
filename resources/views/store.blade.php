@extends('layouts.main')

@section('container')
<div class="halaman">
    <p class="title">Store</p>
    <p class="pages">HOME / Store</p>
  </div>

  <!-- store -->
  <div class="store-wrapper">
    <div class="store-img">
      <img src="{{ asset('assets/asset/images/toko.jpg') }}" alt="assets/images/toko.jpg" />
    </div>
    <div class="store">
      <h3>METRO PURI INDAH</h3>
      <p>
        Jl. Puri Agung, Puri Indah, Kembangan Selatan, Jakarta Barat 11610
        Kota Jakarta
      </p>
      <p><span data-feather="phone" class="store-phone"></span>021-5826116</p>
      <a href="https://goo.gl/maps/JP8rzBQfKRwuijtp9">
        <span data-feather="map-pin" class="map-pin"></span>google maps
      </a>
    </div>

    <div class="store-img">
      <img src="{{ asset('assets/asset/images/toko.jpg') }}" alt="assets/images/toko.jpg" />
    </div>
    <div class="store">
      <h3>METRO PURI INDAH</h3>
      <p>
        Jl. Puri Agung, Puri Indah, Kembangan Selatan, Jakarta Barat 11610
        Kota Jakarta
      </p>
      <p><span data-feather="phone" class="store-phone"></span>021-5826116</p>
      <a href="https://goo.gl/maps/JP8rzBQfKRwuijtp9">
        <span data-feather="map-pin" class="map-pin"></span>google maps
      </a>
    </div>
  </div>
  <!-- store End -->
@endsection