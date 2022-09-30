<?php
require 'function.php';

// jika tidak ada id di url
if (!isset($_GET['id_buku'])) {
  header("Location: index.php");
  exit;
}

// mengambil id dari url
$id = $_GET['id_buku'];

if (hapus($id) > 0) {
  echo "<script>
          alert('data berhasil dihapus');
          document.location.href = 'index.php';
       </script>";
} else {
  echo "data gagal dihapus!";
}