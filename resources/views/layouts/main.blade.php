<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Saye Printer</title>
    <link rel="stylesheet" href="assets/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;1,400&display=swap"
      rel="stylesheet" />
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar-wrapper">
      <div class="navbar-top">
        <div class="content-top">
          <p>Welcome Saye Printer Online Store</p>
          <p data-feather="phone" class="icons"></p>
          <p>Chat Us: 0856-400-90173</p>
        </div>
        <div class="link-top">
          <a href="#" data-feather="user" class="icon-user"></a>
          <a href="#" data-feather="chevron-down" class="icon-user"></a>
          <p>EN</p>
          <div data-feather="menu" class="menu"></div>
        </div>
        <div class="link-user">
          <a href="{{ route('login') }}">Login</a>
        <a href="{{ route('register') }}">Register</a>
          <p>Change language</p>
          <a href="">ID</a>
          <a href="">Eng</a>
        </div>
      </div>
      <div class="navbar-bottom">
        <div class="navbar-logo">
          <a href="index.html">
            <img src="{{ asset('assets/asset/images/logo-saye2.png') }}" alt="logo brooo" />
          </a>
        </div>
        <div class="navbar-link">
          <div class="back">
            <p>Back</p>
            <div data-feather="chevron-right"></div>
          </div>
          <a href="{{ route('home') }}">HOME</a>
          <a href="{{ route('product') }}"> PRODUCT </a>
          <a href="{{ route('galery') }}">GALERY</a>
          <a href="{{ route('store') }}">STORE</a>
          <a href="#" id="enterprener">
            ENTERPRENERURSHIP
            <li data-feather="chevron-down" class="link-icon"></li>
          </a>
        </div>
        <div class="login-enterprener">
          <a href="{{ route('login') }}">login enterprenerurship</a>
        </div>
        <div class="navbar-extra">
          <input type="hidden" id="input-search">
          <a href="#" id="search"><i data-feather="search" class="icon-extra"></i></a>
          <a href="" ><i data-feather="bell" class="icon-extra"></i></a>
          <a href="card.html" ><i data-feather="shopping-cart" class="icon-extra"></i></a>
          <div id="menu">
            <a href="#" data-feather="menu" class="icon-extra"></a>
          </div>
        </div>
      </div>
    </nav>
    <!-- Navbar End -->

    @yield('container')

    <!-- Footer -->
    <footer class="footer-wrapper">
      <div class="footer-logo">
        <img src="{{ asset('assets/asset/images/logo-saye2.png') }}" alt="logo brooo" />
        <p>
          Selamat datang di website resmi Saye Printer, printer nyaman yang akan
          merevolusi cara bekerja Anda!
        </p>
      </div>
      <div class="footer-account">
        <h3>My Account</h3>
        <a href="{{ route('login') }}">Login</a>
        <a href="{{ route('register') }}">Register</a>
      </div>
      <div class="footer-information">
        <h3>store information</h3>
        <p>
          Jl. Kalicari IV A/45 Semarang, Desa/Kelurahan
          Kalicari, Kec. Kalicari, Kota Semarang, Jawa Tengah
        </p>
        <p>Chat Us: 0856-400-90173</p>
        <p>
          Email Us: sayeprint@gmail.com
        </p>
      </div>

      <div class="credit">
        <p>&copy; 2023 Saye Print</p>
      </div>
      <div class="credit-location">
        <h3>CV SAYE PRINT ENTREPRENEUR</h3>
        <p>
          Jl. Kalicari IV A/45 Semarang, Desa/Kelurahan
          Kalicari, Kec. Kalicari, Kota Semarang, Jawa Tengah
        </p>
      </div>
      <div class="credit-transaksi">
        <img
          src="{{ asset('assets/asset/images/transaksi-img/visa.png') }}"
          alt="visa broo" />
        <img
          src="{{ asset('assets/asset/images/transaksi-img/mastercard.png') }}"
          alt="card" />
        <img
          src="{{ asset('assets/asset/images/transaksi-img/logo-jcb.png') }}"
          alt="assets/images/transaksi-img/logo-jcb.png" />
        <img
          src="{{ asset('assets/asset/images/transaksi-img/logo-bca.png') }}"
          alt="assets/images/transaksi-img/logo-bca.png" />

        <img
          src="{{ asset('assets/asset/images/transaksi-img/logo-bni.png') }}"
          alt="assets/images/transaksi-img/logo-bni.png" />

        <img
          src="{{ asset('assets/asset/images/transaksi-img/logo-mandiri.png') }}"
          alt="assets/images/transaksi-img/logo-mandiri.png" />

        <img
          src="{{ asset('assets/asset/images/transaksi-img/logo-bri.png') }}"
          alt="assets/images/transaksi-img/logo-bri.png" />

        <img
          src="{{ asset('assets/asset/images/transaksi-img/logo-permata.png') }}"
          alt="assets/images/transaksi-img/logo-permata.png" />

        <img
          src="{{ asset('assets/asset/images/transaksi-img/logo-ovo.png') }}"
          alt="assets/images/transaksi-img/logo-ovo.png" />

        <img
          src="{{ asset('assets/asset/images/transaksi-img/logo-dana.png') }}"
          alt="assets/images/transaksi-img/logo-dana.png" />

        <img
          src="{{ asset('assets/asset/images/transaksi-img/logo-shopeepay.png') }}"
          alt="assets/images/transaksi-img/logo-shopeepay.png" />

        <img
          src="{{ asset('assets/asset/images/transaksi-img/logo-linkaja.png') }}"
          alt="assets/images/transaksi-img/logo-linkaja.png" />

        <img
          src="{{ asset('assets/asset/images/transaksi-img/logo-qris.png') }}"
          alt="assets/images/transaksi-img/logo-qris.png" />

        <img
          src="{{ asset('assets/asset/images/transaksi-img/logo-alfamart.png') }}"
          alt="assets/images/transaksi-img/logo-alfamart.png" />

        <img
          src="{{ asset('assets/asset/images/transaksi-img/logo-indomaret.png') }}"
          alt="assets/images/transaksi-img/logo-indomaret.png" />
      </div>
    </footer>
    <!-- Footer End-->
  </body>

  <script src="assets/script/script.js"></script>
  <script src="assets/asset/featherIcons/node_modules/feather-icons/dist/feather.js"></script>
  <script>
    feather.replace();
  </script>
</html>
