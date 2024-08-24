<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Edit Berita</title>
    <style>
        /* CSS tambahan */
        body {
            font-style: normal;
            background-color: #f2f2f2;
        }

        .wrapper {
            width: 50%;
            margin: 100px auto;
            background-color: cadetblue;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            text-align: left;
        }

        .inputbox {
            margin-bottom: 20px;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            border-radius: 6px;
            border: 1px solid #ccc;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
        }

        button[type="submit"] {
            background-color: green;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <h1>Edit Berita</h1>

        <form action="<?= site_url('admin/update_user/' . $berita['id']); ?>" method="post">
            <div class="inputbox">
                Judul :
                <input type="text" name="judul" value="<?= $berita['nama']; ?>">
            </div>
            <br>
            Berita :
            <textarea name="berita" rows="4" cols="50"><?= $berita['username']; ?></textarea>
            <br>
            <textarea name="berita" rows="4" cols="50"><?= $berita['status']; ?></textarea>
            <br>
            <button type="submit">Update</button>
        </form>
    </div>

</body>

</html>