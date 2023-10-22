@extends('layouts.main')

@section('container')
  <!-- Hero Section End -->
<section id="hero-wrapper" class="hero-wrapper">
    <main class="hero">
      <img src="{{ asset('assets/asset/image-toko/hero.jpeg') }}" alt="" />
    </main>
  </section>
  <!-- Hero Section End -->
  <!-- banner -->
  <div class="banner-wrapper">
    <a href="">
        <img
        src="{{ asset('assets/asset/image-toko/epson.png') }}"
        alt="epson" />
    </a>
    <a href="">
      <img
        src="{{ asset('assets/asset/image-toko/canon.png') }}"
        alt="canon" />
    </a>
  </div>
  <!-- banner End -->

    <!-- best selling -->
    <div class="best-wrapper">
        <div class="best-title">
          <h4>Check These Out</h4>
          <h2>BEST-SELLING COLLECTION</h2>
          <p>
            Our customers keep coming back for these classic comfortable models
          </p>
        </div>
        <div class="best-product">
          <div class="card-best">
            <img src="{{ asset('assets/asset/image-toko/epson.png') }}" alt="assets/images/best1.jpg" />
            <div class="card-best-body">
              <li data-feather="star" class="star"></li>
              <li data-feather="star" class="star"></li>
              <li data-feather="star" class="star"></li>
              <h5>D. EMILY 24NAVY OPACO</h5>
              <h3>Rp. 3.390.000</h3>
              <div class="color"></div>
            </div>
          </div>
          <div class="card-best">
            <img src="{{ asset('assets/asset/image-toko/epson.png') }}" alt="assets/images/best1.jpg" />
            <div class="card-best-body">
              <li data-feather="star" class="star"></li>
              <li data-feather="star" class="star"></li>
              <h5>D. EMILY 24NAVY OPACO</h5>
              <h3>Rp. 3.390.000</h3>
              <div class="color"></div>
            </div>
          </div>
          <div class="card-best">
            <img src="{{ asset('assets/asset/image-toko/epson.png') }}" alt="assets/images/best1.jpg" />
            <div class="card-best-body">
              <li data-feather="star" class="star"></li>
              <li data-feather="star" class="star"></li>
              <li data-feather="star" class="star"></li>
              <li data-feather="star" class="star"></li>
              <li data-feather="star" class="star"></li>
              <h5>D. EMILY 24NAVY OPACO</h5>
              <h3>Rp. 3.390.000</h3>
              <div class="color"></div>
            </div>
          </div>
          <div class="card-best">
            <img src="{{ asset('assets/asset/image-toko/epson.png') }}" alt="assets/images/best1.jpg" />
            <div class="card-best-body">
              <li data-feather="star" class="star"></li>
              <h5>D. EMILY 24NAVY OPACO</h5>
              <h3>Rp. 3.390.000</h3>
              <div class="color"></div>
            </div>
          </div>
        </div>
      </div>
      <!-- best selling End -->

      <!-- Special Product -->
    <div class="special-wrapper">
      <div class="special-title">
        <h4>Exclusive Products</h4>
        <h2>SPECIAL PRODUCTS</h2>
        <div class="link">
          <a href="" class="active">NEW PRODUCTS</a>
          <a href="">FEATURED PRODUCTS</a>
          <a href="">BEST SELLERS</a>
        </div>
      </div>
      <div class="special-product">
        <div class="card-special">
          <img src="{{ asset('assets/asset/image-toko/epson.png') }}" alt="assets/images/best1.jpg" />
          <div class="card-special-body">
            <li data-feather="star" class="star"></li>
            <li data-feather="star" class="star"></li>
            <li data-feather="star" class="star"></li>
            <h5>D. EMILY 24NAVY OPACO</h5>
            <h3>Rp. 3.390.000</h3>
            <div class="color"></div>
          </div>
        </div>
        <div class="card-special">
          <img src="{{ asset('assets/asset/image-toko/epson.png') }}" alt="assets/images/best1.jpg" />
          <div class="card-special-body">
            <li data-feather="star" class="star"></li>
            <li data-feather="star" class="star"></li>
            <li data-feather="star" class="star"></li>
            <h5>D. EMILY 24NAVY OPACO</h5>
            <h3>Rp. 3.390.000</h3>
            <div class="color"></div>
          </div>
        </div>
        <div class="card-special">
          <img src="{{ asset('assets/asset/image-toko/epson.png') }}" alt="assets/images/best1.jpg" />
          <div class="card-special-body">
            <li data-feather="star" class="star"></li>
            <li data-feather="star" class="star"></li>
            <li data-feather="star" class="star"></li>
            <h5>D. EMILY 24NAVY OPACO</h5>
            <h3>Rp. 3.390.000</h3>
            <div class="color"></div>
          </div>
        </div>
        <div class="card-special">
          <img src="{{ asset('assets/asset/image-toko/epson.png') }}" alt="assets/images/best1.jpg" />
          <div class="card-special-body">
            <li data-feather="star" class="star"></li>
            <li data-feather="star" class="star"></li>
            <li data-feather="star" class="star"></li>
            <h5>D. EMILY 24NAVY OPACO</h5>
            <h3>Rp. 3.390.000</h3>
            <div class="color"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- Special Product End-->


@endsection