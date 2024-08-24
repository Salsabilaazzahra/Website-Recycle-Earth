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
                  font-style: normal;
                  margin: 0;
                  padding: 0;
                  background-color: #f4f4f4;
            }

            .wrapper {
                  width: 50%;
                  margin: 100px auto;
                  background-color: cadetblue;
                  padding: 20px;
                  border-radius: 10px;
                  box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
            }

            h1 {
                  text-align: center;
            }

            form {
                  margin-top: 20px;
            }

            .inputbox {
                  margin-bottom: 20px;
            }

            .inputbox input,
            textarea {
                  width: 100%;
                  padding: 10px;
                  border: 1px solid #ccc;
                  border-radius: 5px;
                  box-sizing: border-box;
            }

            button[type="submit"] {
                  background-color: #007bff;
                  color: #fff;
                  border: none;
                  padding: 10px 20px;
                  border-radius: 5px;
                  cursor: pointer;
                  transition: background-color 0.3s ease;
            }

            button[type="submit"]:hover {
                  background-color: #0056b3;
            }
      </style>
</head>

<body>
      <div class="wrapper">
            <h1>Tambah Keranjang</h1>
            <form action="<?= site_url('admin/berita'); ?>" method="post">
                  <div class="inputbox">
                        <input placeholder="Masukkan Judul Baru" type="text" name="judul">
                        <input placeholder="Masukkan Judul Baru" type="text" name="judul">
                        <input placeholder="Masukkan Judul Baru" type="text" name="judul">
                        <input placeholder="Masukkan Judul Baru" type="text" name="judul">
                        <tr>
                              <th>NO</th>
                              <th>Nama Produk</th>
                              <th>Jumlah</th>
                              <th>Harga</th>
                              <th>Sub-Total</th>
                        </tr>
                  </div>
                  <br>
                  <textarea name="berita" rows="4" cols="50" placeholder="Write something..">
      </textarea>
                  <br>
                  <br>
                  <button type="submit">Simpan</button>

            </form>
      </div>


</body>



</html>