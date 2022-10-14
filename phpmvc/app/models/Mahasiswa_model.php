<?php 

class Mahasiswa_model {
    private $mhs = [
      [
            "nama" => "Priyandi Zembar Azizi",
            "nrp"=> "203040070",
            "email" => "203040070@mail.unpas.ac.id",
            "jurusan" => "Teknik Informatika"
      ],
      [
            "nama" => "Farhat Abdurahman",
            "nrp"=> "203040060",
            "email" => "203040060@mail.unpas.ac.id",
            "jurusan" => "Teknik Informatika"
       ],
       [
            "nama" => "Hifki Yuda",
            "nrp"=> "203040072",
            "email" => "203040071@mail.unpas.ac.id",
            "jurusan" => "Teknik Informatika"
       ],
      ];

      public function getAllMahasiswa(){
        return $this->mhs;
      }
}