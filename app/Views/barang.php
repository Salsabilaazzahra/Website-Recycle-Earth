<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <style>
        body {
            font-family:'Adamina', serif;
            font-size: 25;
            background-image:url(<?=base_url('assets');?>/img/slide/bck1.jpg);
            background-size:cover ;
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

        /* judul */
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

        /* tombol */
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
            background-color: rgba(60, 202, 180, 0.5);
            color: white;
            padding: 20px;
            border-radius: 5px;
            border-right: 5px solid #38B9A5;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            height: 110vh; /* Tinggi sidebar mengikuti tinggi viewport */
            overflow-y: auto;
            position: fixed; /* Tetapkan posisi sidebar */
            top: 0; /* Posisikan di bagian atas */
            left: 0; /* Posisikan di sisi kiri */
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
            border-style: solid; /* Style garis */
            border-width: 2px; /* Tebal garis */
            flex-grow: 1;
        }

        /* Konten Utama */
        .main-content {
            padding-left: 280px; /* Sesuaikan padding konten utama untuk memberi ruang pada sidebar */
            padding-top: 20px; /* Tambahkan ruang atas */
        }

        /* Header */
        .header {
            background-color: rgba(60, 202, 180, 0.5);
            color: white;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 110%; /* Lebar header mengikuti lebar layar */
        }
        

       
    </style>

</head>

<body>
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
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url('/user') ?>">User</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url('/logout') ?>">Logout</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url('admin/ganti_password') ?>">Ganti Password</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Main Content -->
            <div class="col-lg-9">
                <!-- Main Content Goes Here -->
                <div class="container" >
                    <div class="card">
                        <h5 class="card-header" >Selamat Datang di Portal Recycle Earth</h5>
                        <div class="card-body">
                            <a href="<?= site_url('admin/isi_barang') ?>" class="btn btn-primary">+ Isi Barang Baru</a>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="card">
                        <h5 class="card-header">Tabel Barang</h5>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Nama Barang</th>
                                        <th>Harga Barang</th>
                                        <th>Keterangan Barang</th>
                                        <th>Gambar</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($barang as $key => $post): ?>
                                        <tr>
                                            <td><?php echo $post['nama'] ?></td>
                                            <td><?php echo $post['harga'] ?></td>
                                            <td><?php echo $post['keterangan'] ?></td>
                                            <td><img src="<?= base_url('gambar/' . $post['gambar']); ?>" width="100" height="100"></td>

                                            <td>
                                                <button class="btn btn-warning btn-sm">
                                                    <a class="text-white"
                                                        href="<?= site_url('admin/edit_barang/' . $post['id']) ?>">Edit</a>
                                                </button>
                                                <button class="btn btn-danger btn-sm">
                                                    <a class="text-white"
                                                        href="<?= site_url('admin/delete_barang/' . $post['id']) ?>">Delete</a>
                                                </button>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
