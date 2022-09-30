
<?php
// Koneksi ke DB & Pilih Database
require 'function.php';
$buku = query("SELECT * FROM buku");

  // ketika tombol cari diklik
  if (isset($_POST['cari'])) {
    $buku = cari($_POST['keyword']);
  }
?>


 <!-- Bootstrap CSS -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BOOK STORE</title>
</head>

<body>
  <!-- judul -->
  <h1 >BOOK STORE</h1>

  <!-- code tambah -->
  <a href="tambah.php">Tambah Data Buku</a>
   <br><br>

   <!-- code cari -->
  <form action="" method="POST">
    <input type="text" name="keyword" size="40" placeholder="masukkan keyword pencarian.." autocomplete="off" autofocus>
    <button type="submit" name="cari">Cari!</button>
  </form>
  <br>

  <!-- tabel buku -->
  <table class="table table-dark table-striped">
  <thead>
    <tr> 
      <th scope="col">Id Buku</th>
      <th scope="col">Judul Buku</th>
      <th scope="col">Pengarang</th>
      <th scope="col">Gambar</th>
      <th scope="col">Option</th>
    </tr>
    </thead>

    <tbody>

    <!-- untuk memberikan informasi apabila data tidak ditemukan -->
    <?php if (empty($buku)) : ?>
      <tr>
        <td colspan="4">
          <p style="color: red; font-style: italic;">data buku tidak ditemukan!</p>
        </td>
      </tr>
    <?php endif; ?>

  <!-- mengambil data dari mysql -->
    <?php $i = 1;
    foreach ($buku as $b) : ?>
      <tr >

        <td scope="row"><?= $b['id_buku']; ?></td>
        <td ><?= $b['judul_buku']; ?></td>
        <td ><?= $b['pengarang_buku']; ?></td>
        <td ><img src="img/<?= $b['gambar_buku']; ?>" width="120"></td>
        <td>
                <a href="ubah.php?id_buku=<?= $b["id_buku"]; ?>"><button type="button" class="btn btn-warning">Ubah</button></a>
                <a href="hapus.php?id_buku=<?= $b["id_buku"]; ?>" onclick="return confirm('Apakah data akan dihapus??');"><button type="button" class="btn btn-danger" >Hapus</button></a>
    </td>
      </tr>
    <?php endforeach; ?>
    </tbody>
  </table>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
