<?php
require 'function.php';

// jika tidak ada id di url
if (!isset($_GET['id_buku'])) {
  header("Location: index.php");
  exit;
}

// ambil id dari url
$id = $_GET['id_buku'];

// query buku berdasarkan id
$b = query("SELECT * FROM buku WHERE id_buku = $id");

// cek apakah tombol ubah sudah ditekan
if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
            alert('data berhasil diubah');
            document.location.href = 'index.php';
         </script>";
  } else {
    echo "data gagal diubah!";
  }
}

?>

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data Perpustakaan</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<div class="container">
  <!-- Content here -->
  <h3 style="text-align:center" class="tambah">Form tambah data perpustakaan</h3>

  <form action="" method="POST">
    
  <input type="hidden" name="id_buku" value="<?= $b['id_buku']; ?>">

  <div class="input-group mb-3">
  <input type="text" name="judul_buku" class="form-control" placeholder="Nama Buku" aria-label="Nama Buku" aria-describedby="basic-addon1" autofocus required value="<?= $b['judul_buku']; ?>">
</div>

<div class="input-group mb-3">
  <input type="text" name="pengarang_buku" class="form-control" placeholder="Nama Pengarang" aria-label="Nama Pengarang" aria-describedby="basic-addon2" required value="<?= $b['pengarang_buku']; ?>">
</div>

<div class="input-group mb-3">
  <input type="text"  name="gambar_buku" class="form-control" id="basic-url" placeholder="Gambar" aria-label="Gambar" aria-describedby="basic-addon3" required value="<?= $b['gambar_buku']; ?>">
</div>
<center><button type="submit" class="btn btn-warning" name="ubah"><h4>Ubah Data</h4></button></center>

</body>

</html>