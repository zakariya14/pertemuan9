<?php
require "functions.php";

// cek apakah tombol sudah di tekan atau belum
if (isset($_POST["submit"])) {

  // cek data berhasil ditambahkan atau tidak
  if (tambah($_POST) > 0) {
    echo "
    <script>
    alert('data berhasil ditambahkan');
    document.location.href = 'index.php';
    </script>
    ";
  } else {
    echo "
    <script>
    alert('data gagal ditambahkan');
    document.location.href = 'index.php';
    </script>
    ";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Mahasiswa</title>
</head>

<body>
  <h1>Tambah Data Mahasiswa</h1>

  <form action="" method="POST" enctype="multipart/form-data">
    <ul>
      <li>
        <label for="nama">Nama : </label>
        <input type="text" name="nama" id="nama">
      </li> <br>
      <li>
        <label for="nim">NIM : </label>
        <input type="text" name="nim" id="nim">
      </li> <br>
      <li>
        <label for="email">Email : </label>
        <input type="text" name="email" id="email">
      </li><br>
      <li>
        <label for="jurusan">Jurusan : </label>
        <input type="text" name="jurusan" id="jurusan">
      </li> <br>
      <li>
        <label for="gambar">Gambar : </label>
        <input type="file" name="gambar" id="gambar">
      </li><br>
    </ul>
    <button type="submit" name="submit" style="margin-left: 20px;">Tambah Data</button>
  </form>
</body>

</html>