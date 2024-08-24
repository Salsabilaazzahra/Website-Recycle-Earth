<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Konfirmasi</title>
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
      font-family: 'Adamina', serif;
      background-color: rgb(255, 255, 255);
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background-image: url(<?= base_url('assets'); ?>/img/slide/bck1.jpg);
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

    .input_box input {
      width: 100%;
      padding: 10px 20px;
      border: 1px solid #ccc;
      border-radius: 25px;
      outline: none;
      color: black;
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
      text-align: center;
      text-decoration: none;
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
      <img src="<?= base_url('assets'); ?>/img/recycle.png" class="card-img-top" alt=""
        style="display:flex; align-items:center; margin-right:10px; text-align:left; height:90px; width:auto">
      <div>
        <h1 style="margin-bottom: 5px;">Recycle Earth</h1>
        <h1 style="font-size: 18px;">Ubah Limbah Menjadi Berkah</h1>
      </div>
    </div>
    <div class="horizontal-line"></div>
    <h1>Konfirmasi</h1>
    <form id="confirmationForm">
      <div class="input_box">
        <input name="name" type="text" placeholder="Nama Lengkap" required>
        <i class='bx bxs-user'></i>
      </div>
      <div class="input_box">
        <input name="phone" type="text" placeholder="Nomor Telepon" required>
        <i class='bx bxs-phone'></i>
      </div>
      <div class="input_box">
        <input name="address" type="text" placeholder="Alamat" required>
        <i class='bx bxs-map'></i>
      </div>
      <div class="input_box">
        <input name="email" type="email" placeholder="Email" required>
        <i class='bx bxs-envelope'></i>
      </div>
      <a id="confirmButton" class="button" href="#">Konfirmasi</a>
    </form>
  </div>
  <script>
    document.getElementById('confirmButton').addEventListener('click', function (event) {
      event.preventDefault();
      const form = document.getElementById('confirmationForm');
      const name = form.elements['name'].value;
      const phone = form.elements['phone'].value;
      const address = form.elements['address'].value;
      const email = form.elements['email'].value;

      const message = `Nama: ${name}\nNomor Telepon: ${phone}\nAlamat: ${address}\nEmail: ${email}`;
      const whatsappURL = `https://wa.me/6285659724483`;

      window.open(whatsappURL, '_blank');
    });
  </script>
</body>

</html>
