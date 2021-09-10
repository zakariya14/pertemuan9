<?php
require "functions.php";

// mengambil data di url
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

// cek apakah tombol sudah di tekan atau belum
if (isset($_POST["submit"])) {

  // cek data berhasil diubah atau tidak
  if (ubah($_POST) > 0) {
    echo "
    <script>
    alert('data berhasil diubah');
    document.location.href = 'index.php';
    </script>
    ";
  } else {
    echo "
    <script>
    alert('data gagal diubah');
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
  <title>Ubah Data Mahasiswa</title>
</head>

<body>
  <h1>Ubah Data Mahasiswa</h1>

  <form action="" method="POST">
    <input type="hidden" name="id" value="<?= $mhs["id"] ?>">
    <ul>
      <li>
        <label for="nama">Nama : </label>
        <input type="text" name="nama" id="nama" value="<?= $mhs["nama"] ?>">
      </li> <br>
      <li>
        <label for="nim">NIM : </label>
        <input type="text" name="nim" id="nim" value="<?= $mhs["nim"] ?>">
      </li> <br>
      <li>
        <label for="email">Email : </label>
        <input type="text" name="email" id="email" value="<?= $mhs["email"] ?>">
      </li><br>
      <li>
        <label for="jurusan">Jurusan : </label>
        <input type="text" name="jurusan" id="jurusan" value="<?= $mhs["jurusan"] ?>">
      </li> <br>
      <li>
        <label for="gambar">Gambar : </label>
        <input type="text" name="gambar" id="gambar" value="<?= $mhs["gambar"] ?>">
      </li><br>
    </ul>
    <button type="submit" name="submit" style="margin-left: 20px;">Ubah Data</button>
  </form>
</body>

</html>