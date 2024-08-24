<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?=base_url('assets');?>/img/favicon.png" rel="icon">
  <link href="<?=base_url('assets');?>/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?=base_url('assets');?>/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?=base_url('assets');?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?=base_url('assets');?>/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?=base_url('assets');?>/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?=base_url('assets');?>/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?=base_url('assets');?>/vendor/swiper/swiper-bundle.min.css" rel="stylesheet"> 
  <style>
    .red-text {
  color: #B7091D;
    }
.nav-link.scrollto {
  color: #B7091D;
  transition: color 0.3s ease; 
}
.nav-link.scrollto.active,
.nav-link.scrollto:hover {
  color: black;

}


  </style>
  
  <!-- Template Main CSS File -->
  <link href="<?=base_url('assets');?>/css/style.css" rel="stylesheet">

</head>

<body>


  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo d-flex align-items-center">
      <h1 class="text-light"><a href="index.html"><span class="red-text">Payuh Padang</span></a></h1>
        <img src="<?=base_url('assets');?>/img/logo.png" alt="" class="img-fluid logo-img">
      </div>

      <nav id="navbar" class="navbar">
    <ul id="portfolio-flters">
      <li><a class="nav-link scrollto" href="#hero">Home</a></li>
      <li><a class="nav-link scrollto" href="#about">About Us</a></li>
      <li><a class="nav-link scrollto" href="#portfolio">Menu</a></li>
      <li style="margin-top: 15px; text-align: right; color:#B7091D;">
        <a href="<?= site_url('lupa_password') ?>">Lupa Password</a>
      </li>
      <li>
        <a class="nav-link active" style="color:#B7091D;" aria-current="page" href="<?= site_url('/logout') ?>">Logout</a>
      </li>
      <li style="margin-left: auto;">
      <a class="nav-link" href="keranjang.html">
            <i class="fas fa-shopping-cart"></i> Keranjang <span id="cart-count" class="badge bg-success">0</span>
          </a>
      </li>
    </ul>
  </nav>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url(<?=base_url('assets');?>/img/slide/bck1.jpeg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate_animated animate_fadeInDown">Welcome to <span>Payuh Padang</span></h2>
                <p class="animate_animated animate_fadeInUp">Mari merasakan kelezatan masakan Padang di Rumah Makan kami </p>
                <a href="#about" class="btn-get-started animate_animated animate_fadeInUp scrollto">Get Started</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">
  <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="<?=base_url('assets');?>/img/menurecom.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content">
            <h3>Rekomendasi Menu Andalan Kami</h3>
            <p>Rendang Daging adalah hidangan berbahan dasar daging yang dihasilkan dari proses memasak suhu rendah dalam waktu lama dengan menggunakan aneka rempah-rempah dan santan.
             <strong>Rendang pernah dinobatkan sebagai hidangan yang menduduki peringkat pertama daftar World's 50 Most Delicious Foods (50 Hidangan Terlezat Dunia)</strong> 
              Pada proses pemasakan dapat memakan waktu berjam jam hingga yang tinggal hanyalah potongan daging berwarna hitam pekat dan dedak.
            </p>
            <p>
            Dapatkan pengalaman kuliner yang tak terlupakan dengan menu-menu spesial kami yang disusun dengan cermat oleh koki terampil. 
              Nikmati kelezatan sejati dalam setiap suapan, dihidangkan dengan presentasi yang memesona dan penuh gaya.
            </p>
          </div>
        </div>

  <!-- ======= Our Portfolio Section ======= -->
  <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Daftar Menu</h2>
          <p>Berbagai Menu Yang di Hidangkan.</p>
        </div>

        <div class="container">
  <div class="row">
    <div class="col-lg-12 d-flex justify-content-center">
      <ul id="portfolio-flters" style="margin-bottom: 20px;"> <!-- Tambahkan margin-bottom di sini -->
        <li data-filter="*" class="filter-active">All</li>
        <li data-filter=".filter-app">Makanan</li>
        <li data-filter=".filter-card">Minuman</li>
      </ul>
    </div>
  </div>
</div>


<div class="container">
          <div class="row portfolio-container">
            <!-- Card Rendang -->
            <div class="col-lg-3 col-md-6 portfolio-item filter-app">
              <div class="card mb-4" style="width: 16rem;">
                <img src="<?= base_url('assets'); ?>/img/menu/rendang.png" class="card-img-top" alt="" style="object-fit: cover; height: 200px;">
                <div class="card-body text-center">
                  <h5 class="card-title">Rendang Daging</h5>
                  <p class="card-text">Daging Sapi Premium</p>
                  <span class="badge bg-success">Rp 89.000</span>
                  <button class="btn btn-primary add-to-cart" data-name="Rendang Daging" data-price="89000">Tambah ke Keranjang</button>
                </div>
              </div>
            </div>

    <!-- Card Ikan Asem -->
    <div class="col-lg-3 col-md-6 portfolio-item filter-app">
      <div class="card mb-4" style="width: 16rem;">
        <img src="<?= base_url('assets'); ?>/img/menu/ikanasem.png" class="card-img-top" alt="" style="object-fit: cover; height: 200px;">
        <div class="card-body text-center"> <!-- Tambahkan class text-center di sini -->
          <h5 class="card-title">Ikan Asem Padeh</h5>
          <p class="card-text">Menggunakan Ikan Tongkol</p>
          <span class="badge bg-success">Rp 45.000</span>
          <a href="#" class="btn btn-sm btn-primary mt-2">+ Tambah Ke Keranjang</a>
        </div>
      </div>
    </div>

    <!-- Card Soto -->
    <div class="col-lg-3 col-md-6 portfolio-item filter-app">
      <div class="card mb-4" style="width: 16rem;">
        <img src="<?= base_url('assets'); ?>/img/menu/sotopd.png" class="card-img-top" alt="" style="object-fit: cover; height: 200px;">
        <div class="card-body text-center"> <!-- Tambahkan class text-center di sini -->
          <h5 class="card-title">Soto</h5>
          <p class="card-text">Soto Khas Padang</p>
          <span class="badge bg-success">Rp 25.000</span>
          <a href="#" class="btn btn-sm btn-primary mt-2">+ Tambah Ke Keranjang</a>
        </div>
      </div>
    </div>

    <!-- Card Dendeng -->
    <div class="col-lg-3 col-md-6 portfolio-item filter-app">
      <div class="card mb-4" style="width: 16rem;">
        <img src="<?= base_url('assets'); ?>/img/menu/rendangdendeng.png" class="card-img-top" alt="" style="object-fit: cover; height: 200px;">
        <div class="card-body text-center"> <!-- Tambahkan class text-center di sini -->
          <h5 class="card-title">Dendeng Batakok</h5>
          <p class="card-text">Menggunakan Daging Sapi</p>
          <span class="badge bg-success">Rp 46.000</span>
          <a href="#" class="btn btn-sm btn-primary mt-2">+ Tambah Ke Keranjang</a>
        </div>
      </div>
    </div>

    <!-- Card Lontong Sayur -->
    <div class="col-lg-3 col-md-6 portfolio-item filter-app">
      <div class="card mb-4" style="width: 16rem;">
        <img src="<?= base_url('assets'); ?>/img/menu/lodeh.png" class="card-img-top" alt="" style="object-fit: cover; height: 200px;">
        <div class="card-body text-center"> <!-- Tambahkan class text-center di sini -->
          <h5 class="card-title">Lontong Sayur</h5>
          <p class="card-text">Kuah Santan Khas Padang</p>
          <span class="badge bg-success">Rp 25.000</span>
          <a href="#" class="btn btn-sm btn-primary mt-2">+ Tambah Ke Keranjang</a>
        </div>
      </div>
    </div>

    <!-- Card Ayam Pop -->
    <div class="col-lg-3 col-md-6 portfolio-item filter-app">
      <div class="card mb-4" style="width: 16rem;">
        <img src="<?= base_url('assets'); ?>/img/menu/ayampop.png" class="card-img-top" alt="" style="object-fit: cover; height: 200px;">
        <div class="card-body text-center"> <!-- Tambahkan class text-center di sini -->
          <h5 class="card-title">Ayam Pop</h5>
          <p class="card-text">Ayam Goreng Khas Padang</p>
          <span class="badge bg-success">Rp 36.000</span>
          <a href="#" class="btn btn-sm btn-primary mt-2">+ Tambah Ke Keranjang</a>
        </div>
      </div>
    </div>

    <!-- Card Kalio -->
    <div class="col-lg-3 col-md-6 portfolio-item filter-app">
      <div class="card mb-4" style="width: 16rem;">
        <img src="<?= base_url('assets'); ?>/img/menu/ayamrica.png" class="card-img-top" alt="" style="object-fit: cover; height: 200px;">
        <div class="card-body text-center"> <!-- Tambahkan class text-center di sini -->
          <h5 class="card-title">Rica - Rica Ayam</h5>
          <p class="card-text">Daging Ayam yang Pedas</p>
          <span class="badge bg-success">Rp 26.000</span>
          <a href="#" class="btn btn-sm btn-primary mt-2">+ Tambah Ke Keranjang</a>
        </div>
      </div>
    </div>
    <div class="container">
  <div class="row">
    <!-- Card Gulai -->
    <div class="col-lg-3 col-md-6 portfolio-item filter-app">
      <div class="card mb-4" style="width: 16rem;">
        <img src="<?= base_url('assets'); ?>/img/menu/gulai.png" class="card-img-top" alt="" style="object-fit: cover; height: 200px;">
        <div class="card-body text-center"> <!-- Tambahkan class text-center di sini -->
          <h5 class="card-title">Gulai</h5>
          <p class="card-text">Daging dengan Kaya Rempah</p>
          <span class="badge bg-success">Rp 40.000</span>
          <a href="#" class="btn btn-sm btn-primary mt-2">+ Tambah Ke Keranjang</a>
        </div>
      </div>
    </div>

    <!-- Card Es Tebak -->
    <div class="col-lg-3 col-md-6 portfolio-item filter-app filter-card"> <!-- Tambahkan class "filter-app" dan "filter-card" di sini -->
      <div class="card mb-4" style="width: 16rem;">
        <img src="<?= base_url('assets'); ?>/img/menu/estebak.png" class="card-img-top" alt="" style="object-fit: cover; height: 200px;">
        <div class="card-body text-center"> <!-- Tambahkan class text-center di sini -->
          <h5 class="card-title">Es Tebak</h5>
          <p class="card-text">Potongan buah dan tebak.</p>
          <span class="badge bg-success">Rp 20.000</span>
          <a href="#" class="btn btn-sm btn-primary mt-2">+ Tambah Ke Keranjang</a>
        </div>
      </div>
    </div>
    <!-- Card Es Tebak -->
    <div class="col-lg-3 col-md-6 portfolio-item filter-app filter-card"> <!-- Tambahkan class "filter-app" dan "filter-card" di sini -->
      <div class="card mb-4" style="width: 16rem;">
        <img src="<?= base_url('assets'); ?>/img/menu/esteh.png" class="card-img-top" alt="" style="object-fit: cover; height: 200px;">
        <div class="card-body text-center"> <!-- Tambahkan class text-center di sini -->
          <h5 class="card-title">Es Teh</h5>
          <p class="card-text">Menggunakan Daun Teh Asli</p>
          <span class="badge bg-success">Rp 10.000</span>
          <a href="#" class="btn btn-sm btn-primary mt-2">+ Tambah Ke Keranjang</a>
        </div>
      </div>
    </div>
    <!-- Card Es Tebak -->
    <div class="col-lg-3 col-md-6 portfolio-item filter-app filter-card"> <!-- Tambahkan class "filter-app" dan "filter-card" di sini -->
      <div class="card mb-4" style="width: 16rem;">
        <img src="<?= base_url('assets'); ?>/img/menu/esjeruk.png" class="card-img-top" alt="" style="object-fit: cover; height: 200px;">
        <div class="card-body text-center"> <!-- Tambahkan class text-center di sini -->
          <h5 class="card-title">Es Jeruk</h5>
          <p class="card-text">Perasan Jeruk Asli</p>
          <span class="badge bg-success">Rp 20.000</span>
          <a href="#" class="btn btn-sm btn-primary mt-2">+ Tambah Ke Keranjang</a>
        </div>
      </div>
    </div><!-- Card Es Tebak -->
    <div class="col-lg-3 col-md-6 portfolio-item filter-app filter-card"> <!-- Tambahkan class "filter-app" dan "filter-card" di sini -->
      <div class="card mb-4" style="width: 16rem;">
        <img src="<?= base_url('assets'); ?>/img/menu/tehtalua.png" class="card-img-top" alt="" style="object-fit: cover; height: 200px;">
        <div class="card-body text-center"> <!-- Tambahkan class text-center di sini -->
          <h5 class="card-title">Teh Talua</h5>
          <p class="card-text">Teh Dengan Campuran Telur</p>
          <span class="badge bg-success">Rp 13.000</span>
          <a href="#" class="btn btn-sm btn-primary mt-2">+ Tambah Ke Keranjang</a>
        </div>
      </div>
    </div><!-- Card Es Tebak -->
    <div class="col-lg-3 col-md-6 portfolio-item filter-app filter-card"> <!-- Tambahkan class "filter-app" dan "filter-card" di sini -->
      <div class="card mb-4" style="width: 16rem;">
        <img src="<?= base_url('assets'); ?>/img/menu/essekoteng.png" class="card-img-top" alt="" style="object-fit: cover; height: 200px;">
        <div class="card-body text-center"> <!-- Tambahkan class text-center di sini -->
          <h5 class="card-title">Sekoteng</h5>
          <p class="card-text">Air Jahe Yang Panas</p>
          <span class="badge bg-success">Rp 20.000</span>
          <a href="#" class="btn btn-sm btn-primary mt-2">+ Tambah Ke Keranjang</a>
        </div>
      </div>
    </div><!-- Card Es Tebak -->
    <div class="col-lg-3 col-md-6 portfolio-item filter-app filter-card"> <!-- Tambahkan class "filter-app" dan "filter-card" di sini -->
      <div class="card mb-4" style="width: 16rem;">
        <img src="<?= base_url('assets'); ?>/img/menu/esdurian.png" class="card-img-top" alt="" style="object-fit: cover; height: 200px;">
        <div class="card-body text-center"> <!-- Tambahkan class text-center di sini -->
          <h5 class="card-title">Es Durian</h5>
          <p class="card-text">Durian Yang di Hancurkan</p>
          <span class="badge bg-success">Rp 25.000</span>
          <a href="#" class="btn btn-sm btn-primary mt-2">+ Tambah Ke Keranjang</a>
        </div>
      </div>
      </div><!-- Card Es Tebak -->
    <div class="col-lg-3 col-md-6 portfolio-item filter-app filter-card"> <!-- Tambahkan class "filter-app" dan "filter-card" di sini -->
      <div class="card mb-4" style="width: 16rem;">
        <img src="<?= base_url('assets'); ?>/img/menu/airmineral.png" class="card-img-top" alt="" style="object-fit: cover; height: 200px;">
        <div class="card-body text-center"> <!-- Tambahkan class text-center di sini -->
          <h5 class="card-title">Air Mineral</h5>
          <p class="card-text">Air Minueral</p>
          <span class="badge bg-success">Rp 5.000</span>
          <a href="#" class="btn btn-sm btn-primary mt-2">+ Tambah Ke Keranjang</a>
        </div>
      </div>
    </div>
  </div> <!-- Tutup row untuk kedua card -->
</div> <!-- Tutup container -->
      </section>

      <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="<?=base_url('assets');?>/img/logo.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content">
          <h3>Tentang Kami</h3>
          <p>Dapatkan pengalaman kuliner yang tak terlupakan dengan menu-menu spesial kami yang disusun dengan cermat oleh koki terampil. Nikmati kelezatan sejati dalam setiap suapan, dihidangkan dengan presentasi yang memesona dan penuh gaya.</p>
  <div class="container-fluid">
    <div class="row">
      <!-- Card Alamat -->
      <div class="col-lg-3 col-md-6 info d-flex flex-column align-items-stretch">
        <h4>Alamat</h4>
        <p>Malang<br>Jalan Jakarta No.02</p>
      </div>

      <!-- Card Nomor Telepon -->
      <div class="col-lg-3 col-md-6 info d-flex flex-column align-items-stretch">
        <h4>Kontak</h4>
        <p>085236582426</p>
      </div>

      <!-- Card Jam Kerja -->
      <div class="col-lg-3 col-md-6 info d-flex flex-column align-items-stretch">
        <h4>Open Restaurant</h4>
        <p>Weekdays: 09.00-20.00<br>Weekand: 09.00-16.00</p>
      </div>
    </div>
  </div>
</section>


  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?=base_url('assets');?>/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="<?=base_url('assets');?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?=base_url('assets');?>/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?=base_url('assets');?>/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?=base_url('assets');?>/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?=base_url('assets');?>/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="<?=base_url('assets');?>/vendor/php-email-form/validate.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const addToCartButtons = document.querySelectorAll('.add-to-cart');
      const cartCountElement = document.getElementById('cart-count');

      function getCartItems() {
        const cart = localStorage.getItem('cart');
        return cart ? JSON.parse(cart) : [];
      }

      function setCartItems(items) {
        localStorage.setItem('cart', JSON.stringify(items));
      }

      function updateCartCount() {
        const cartItems = getCartItems();
        cartCountElement.textContent = cartItems.length;
      }

      addToCartButtons.forEach(button => {
        button.addEventListener('click', function() {
          const name = this.getAttribute('data-name');
          const price = this.getAttribute('data-price');

          const cartItems = getCartItems();
          cartItems.push({ name, price });
          setCartItems(cartItems);
          updateCartCount();

          // Redirect to cart page
          window.location.href = 'keranjang.html';
        });
      });

      // Initial update of cart count on page load
      updateCartCount();
    });
  </script>
  

  <!-- Template Main JS File -->
  <script src="<?=base_url('assets');?>/js/main.js"></script>

</body>

</html>