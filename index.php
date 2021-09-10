<?php
require "functions.php";
$mahasiswa = query("SELECT * FROM mahasiswa");

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

    <table border="1" cellpadding="10" cellspacing="0" style="margin: auto;">
      <tr>
        <th>No</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
      </tr>
      <?php $i = 1; ?>
      <?php foreach ($mahasiswa as $key => $value) : ?>
        <tr>
          <td><?= $i; ?></td>
          <td>
            <a href="">Ubah</a> | <a href="">Hapus</a>
          </td>
          <td>
            <img src="img/<?= $value["gambar"]; ?>" width="70" alt="">
          </td>
          <td><?= $value["nim"]; ?></td>
          <td><?= $value["nama"]; ?></td>
          <td><?= $value["email"]; ?></td>
          <td><?= $value["jurusan"]; ?></td>
        </tr>
        <?php $i++; ?>
      <?php endforeach; ?>
    </table>
  </div>
</body>

</html>