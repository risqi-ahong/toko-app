@extends('layouts.main')

@section('container')
<div class="halaman">
    <p class="title">Product</p>
    <p class="pages">HOME / Product</p>
  </div>

  <!-- Product -->
  <div class="product-wrapper">
    <div class="product-side">
      <input type="text" />
      <button>Search</button>
      <div class="side-title">
        <h3>category</h3>
        <li data-feather="chevron-down"></li>
      </div>
      <div class="filter">
        <ol>
          <li>
            <input type="checkbox" />
            <label for="">Women's Shoes</label>
          </li>
        </ol>
        <ul>
          <li>
            <input type="checkbox" />
            <label for="">Heels</label>
          </li>
          <li>
            <input type="checkbox" />
            <label for="">Heels</label>
          </li>
          <li>
            <input type="checkbox" />
            <label for="">Heels</label>
          </li>
          <li>
            <input type="checkbox" />
            <label for="">Heels</label>
          </li>
        </ul>
      </div>
      <div class="side-title">
        <h3>size</h3>
        <li data-feather="chevron-down"></li>
      </div>
      <div class="filter">
        <ol>
          <li>
            <input type="checkbox" />
            <label for="">Women's Shoes</label>
          </li>
        </ol>
        <ul>
          <li>
            <input type="checkbox" />
            <label for="">Heels</label>
          </li>
          <li>
            <input type="checkbox" />
            <label for="">Heels</label>
          </li>
          <li>
            <input type="checkbox" />
            <label for="">Heels</label>
          </li>
          <li>
            <input type="checkbox" />
            <label for="">Heels</label>
          </li>
        </ul>
      </div>

      <div class="side-title">
        <h3>price</h3>
        <li data-feather="chevron-down"></li>
      </div>
    </div>
    <div class="product">
      <div class="card-product-wrapper">
        <div class="card-product">
          <img src="{{ asset('assets/asset/image-toko/epson.png') }}" alt="assets/images/best1.jpg" />
          <div class="card-product-body">
            <li data-feather="star" class="star"></li>
            <li data-feather="star" class="star"></li>
            <li data-feather="star" class="star"></li>
            <h5>D. EMILY 24NAVY OPACO</h5>
            <h3>Rp. 3.390.000</h3>
            <div class="color"></div>
            <button class="btn-detail-product" id="btn-detail-product">
              Detail
            </button>
          </div>
        </div>
        <div class="card-product">
          <img src="{{ asset('assets/asset/image-toko/epson.png') }}" alt="assets/images/best1.jpg" />
          <div class="card-product-body">
            <li data-feather="star" class="star"></li>
            <li data-feather="star" class="star"></li>
            <li data-feather="star" class="star"></li>
            <h5>D. EMILY 24NAVY OPACO</h5>
            <h3>Rp. 3.390.000</h3>
            <div class="color"></div>
            <button class="btn-detail-product" id="btn-detail-product">
              Detail
            </button>
          </div>
        </div>
        <div class="card-product">
          <img src="{{ asset('assets/asset/image-toko/epson.png') }}" alt="assets/images/best1.jpg" />
          <div class="card-product-body">
            <li data-feather="star" class="star"></li>
            <li data-feather="star" class="star"></li>
            <li data-feather="star" class="star"></li>
            <h5>D. EMILY 24NAVY OPACO</h5>
            <h3>Rp. 3.390.000</h3>
            <div class="color"></div>
            <button class="btn-detail-product" id="btn-detail-product">
              Detail
            </button>
          </div>
        </div>
        <div class="card-product">
          <img src="{{ asset('assets/asset/image-toko/epson.png') }}" alt="assets/images/best1.jpg" />
          <div class="card-product-body">
            <li data-feather="star" class="star"></li>
            <li data-feather="star" class="star"></li>
            <li data-feather="star" class="star"></li>
            <h5>D. EMILY 24NAVY OPACO</h5>
            <h3>Rp. 3.390.000</h3>
            <div class="color"></div>
            <button class="btn-detail-product" id="btn-detail-product">
              Detail
            </button>
          </div>
        </div>
        <div class="card-product">
          <img src="{{ asset('assets/asset/image-toko/epson.png') }}" alt="assets/images/best1.jpg" />
          <div class="card-product-body">
            <li data-feather="star" class="star"></li>
            <li data-feather="star" class="star"></li>
            <li data-feather="star" class="star"></li>
            <h5>D. EMILY 24NAVY OPACO</h5>
            <h3>Rp. 3.390.000</h3>
            <div class="color"></div>
            <button class="btn-detail-product" id="btn-detail-product">
              Detail
            </button>
          </div>
        </div>
        <div class="card-product">
          <img src="{{ asset('assets/asset/image-toko/epson.png') }}" alt="assets/images/best1.jpg" />
          <div class="card-product-body">
            <li data-feather="star" class="star"></li>
            <li data-feather="star" class="star"></li>
            <li data-feather="star" class="star"></li>
            <h5>D. EMILY 24NAVY OPACO</h5>
            <h3>Rp. 3.390.000</h3>
            <div class="color"></div>
            <button class="btn-detail-product" id="btn-detail-product">
              Detail
            </button>
          </div>
        </div>
        <div class="card-product">
          <img src="{{ asset('assets/asset/image-toko/epson.png') }}" alt="assets/images/best1.jpg" />
          <div class="card-product-body">
            <li data-feather="star" class="star"></li>
            <li data-feather="star" class="star"></li>
            <li data-feather="star" class="star"></li>
            <h5>D. EMILY 24NAVY OPACO</h5>
            <h3>Rp. 3.390.000</h3>
            <div class="color"></div>
            <button class="btn-detail-product" id="btn-detail-product">
              Detail
            </button>
          </div>
        </div>
        <div class="card-product">
          <img src="{{ asset('assets/asset/image-toko/epson.png') }}" alt="assets/images/best1.jpg" />
          <div class="card-product-body">
            <li data-feather="star" class="star"></li>
            <li data-feather="star" class="star"></li>
            <li data-feather="star" class="star"></li>
            <h5>D. EMILY 24NAVY OPACO</h5>
            <h3>Rp. 3.390.000</h3>
            <div class="color"></div>
            <button class="btn-detail-product" id="btn-detail-product">
              Detail
            </button>
          </div>
        </div>
        <div class="card-product">
          <img src="{{ asset('assets/asset/image-toko/epson.png') }}" alt="assets/images/best1.jpg" />
          <div class="card-product-body">
            <li data-feather="star" class="star"></li>
            <li data-feather="star" class="star"></li>
            <li data-feather="star" class="star"></li>
            <h5>D. EMILY 24NAVY OPACO</h5>
            <h3>Rp. 3.390.000</h3>
            <div class="color"></div>
            <button class="btn-detail-product" id="btn-detail-product">
              Detail
            </button>
          </div>
        </div>
        <div class="card-product">
          <img src="{{ asset('assets/asset/image-toko/epson.png') }}" alt="assets/images/best1.jpg" />
          <div class="card-product-body">
            <li data-feather="star" class="star"></li>
            <li data-feather="star" class="star"></li>
            <li data-feather="star" class="star"></li>
            <h5>D. EMILY 24NAVY OPACO</h5>
            <h3>Rp. 3.390.000</h3>
            <div class="color"></div>
            <button class="btn-detail-product" id="btn-detail-product">
              Detail
            </button>
          </div>
        </div>
        <div class="card-product">
          <img src="{{ asset('assets/asset/image-toko/epson.png') }}" alt="assets/images/best1.jpg" />
          <div class="card-product-body">
            <li data-feather="star" class="star"></li>
            <li data-feather="star" class="star"></li>
            <li data-feather="star" class="star"></li>
            <h5>D. EMILY 24NAVY OPACO</h5>
            <h3>Rp. 3.390.000</h3>
            <div class="color"></div>
            <button class="btn-detail-product" id="btn-detail-product">
              Detail
            </button>
          </div>
        </div>
        <div class="card-product">
          <img src="{{ asset('assets/asset/image-toko/epson.png') }}" alt="assets/images/best1.jpg" />
          <div class="card-product-body">
            <li data-feather="star" class="star"></li>
            <li data-feather="star" class="star"></li>
            <li data-feather="star" class="star"></li>
            <h5>D. EMILY 24NAVY OPACO</h5>
            <h3>Rp. 3.390.000</h3>
            <div class="color"></div>
            <button class="btn-detail-product" id="btn-detail-product">
              Detail
            </button>
          </div>
        </div>
      </div>
      <div class="pagination">
        <button id="btn-prev">
          <i data-feather="chevron-left" class="btn-left"></i>
        </button>
        <div class="halaman">
          <ul>
            <li class="active">1</li>
            <li>2</li>
          </ul>
        </div>
        <button id="btn-next"><i data-feather="chevron-right"></i></button>
        <button id="btn-last" class="btn-last">Last</button>
        <p>Total Product 400</p>
      </div>
    </div>
  </div>
  <!-- Product End -->

@endsection