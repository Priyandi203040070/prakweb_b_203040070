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
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data Perpustakaan</title>
</head>

<body>
  <h3>Form Ubah Data Perpustakaan</h3>
  <form action="" method="POST">
    <input type="hidden" name="id_buku" value="<?= $b['id_buku']; ?>">
    <ul>
      <li>
        <label>
          Judul :
          <input type="text" name="judul_buku" autofocus required value="<?= $b['judul_buku']; ?>">
        </label>
      </li>
      <li>
        <label>
          Pengarang :
          <input type="text" name="pengarang_buku" required value="<?= $b['pengarang_buku']; ?>">
        </label>
      </li>
      <li>
        <label>
          Gambar :
          <input type="text" name="gambar_buku" required value="<?= $b['gambar_buku']; ?>">
        </label>
      </li>
      <li>
        <button type="submit" name="ubah">Ubah Data!</button>
      </li>
    </ul>
  </form>
</body>

</html>