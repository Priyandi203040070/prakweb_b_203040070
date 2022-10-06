<?php
require 'function.php';

// cek apakah tombol tambah sudah ditekan
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
            alert('data BERHASIL ditambahkan');
            document.location.href = 'index.php';
         </script>";
  } else {
    echo "data GAGAL ditambahkan!";
  }
}


?>

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah data Perpustakaan</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
    form {
      text-align: left;
    }
  </style>
</head>

<body>
<div class="container">
  <!-- Content here -->
  <h3 style="text-align:center" class="tambah">Form tambah data perpustakaan</h3>

  <form action="" method="POST">
  <div class="input-group mb-3">
  <input type="text" name="judul_buku" class="form-control" placeholder="Nama Buku" aria-label="Nama Buku" aria-describedby="basic-addon1" autofocus required>
</div>

<div class="input-group mb-3">
  <input type="text" name="pengarang_buku" class="form-control" placeholder="Nama Pengarang" aria-label="Nama Pengarang" aria-describedby="basic-addon2" required>
</div>

<div class="input-group mb-3">
  <input type="text"  name="gambar_buku" class="form-control" id="basic-url" placeholder="Gambar" aria-label="Gambar" aria-describedby="basic-addon3" required>
</div>
<center><button type="submit" class="btn btn-warning" name="tambah"><h4>Tambah Data</h4></button></center>

</form>
  </div>
  
</body>

</html>