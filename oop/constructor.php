<?php 



class Produk
{
  public $judul ,
         $penulis ,
         $penerbit ,
         $harga ;

  public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0){
      echo "Hello World!";
      $this->judul = $judul;
      $this->penulis = $penulis;
      $this->penerbit = $penerbit;
      $this->harga = $harga;

  }

  public function getLabel(){
    return "$this->penulis, $this->penerbit";

  }
}

// $produk1 = new Produk();
// $produk1->judul = "Naruto"; //menimpa data dari property
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2-> = "Uncharted";
// $produk2->tambahProperty = "Rahasia";
// var_dump($produk2->judul);

$produk1 = new Produk("Naruto", "Mashashi Kishimoto", "Shonen jump", 30000);
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000);
$produk3 = new Produk("Dragon Ball");

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game: " . $produk2->getLabel();
echo "<br>";
var_dump($produk3);




?>