<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pengumuman</title>
  <link rel="stylesheet" href="path/to/bootstrap.css">
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?=base_url('assets');?>/img/favicon.png" rel="icon">
  <link href="<?=base_url('assets');?>/img/apple-touch-icon.png" rel="apple-touch-icon">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?=base_url('assets');?>/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?=base_url('assets');?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?=base_url('assets');?>/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?=base_url('assets');?>/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?=base_url('assets');?>/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?=base_url('assets');?>/vendor/swiper/swiper-bundle.min.css" rel="stylesheet"> 
  <script src="<?=base_url('assets');?>/js/script.js"></script>
  <style>
    body {
      font-family: 'Adamina', serif;
      font-size: 25;
      background-image: url(<?=base_url('assets');?>/img/slide/bck1.jpg);
      background-size: cover;
    }

    .navbar {
      background-color: CadetBlue;
    }

    .navbar-nav .nav-link {
      color: white;
      margin-right: 20px;
    }

    .navbar-nav .nav-link:hover {
      color: lightgray;
    }

    /* Card */
    .card {
      margin-top: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .card-header {
      background-color: darkcyan;
      color: white;
    }

    .card-body {
      padding: 20px;
    }

    /* Button */
    .btn {
      color: white;
    }

    .btn-primary {
      background-color: #38B9A4;
    }

    .btn-primary:hover {
      background-color: #38B9A5;
    }

    .btn-warning {
      background-color: #38B9A4;
    }

    .btn-danger {
      background-color: firebrick;
    }

    /* Table */
    .table {
      margin-top: 20px;
    }

    .table th {
      color: black;
    }

    .table td {
      vertical-align: middle;
    }

    /* Left Sidebar */
    .sidebar {
      font-family: 'Adamina', serif;
      background-color: rgba(60, 202, 180, 0.5);
      color: white;
      padding: 20px;
      border-radius: 5px;
      border-right: 5px solid #38B9A5;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      height: 110vh;
      overflow-y: auto;
      position: fixed;
      top: 0;
      left: 0;
      width: 250px;
    }

    .sidebar a {
      color: black;
      text-decoration: none;
      display: block;
      margin-bottom: 10px;
    }

    .sidebar a:hover {
      text-decoration: underline;
    }

    .sidebar-logo-hr {
      margin-top: 7px;
      border-color: black;
      border-style: solid;
      border-width: 2px;
      flex-grow: 1;
    }

    /* Main Content */
    .main-content {
      padding-left: 280px;
      padding-top: 20px;
    }

    /* Header */
    .header {
      font-family: 'Adamina', serif;
      background-color: rgba(60, 202, 180, 0.5);
      color: white;
      padding: 20px;
      display: flex;
      justify-content: center;
      align-items: center;
      width: 110%;
    }
    
    /* Custom styles for the checkout button */
    #total-price {
      display: flex;
      justify-content: flex-end;
      align-items: center;
      margin-top: 20px;
    }

    #checkout-button {
      margin-left: 20px;
      border-radius: 5px;
      color: #B7091D;
      background-color: white;
      border: 1px solid #B7091D;
    }

    #checkout-button a {
      color: inherit;
      text-decoration: none;
      display: block;
      padding: 10px 20px;
    }
  </style>

  <!-- Template Main CSS File -->
  <link href="<?=base_url('assets');?>/css/style.css" rel="stylesheet">

</head>
<body>

  <!-- ======= Header ======= -->
  <div class="container">
    <div class="row">
      <!-- Header -->
      <div class="col-lg-12">
        <div class="header">
        </div>
      </div>
    </div>

    <div class="row">
      <!-- Left Sidebar -->
      <div class="col-lg-3">
        <div class="sidebar">
          <div class="sidebar-logo">
            <img src="<?= base_url('assets'); ?>/img/recycle.png" class="card-img-top" alt="" style="display:flex; align-items:center; margin-right:50px; text-align:right; height:90px; width:auto">
            <hr class="sidebar-logo-hr">
          </div>
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" href="/index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/index.php#marketplace">Marketplace</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pengumuman">Keranjang</a>
            </li>
          </ul>
        </div>
      </div>

      <!-- Main Content -->
      <div class="col-lg-9 main-content">
        <div class="card">
          <h5 class="card-header" style="font-family: 'Adamina', serif; margin-left:-310px">Selamat Datang di Portal Recycle Earth</h5>
        </div>
        <div class="container">
                    <div class="card" style="margin-left:-310px">
                        <h5 class="card-header" style="font-family: 'Adamina'">Tabel Barang</h5>
                        <div class="card-body">
                            <table class="table" style="font-family: 'Adamina', serif;">
                                <thead>
                                    <tr>
                                          <th scope="col">Nama Barang</th>
                                          <th scope="col">Harga Barang</th>
                                          <th scope="col">Aksi</th>

                                    </tr>
          </thead>
          <tbody id="cart-items"></tbody>
        </table>
        <div id="total-price" style="font-family: 'Adamina', serif;margin-left:-310px">
          <div>Total: Rp <span id="total-amount">0</span></div>
          <button id="checkout-button" style="font-family: 'Adamina', serif;">
            <a href="<?= site_url('isi_pengumuman') ?>">Konfirmasi Pembayaran</a>
          </button>
        </div>
      </div>
    </div>
  </div>

  <script>
    // Function to display cart items and calculate total price
    function displayCartItems() {
      const cartItems = JSON.parse(localStorage.getItem('cart')) || [];
      const cartItemsTable = $('#cart-items');
      let total = 0;

      cartItemsTable.empty(); // Kosongkan daftar sebelum menambahkan item baru

      cartItems.forEach((item, index) => {
        const tableRow = $('<tr>');

        const itemName = $('<td>').text(item.name);
        const priceItem = $('<td>').text(`Rp ${item.price}`);
        const deleteButton = $('<button>').addClass('btn btn-danger btn-sm delete-item').text('Delete').click(() => {
          removeCartItem(index);
        });

        const actionCell = $('<td>').append(deleteButton);

        tableRow.append(itemName);
        tableRow.append(priceItem);
        tableRow.append(actionCell);
        cartItemsTable.append(tableRow);

        // Tambahkan harga item ke total
        total += parseInt(item.price);
      });

      // Tampilkan total harga
      $('#total-amount').text(total);
    }

    // Function to remove cart item
    function removeCartItem(index) {
      let cartItems = JSON.parse(localStorage.getItem('cart')) || [];
      cartItems.splice(index, 1);
      localStorage.setItem('cart', JSON.stringify(cartItems));
      displayCartItems();
    }

    // Panggil fungsi untuk menampilkan item pada saat halaman dimuat
    $(document).ready(displayCartItems);
  </script>
</body>
</html>
