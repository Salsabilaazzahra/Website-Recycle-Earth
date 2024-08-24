<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Barang</title>
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
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background-image: url('<?=base_url('assets');?>/img/slide/bck1.jpg');
      background-size: cover;
      background-position: center;
    }

    .wrapper {
      width: 100%;
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: rgba(60, 202, 180, 0.5);
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      margin-top: 55px;
      border: 3px solid #3CCAB4;
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

    .input_box input,
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

    .button {
      width: 200px;
      padding: 3px 5px;
      background-color: #3CCAB4;
      border: 3px solid #2AA996;
      color: #000000;
      border-radius: 25px;
      cursor: pointer;
      transition: background-color 0.3s ease;
      display: block;
      margin: 0 auto;
    }

    .button:hover {
      background-color: #0056b3;
    }

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
      margin-right: 0px;
    }

    .logo-text {
      font-size: 24px;
      margin-left: 10px;
    }

    .logo-text hr {
      width: 100px;
      border: 1px solid black;
      margin-top: 5px;
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
    <form action="<?= site_url('admin/barang_store'); ?>" method="post" enctype="multipart/form-data">
  <h1 style="margin-bottom: 20px;">Tambah Barang</h1>

  <div class="input_box">
    <input placeholder="Masukkan Nama Barang" name="nama" type="text">
    <i class='bx bxs-user'></i>
  </div>

  <div class="input_box">
    <input placeholder="Masukkan Harga Barang" name="harga" type="text">
    <i class='bx bxs-user'></i>
  </div>

  <div class="textarea_box">
    <input placeholder="Keterangan Barang" rows="4" cols="50" name="keterangan" type="text">
    <i class='bx bxs-user'></i>
  </div>

  <div class="input_box">
    <input type="file" name="file" class="custom-file-input" id="gambar">
    <label class="custom-file-label" for="gambar">Choose File</label>
  </div>

  <br>
  <button type="submit" class="button">Simpan</button>
</form>

  </div>
</body>

</html>
