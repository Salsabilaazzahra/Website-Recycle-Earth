<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register User Baru</title>
  <style>
    /* Reset CSS */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Adamina', serif;
      background-color: rgb(255, 255, 255);
      display:flex;
      justify-content: :center;
      align-items:center;
      min-height:100vh;
      background-image: url(<?=base_url('assets');?>/img/slide/bck1.jpg);
      background-size:cover;
      background-position:center;
    }
    

    .wrapper {
      width: 100%;
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: rgba(60, 202, 180, 0.5); /*background login*/
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      margin-top: 55px;
      border: 3px solid #3CCAB4; /*garis tepi*/
    }

    h1 {
      font-size: 24px;
      text-align: center;
      margin-bottom: 30px;
    }

    .input_box {
      position: relative;
      margin-bottom: 20px;
    }

    .input_box input {
      width: 100%;
      padding: 10px 20px;
      border: 1px solid #ccc;
      border-radius: 25px;
      outline: none;
      color: black;
    }
    
    .textarea_box input {
      width: 100%;
      padding: 10px 20px;
      border: 1px solid #ccc;
      border-radius: 25px;
      outline: none;
      color: black;
    }
    
    .textarea_box i {
      position: absolute;
      top: 50%;
      right: 10px;
      transform: translateY(-50%);
      color: #000000;
    }

    .input_box input:focus {
      border-color: #007bff;
    }

    .input_box i {
      position: absolute;
      top: 50%;
      right: 10px;
      transform: translateY(-50%);
      color: #000000;
    }

    .button { /*DAFTAR*/
      width: 200px;
      padding: 3px 5px; /* Ukuran padding disesuaikan untuk membuat tombol lonjong */
      background-color: #3CCAB4;
      border: 3px solid #2AA996; /*garis tepi tombol*/
      color: #000000;
      border-radius: 25px; /* Border radius disesuaikan untuk membuat tombol lonjong */
      cursor: pointer;
      transition: background-color 0.3s ease;
      display: block; /* Menjadikan tombol sebagai blok agar dapat menyesuaikan lebar parentnya */
      margin: 0 auto; /* Posisi tombol ke tengah */
    }

    .button:hover {
      background-color: #0056b3;
    }

    /* Additional Styles */
    .login-header {
      display: flex;
      align-items: center;
      justify-content: center; 
      margin-bottom: 20px;
    }

    .login-logo {
      width: 100px;
      height: 100px;
      object-fit: contain;
      margin-right: 0px; /* Jarak antara logo dan teks */
    }

    .logo-text {
      font-size: 24px; /* ukuran teks */
      margin-left: 10px; /* jarak antara logo dan teks */
    }

    .logo-text hr {
      width: 100px; /* Lebar garis */
      border: 1px solid black; /* Warna dan ketebalan garis */
      margin-top: 5px; /* Jarak antara teks dan garis */
    }

  </style>
</head>

<body>
  <div class="wrapper">
    <div class="login-header">
    <img src="<?= base_url('assets'); ?>/img/recycle.png" class="card-img-top" alt="" style="display:flex; align-items:center; margin-right:10px; text-align:left; height:90px; width:auto">
      <div>
        <h1 style="margin-bottom: 5px;">Recycle Earth</h1>
        <h1 style="font-size: 18px;">Ubah Limbah Menjadi Berkah</h1>
        <hr> 
      </div>
    </div>
    <form action="<?= site_url('admin/update_barang/' . $barang['id']); ?>" method="post" enctype="multipart/form-data">
    <h1 style="margin-bottom: 20px;">Edit Barang</h1>

    <div class="inputbox">
        <label for="nama">Nama Barang:</label>
        <div class="input_box">
            <input id="nama" name="nama" type="text" value="<?= $barang['nama']; ?>" required>
            <i class='bx bxs-user'></i>
        </div>
    </div>

    <div class="inputbox">
        <label for="harga">Harga Barang:</label>
        <div class="input_box">
            <input id="harga" name="harga" type="text" value="<?= $barang['harga']; ?>" required>
            <i class='bx bxs-user'></i>
        </div>
    </div>

    <div class="inputbox">
        <label for="keterangan">Keterangan Barang:</label>
        <div class="textarea_box">
            <input id="keterangan" name="keterangan" type="text" value="<?= $barang['keterangan']; ?>" required>
            <i class='bx bxs-user'></i>
        </div>
    </div>

    <div class="inputbox">
        <label>Gambar:</label>
        <div>
            <img src="<?= base_url('gambar/' . $barang['gambar']); ?>" alt="Gambar" style="height: 200px;">
            <input type="hidden" name="old_gambar" value="<?= esc($barang['gambar']); ?>">
        </div>
    </div>

    <div class="inputbox">
        <label for="file">Gambar Baru (Optional):</label>
        <div>
            <input id="file" type="file" name="file">
        </div>
    </div>

    <br>
    <button type="submit" class="button">Update</button>
</form>

  </div>
</body>

</html>
