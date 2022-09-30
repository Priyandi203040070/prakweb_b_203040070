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
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah data Perpustakaan</title>
  <style>
    form {
      text-align: left;
    }
  </style>
</head>

<body>
  <h3>Form tambah data perpustakaan</h3>
  <form action="" method="POST">
    <ul>
      <li>
        <label>
          Judul :
          <input type="text" name="judul_buku" autofocus required>
        </label>
      </li>
      <br></br>
      <li>
        <label>
          Nama Pengarang :
          <input type="text" name="pengarang_buku" required>
        </label>
      </li>
      <br></br>
      <li>
        <label>
          Gambar :
          <input type="text" name="gambar_buku" required>
        </label>
      </li>
      <br></br>
      <li>
        <button type="submit" name="tambah">Tambah Data!</button>
      </li>
    </ul>
  </form>
</body>

</html>