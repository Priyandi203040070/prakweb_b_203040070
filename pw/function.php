<?php
/*
Priyandi Zembar Azizi
203040070
https://github.com/Andip29/pw2021_203040070
Pertemuan 10 - (22 APRIL 2021)
Materi pertemuan 10 mempelajari mengenai koneksi database dan insert data 
*/
?>
<?php

function koneksi()
{
  return  mysqli_connect('localhost', 'root', '', 'prakweb_2022_b_203040070');
}

function query($query)
{
  $conn = koneksi();
  $result = mysqli_query($conn, $query);

  // jika hasilnya 1 data
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

// function tambah
function tambah($data)
{
  $conn = koneksi();


  $judul = htmlspecialchars($data['judul_buku']);
  $pengarang = htmlspecialchars($data['pengarang_buku']);
  $gambar = htmlspecialchars($data['gambar_buku']);

  $query = "INSERT INTO
                buku
            VALUES
            (null, '$judul', '$pengarang', '$gambar');
          ";
  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

function hapus($id)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM buku WHERE id_buku = $id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function ubah($data)
{
  $conn = koneksi();

  $id = $data['id_buku'];
  $judul = htmlspecialchars($data['judul_buku']);
  $pengarang = htmlspecialchars($data['pengarang_buku']);
  $gambar = htmlspecialchars($data['gambar_buku']);

  $query = "UPDATE buku SET
              judul_buku = '$judul',
              pengarang_buku = '$pengarang',
              gambar_buku = '$gambar'
            WHERE id_buku = $id";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}


function cari($keyword)
{
  $conn = koneksi();

  $query = "SELECT * FROM buku
              WHERE 
            judul_buku LIKE '%$keyword%' OR
            pengarang_buku LIKE '%$keyword%'
          ";

  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}