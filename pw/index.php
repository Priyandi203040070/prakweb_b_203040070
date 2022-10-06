
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
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

  <!-- Navbar -->
<div class="collapse" id="navbarToggleExternalContent">
  <div class="bg-dark p-4">
    <h5 class="text-white h4">Collapsed content</h5>
    <span class="text-muted">Toggleable via the navbar brand.</span>
  </div>
</div>
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>

<div class="container-sm">  
  
  <!-- judul -->
  <h1 >BOOK STORE</h1>
  

<div>
   <!-- code cari -->
  <form class="row g-3" action="" method="POST">
  <div class="col-auto">
  <input type="text" class="form-control" name="keyword" size="40" placeholder="masukkan keyword pencarian.." autocomplete="off" autofocus>
  </div>
  <div class="col-auto">
  <button class="btn btn-primary" type="submit" name="cari">Cari!</button>
  </div>
  <!-- code tambah -->
  <div style="text-align:right;" class="col-auto">
  <a style="element:right"class="btn btn-success" href="tambah.php" role="button">Tambah Data Buku</a>
  </div>

  </form>
  
    </div>
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
    </div>
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
