
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

  <!-- Template Main CSS File -->
  <link href="<?=base_url('assets');?>/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url(<?=base_url('assets');?>/img/slide/bck1.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Recycle Earth</span></h2>
                <p class="animate__animated animate__fadeInUp">Ubah Limbah Menjadi Berkah </p>
                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Get Started</a>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url(<?=base_url('assets');?>/img/slide/bck2.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Recycle Academy</h2>
                <p class="animate__animated animate__fadeInUp">Sebuah fitur yang menyediakan layanan untuk memberikan edukasi pembelajaran dan tata cara mendaur ulang sampah yang baik.</p>
                <a href="#recycleacademy" class="btn-get-started animate__animated animate__fadeInUp scrollto">Get Started</a>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url(<?=base_url('assets');?>/img/slide/bck3.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Marketplace</h2>
                <p class="animate__animated animate__fadeInUp">Fitur utama dalam Reccycle Earth yang berisi berbagai produk hasil daur ulang limbah yang bisa digunakan kembali.</p>
                <a href="#marketplace" class="btn-get-started animate__animated animate__fadeInUp scrollto">Get Started</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-double-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-double-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1 class="text-light"><a href="index.html"><span>Recycle Earth</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="<?=base_url('assets');?>/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About Us</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#portfolio">Product</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="nav-link scrollto" href="index.php/login">Login</a></li>
          <a href="<?= site_url('pengumuman') ?>">keranjang <span id="cart-count" class="badge bg-success">0</span></a></p>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About Us</h2>
          <p>Kami adalah platform yang berkomitmen untuk memperjuangkan gerakan daur ulang sebagai solusi berkelanjutan bagi lingkungan dan masa depan bumi kita. Dengan fokus pada inovasi, edukasi, dan aksi nyata, kami bertekad untuk mengubah limbah menjadi peluang, menginspirasi masyarakat untuk bertindak, dan menciptakan planet yang lebih hijau dan berkelanjutan untuk generasi mendatang.</p>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <img src="<?=base_url('assets');?>/img/recycle.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content">
            <h3>Ubah Limbah Menjadi<strong> Berkah</strong></h3>
            <p>Melalui platform kami, kami mengundang Anda untuk menjelajahi dunia daur ulang yang penuh dengan peluang dan inspirasi. 
               Kami menyediakan informasi terkini, sumber daya praktis, dan komunitas yang mendukung untuk membantu Anda mengadopsi gaya hidup berkelanjutan dan berkontribusi pada perlindungan lingkungan.
            </p>
            <p>
            Bersama-sama, mari kita bergerak menuju masa depan yang lebih hijau, di mana limbah bukan lagi menjadi beban, tetapi menjadi aset yang bernilai dan memberikan berkah bagi generasi sekarang dan yang akan datang. 
            Terima kasih telah bergabung dengan kami dalam perjalanan ini untuk menjadikan bumi kita lebih baik dan lebih berkelanjutan!
            </p>
          </div>
        </div>
    <!-- ======= Our Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Our Services</h2>
          <p>Kami menyediakan layanan daur ulang yang mengubah limbah menjadi produk berkualitas tinggi, mengutamakan keberlanjutan lingkungan dan inovasi berkelanjutan. Produk-produk kami tidak hanya ramah lingkungan, tetapi juga memberikan solusi berkualitas untuk kebutuhan Anda.</p>
        </div>

        <div class="row">
        <div class="row justify-content-center">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">Recyle Academy</a></h4>
              <p class="description">Berisi berbagai informasi akademik mengenai sampah maupun cara mendaur ulang sampah</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Marketplace</a></h4>
              <p class="description">Berisi berbagai produk hasil daur ulang yang siap digunakan kembali</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Our Services Section -->

    <!-- ======= Cta Section ======= -->
    <section class="cta">
      <div class="container" style ="background-image:url(public/assets/img/gmbr.jpg)">

        <div class="text-center">
          <h3>MarketPlace</h3>
          <p> Mari gunakan produk hasil daur ulang untuk mengurangi limbah sampah!!</p>
          <a class="cta-btn" href="#marketplace">Belanja</a>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= More Services Section ======= -->
    <section class="more-services section-bg">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="card">
              <img src="<?=base_url('assets');?>/img/organik.webp" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><a href="">Sampah Organik</a></h5>
                <p class="card-text">Jenis limbah yang berasal dari bahan-bahan yang dapat terurai secara alami oleh mikroorganisme.</p>
                <a href="/berita#organik" class="btn">Explore more</a>
              </div> 
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="card">
              <img src="<?=base_url('assets');?>/img/anorganik.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><a href="">Sampah AnOrganik</a></h5>
                <p class="card-text">Jenis limbah ini terdiri dari bahan-bahan yang tidak dapat terurai secara alami atau membutuhkan waktu yang sangat lama untuk terurai.</p>
                <a href="/berita#anorganik" class="btn">Explore more</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="card">
              <img src="<?=base_url('assets');?>/img/b3.jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><a href="">Sampah B3</a></h5>
                <p class="card-text">Singkatan dari Bahan Berbahaya dan Beracun (B3),sampah ini mengandung zat-zat yang berpotensi berbahaya bagi kesehatan manusia dan lingkungan.</p>
                <a href="/berita#b3" class="btn">Explore more</a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End More Services Section -->

    <!-- ======= Info Box Section ======= -->
    <section class="info-box py-0">
      <div class="container-fluid">
        <div id="recycleacademy">
        <div class="row">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content">
              <h3>Terkait <strong>Sampah dan Lingkungan</strong></h3>
            </div>

            <div class="accordion-list">
              <ul>
                <li>
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> Kapan hari lingkungan hidup sedunia?  <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                    <p>
                      Hari Lingkungan Hidup Sedunia di peringati setiap tanggal 5 Juni, sebagai upaya meningkatkan kesadaran dan penyelamatan lingkungan.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> Bagaimana dampak lingkungan akibat penumpukan sampah yang tidak terpisah di TPA?? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Dampak yang paling singnifikan yaitu mencemari air sungai, pembuangan limbah atau sampah juga dapat menghambat proses air tanah.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> Berapa jumlah sampah yang dihasilkan oleh warga Indonesia setiap harinya? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                    Kementerian Lingkungan Hidup dan Kehutanan (KLHK) menyampaikan bahwa produksi sampah nasional mencapai 175.000 ton per hari. Rata-rata satu orang penduduk Indonesia menyumbang sampah sebanyak 0.7kg per hari. Jika dikalkulasi dalam skala tahunan, Indonesia menghasilkan sampah sebanyak 64juta ton.
                    </p>
                  </div>
                </li>

              </ul>
            </div>

          </div>

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style="background-image: url(<?=base_url('assets');?>/img/info-box.jpg);">&nbsp;</div>
        </div>

      </div>
    </section><!-- End Info Box Section -->

    <!-- ======= Our Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Our Product</h2>
          <p>Berbagai produk kami yang best seller pada tahun ini.</p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Plastik</li>
              <li data-filter=".filter-card">Botol</li>
              <li data-filter=".filter-web">Kaca</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="<?=base_url('assets');?>/img/portfolio/plstik.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Plastik 1</h4>
                <p>Plastik</p>
              </div>
              <div class="portfolio-links">
                <a href="<?=base_url('assets');?>/img/portfolio/plstik.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Plastik 1"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="<?=base_url('assets');?>/img/portfolio/kaca1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Kaca 1</h4>
                <p>Kaca</p>
              </div>
              <div class="portfolio-links">
                <a href="<?=base_url('assets');?>/img/portfolio/kaca1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Kaca 1"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="<?=base_url('assets');?>/img/portfolio/plstik1.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Plastik 2</h4>
                <p>Plastik</p>
              </div>
              <div class="portfolio-links">
                <a href="<?=base_url('assets');?>/img/portfolio/plstik1.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Plastik 2"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="<?=base_url('assets');?>/img/portfolio/btl3.webp" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Botol 2</h4>
                <p>Botol</p>
              </div>
              <div class="portfolio-links">
                <a href="<?=base_url('assets');?>/img/portfolio/btl3.webp" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Botol 2"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="<?=base_url('assets');?>/img/portfolio/kaca2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Kaca 2</h4>
                <p>Kaca</p>
              </div>
              <div class="portfolio-links">
                <a href="<?=base_url('assets');?>/img/portfolio/kaca2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Kaca 2"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="<?=base_url('assets');?>/img/portfolio/pltik2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Plastik 3</h4>
                <p>Plastik</p>
              </div>
              <div class="portfolio-links">
                <a href="<?=base_url('assets');?>/img/portfolio/pltik2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Plastik 3"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="<?=base_url('assets');?>/img/portfolio/btl1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Botol 1</h4>
                <p>Botol</p>
              </div>
              <div class="portfolio-links">
                <a href="<?=base_url('assets');?>/img/portfolio/btl1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Botol 1"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="<?=base_url('assets');?>/img/portfolio/btl2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Botol 3</h4>
                <p>Botol</p>
              </div>
              <div class="portfolio-links">
                <a href="<?=base_url('assets');?>/img/portfolio/btl2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Botol 3"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="<?=base_url('assets');?>/img/portfolio/kaca3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Kaca 3</h4>
                <p>Kaca</p>
              </div>
              <div class="portfolio-links">
                <a href="<?=base_url('assets');?>/img/portfolio/kaca3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Kaca 3"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Our Portfolio Section -->
  <!-- ======= Marketplace ======= -->
  <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <div id="marketplace">
          <h2>Marketplace Recycle Earth</h2>
          <p>Mari Gunakan Produk Daur Ulang</p>

        </div>
<div></div>
<div class="container">
          <div class="row portfolio-container">
            <!-- Vas Botol -->
            <div class="col-lg-3 col-md-6 portfolio-item filter-app">
              <div class="card mb-4" style="width: 16rem;">
                <img src="<?= base_url('assets'); ?>/img/portfolio/btl1.jpg" class="card-img-top" alt="" style="object-fit: cover; height: 200px;">
                <div class="card-body text-center">
                  <h5 class="card-title">Vas Botol</h5>
                  <p class="card-text">Bisa digantung dan sebagai pajangan</p>
                  <span class="badge bg-success" style="margin-bottom: 10px;">Rp 89.000</span>
                  <button class="btn btn-primary add-to-cart" data-name="Vas Botol" data-price="89000">Tambah ke Keranjang</button>
                </div>
              </div>
            </div>

    <!-- Figura -->
    <div class="col-lg-3 col-md-6 portfolio-item filter-app">
      <div class="card mb-4" style="width: 16rem;">
        <img src="<?= base_url('assets'); ?>/img/portfolio/figura.jpg" class="card-img-top" alt="" style="object-fit: cover; height: 200px;">
        <div class="card-body text-center"> <!-- Tambahkan class text-center di sini -->
          <h5 class="card-title">Figura</h5>
          <p class="card-text">Semakin mempercantik tampilan foto anda</p>
          <span class="badge bg-success" style="margin-bottom: 10px;">Rp 25.000</span>
          <button class="btn btn-primary add-to-cart" data-name="Figura" data-price="25000">Tambah ke Keranjang</button>
        </div>
      </div>
    </div>
    <!-- Piring -->
    <div class="col-lg-3 col-md-6 portfolio-item filter-app">
      <div class="card mb-4" style="width: 16rem;">
        <img src="<?= base_url('assets'); ?>/img/portfolio/pltik2.jpg" class="card-img-top" alt="" style="object-fit: cover; height: 200px;">
        <div class="card-body text-center"> <!-- Tambahkan class text-center di sini -->
          <h5 class="card-title">Piring Hias</h5>
          <p class="card-text">Cocok digunakan untuk tempat buah</p>
          <span class="badge bg-success" style="margin-bottom: 10px;">Rp 15.000</span>
          <button class="btn btn-primary add-to-cart" data-name="Piring" data-price="15000">Tambah ke Keranjang</button>
        </div>
      </div>
    </div>

    <!-- Keranjang Sayur -->
    <div class="col-lg-3 col-md-6 portfolio-item filter-app">
      <div class="card mb-4" style="width: 16rem;">
        <img src="<?= base_url('assets'); ?>/img/portfolio/plstik.jpg" class="card-img-top" alt="" style="object-fit: cover; height: 200px;">
        <div class="card-body text-center"> <!-- Tambahkan class text-center di sini -->
          <h5 class="card-title">Keranjang Sayur</h5>
          <p class="card-text">Keranjang multifungsi dan tahan lama</p>
          <span class="badge bg-success" style="margin-bottom: 10px;">Rp 23.000</span>
          <button class="btn btn-primary add-to-cart" data-name="Keranjang Sayur" data-price="23000">Tambah ke Keranjang</button>
        </div>
      </div>
    </div>

    <!-- Guci -->
    <div class="col-lg-3 col-md-6 portfolio-item filter-app">
      <div class="card mb-4" style="width: 16rem;">
        <img src="<?= base_url('assets'); ?>/img/portfolio/kaca2.jpg" class="card-img-top" alt="" style="object-fit: cover; height: 200px;">
        <div class="card-body text-center"> <!-- Tambahkan class text-center di sini -->
          <h5 class="card-title">Guci</h5>
          <p class="card-text">Cocok untuk disudut ruangan</p>
          <span class="badge bg-success" style="margin-bottom: 10px;">Rp 150.000</span>
          <button class="btn btn-primary add-to-cart" data-name="Guci" data-price="150000">Tambah ke Keranjang</button>
        </div>
      </div>
    </div>

    <!--Hiasan Eiffel -->
    <div class="col-lg-3 col-md-6 portfolio-item filter-app filter-card"> <!-- Tambahkan class "filter-app" dan "filter-card" di sini -->
      <div class="card mb-4" style="width: 16rem;">
        <img src="<?= base_url('assets'); ?>/img/portfolio/kaca3.jpg" class="card-img-top" alt="" style="object-fit: cover; height: 200px;">
        <div class="card-body text-center"> <!-- Tambahkan class text-center di sini -->
          <h5 class="card-title">Hiasan Effiel</h5>
          <p class="card-text">Hiasan atas Meja</p>
          <span class="badge bg-success" style="margin-bottom: 10px;">Rp 71.000</span>
          <button class="btn btn-primary add-to-cart" data-name="Hiasan Eiffel" data-price="71000">Tambah ke Keranjang</button>
        </div>
      </div>
    </div>
    <!-- Kursi Set -->
    <div class="col-lg-3 col-md-6 portfolio-item filter-app filter-card"> <!-- Tambahkan class "filter-app" dan "filter-card" di sini -->
      <div class="card mb-4" style="width: 16rem;">
        <img src="<?= base_url('assets'); ?>/img/portfolio/kursiset.jpg" class="card-img-top" alt="" style="object-fit: cover; height: 200px;">
        <div class="card-body text-center"> <!-- Tambahkan class text-center di sini -->
          <h5 class="card-title">Satu Set Meja dan Kursi</h5>
          <p class="card-text">Cocok untuk diluar ruangan</p>
          <span class="badge bg-success" style="margin-bottom: 10px;">Rp 345.000</span>
          <button class="btn btn-primary add-to-cart" data-name="Kursi set" data-price="345000">Tambah ke Keranjang</button>
        </div>
      </div>
    </div>
    <!-- Tas -->
    <div class="col-lg-3 col-md-6 portfolio-item filter-app filter-card"> <!-- Tambahkan class "filter-app" dan "filter-card" di sini -->
      <div class="card mb-4" style="width: 16rem;">
        <img src="<?= base_url('assets'); ?>/img/portfolio/plstik1.jpeg" class="card-img-top" alt="" style="object-fit: cover; height: 200px;">
        <div class="card-body text-center"> <!-- Tambahkan class text-center di sini -->
          <h5 class="card-title">Tas Estetik</h5>
          <p class="card-text">Space lebar</p>
          <span class="badge bg-success" style="margin-bottom: 10px;">Rp 21.000</span>
          <button class="btn btn-primary add-to-cart" data-name="Tas" data-price="21000">Tambah ke Keranjang</button>
        </div>
      </div>
    </div><!-- Botol Kaca Hias -->
    <div class="col-lg-3 col-md-6 portfolio-item filter-app filter-card"> <!-- Tambahkan class "filter-app" dan "filter-card" di sini -->
      <div class="card mb-4" style="width: 16rem;">
        <img src="<?= base_url('assets'); ?>/img/portfolio/kaca1.jpg" class="card-img-top" alt="" style="object-fit: cover; height: 200px;">
        <div class="card-body text-center"> <!-- Tambahkan class text-center di sini -->
          <h5 class="card-title">Botol Kaca Hias</h5>
          <p class="card-text">Cocok dipadukan dengan bunga diatas meja</p>
          <span class="badge bg-success" style="margin-bottom: 10px;">Rp 33.000</span>
          <button class="btn btn-primary add-to-cart" data-name="Botol Kaca Hias" data-price="33000">Tambah ke Keranjang</button>
        </div>
      </div>
    </div><!-- Tempat Aksesoris -->
    <div class="col-lg-3 col-md-6 portfolio-item filter-app filter-card"> <!-- Tambahkan class "filter-app" dan "filter-card" di sini -->
      <div class="card mb-4" style="width: 16rem;">
        <img src="<?= base_url('assets'); ?>/img/portfolio/btl3.webp" class="card-img-top" alt="" style="object-fit: cover; height: 200px;">
        <div class="card-body text-center"> <!-- Tambahkan class text-center di sini -->
          <h5 class="card-title">Tempat Aksesoris</h5>
          <p class="card-text">Tempat cantik untuk perhiasan</p>
          <span class="badge bg-success" style="margin-bottom: 10px;">Rp 11.000</span>
          <button class="btn btn-primary add-to-cart" data-name="Tempat Aksesoris" data-price="11000">Tambah ke Keranjang</button>
        </div>
      </div>
    </div><!-- Bunga Artificial -->
    <div class="col-lg-3 col-md-6 portfolio-item filter-app filter-card"> <!-- Tambahkan class "filter-app" dan "filter-card" di sini -->
      <div class="card mb-4" style="width: 16rem;">
        <img src="<?= base_url('assets'); ?>/img/portfolio/btl2.jpg" class="card-img-top" alt="" style="object-fit: cover; height: 200px;">
        <div class="card-body text-center"> <!-- Tambahkan class text-center di sini -->
          <h5 class="card-title">Bunga Artificial</h5>
          <p class="card-text">Cocok untuk hiasan diatas meja</p>
          <span class="badge bg-success" style="margin-bottom: 10px;">Rp 7.000</span>
          <button class="btn btn-primary add-to-cart" data-name="Bunga Artificial" data-price="7000">Tambah ke Keranjang</button>
        </div>
      </div>
      </div><!--Dream Catcher -->
    <div class="col-lg-3 col-md-6 portfolio-item filter-app filter-card"> <!-- Tambahkan class "filter-app" dan "filter-card" di sini -->
      <div class="card mb-4" style="width: 16rem;">
        <img src="<?= base_url('assets'); ?>/img/portfolio/dream chater.jpg" class="card-img-top" alt="" style="object-fit: cover; height: 200px;">
        <div class="card-body text-center"> <!-- Tambahkan class text-center di sini -->
          <h5 class="card-title">Dream Catcher</h5>
          <p class="card-text">Terbuat dari tutup botol bekas</p>
          <span class="badge bg-success" style="margin-bottom: 10px;">Rp 17.000</span>
          <button class="btn btn-primary add-to-cart" data-name="Dream Catcher" data-price="17000">Tambah ke Keranjang</button>
        </div>
      </div>
    </div>

  </div> <!-- Tutup row untuk kedua card -->
</div> <!-- Tutup container -->
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
          window.location.href = 'pengumuman';
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
<!-- ======= Contact Us Section ======= -->
<section id="contact" class="contact section-bg">
  <div class="container">
    <div class="section-title">
      <h2>Contact Us</h2>
      <p>Jangan ragu untuk menghubungi kami melalui informasi kontak yang tersedia di bawah ini. Kami siap mendengarkan pertanyaan, saran, atau permintaan Anda seputar layanan kami. Dengan senang hati, tim kami akan merespons setiap pesan Anda dengan penuh perhatian dan profesionalisme, karena kepuasan Anda adalah prioritas utama bagi kami.</p>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row d-flex align-items-stretch">

      <div class="col-lg-3 info d-flex flex-column align-items-stretch">
        <i class="bx bx-map"></i>
        <h4>Address</h4>
        <p>Malang<br>Sunan Muria II</p>
      </div>

      <div class="col-lg-3 info info-bg d-flex flex-column align-items-stretch">
        <i class="bx bx-phone"></i>
        <h4>Call Us</h4>
        <p>085659724483</p>
      </div>

      <div class="col-lg-3 info info-bg d-flex flex-column align-items-stretch">
        <i class="bx bx-envelope"></i>
        <h4>Email Us</h4>
        <p>salsabilaazzahra821@gmail.com<br>azzahrasalsa26@student.ub.ac.id</p>
      </div>

      <div class="col-lg-3 info d-flex flex-column align-items-stretch">
        <i class="bx bx-time-five"></i>
        <h4>Working Hours</h4>
        <p>Mon - Fri: 9AM to 5PM<br>Sunday: 9AM to 1PM</p>
      </div>

    </div>
  </div>
</section><!-- End Contact Us Section -->

<!-- Add some custom CSS to style the section -->
<style>
  .contact .row {
    display: flex;
    flex-wrap: nowrap;
    justify-content: space-between;
  }

  .contact .info {
    flex: 1;
    margin: 10px;
  }

  .contact .info i {
    font-size: 48px;
    margin-bottom: 20px;
    color: #3498db;
  }

  .contact .info h4 {
    font-size: 24px;
    margin-bottom: 20px;
    color: #333;
  }

  .contact .info p {
    font-size: 16px;
    color: #777;
  }

  .contact .info-bg {
    background: #f9f9f9;
    padding: 20px;
  }
</style>


   <!-- ======= Login ======= -->


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

  <!-- Template Main JS File -->
  <script src="<?=base_url('assets');?>/js/main.js"></script>

</body>

</html>