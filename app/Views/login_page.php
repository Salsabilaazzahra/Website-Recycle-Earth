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
    {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family:'Adamina', serif;
      background-color: rgb(255, 255, 255);
      display:flex;
      justify-content: center;
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
      background-color: rgba(60,202,180,0.5); /*background login*/
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
      color:black;
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

    .button { /*LOGIN*/
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
      justify-content: center; /* Mengatur jarak antara elemen di samping */
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
    .horizontal-line {
      width: 100%;
      height: 1px;
      background-color: black;
      margin-top: -10px;
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
      </div>
    </div>
    <div class="horizontal-line"></div>
    <h1></h1>
    <form action="<?= site_url('login'); ?>" method="post">
      <h1 style="font-weight: bold; margin-bottom: 20px;">Login</h1>
      <?php if(session()->getFlashdata('message')):?>
        <div style="color: green;">
            <?= session()->getFlashdata('message') ?>
        </div>
    <?php endif; ?>
    <?php if(session()->getFlashdata('error')):?>
        <div style="color: red;">
            <?= session()->getFlashdata('error') ?>
        </div>
    <?php endif; ?>
      <div class="input_box">
        <input name="username" type="text" placeholder="Username" required>
        <i class='bx bxs-user'></i>
      </div>
      <div class="input_box">
        <input name="password" type="password" placeholder="Password" required>
        <i class='bx bxs-lock-alt'></i>
      </div>
      <button type="submit" class="button">Login</button>
      <p style="margin-top: 10px; text-align: center; margin-bottom: 5px;">Belum punya akun? <a href="<?= site_url('register_user') ?>">Daftar</a></p>
      <p style="margin-top: 10px; text-align: center;"><a href="<?= site_url('lupa_password') ?>">Lupa Password?</a></p>
    </form>
  </div>
</body>

</html>
