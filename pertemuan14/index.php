<?php
session_start();

if (!isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}

require "functions.php";
$mahasiswa = query("SELECT * FROM mahasiswa");

// tombol cari ditekan
if (isset($_POST["cari"])) {
  $mahasiswa = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Admin</title>
</head>

<body>
  <div style="text-align: center;">

    <h1>Daftar Mahasiswa</h1>
    <a href="tambah.php">Tambah Data</a> | <a href="logout.php">Logout</a><br> <br>
    <form action="" method="POST">
      <input type="text" name="keyword" size="40" autofocus placeholder="Masukkan nama..." autocomplete="off">
      <button type="submit" name="cari">Cari</button><br>
    </form>
    <table border="1" cellpadding="10" cellspacing="0" style="margin: auto;">
      <tr>
        <th>No</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>Nama</th>
        <th>NIM</th>
        <th>Email</th>
        <th>Jurusan</th>
      </tr>
      <?php $i = 1; ?>
      <?php foreach ($mahasiswa as $key => $value) : ?>
        <tr>
          <td><?= $i; ?></td>
          <td>

            <a href="ubah.php?id=<?= $value["id"]; ?>">Ubah</a> | <a href="hapus.php?id=<?= $value["id"]; ?>" onclick="return confirm('Anda yakin menghapus data ini?')">Hapus</a>
          </td>
          <td>
            <img src="img/<?= $value["gambar"]; ?>" width="70" alt="">
          </td>
          <td><?= $value["nama"]; ?></td>
          <td><?= $value["nim"]; ?></td>
          <td><?= $value["email"]; ?></td>
          <td><?= $value["jurusan"]; ?></td>
        </tr>
        <?php $i++; ?>
      <?php endforeach; ?>
    </table>
  </div>
</body>

</html>