<?php

/** 
 * poin 1
 * 
 *  - 1 || Buatlah sebuah kelas untuk memperbaiki kode yang sudah tersedia
 * 
 */
class Persegi
 {
     public $persegi;

    public function __construct($num)
    {
        $this->persegi=$num;
    }

    public function __toString()
    {
        return "\nRumus menghitung luas persegi adalah sisi^2";
    }

     public function luasPersegi()
     {
         $result=$this->persegi*$this->persegi;
         echo "Luas persegi dengan sisi {$this->persegi} cm adalah $result cm";
     }

     public static function deskripsi()
     {
         echo "\nPersegi merupakan bangun ruang yang memiliki panjang sisi yang sama";
     }
 }

 // Kode dibawah ini jangan dirubah
 
 $luas_persegi=new Persegi(3);

 $luas_persegi->luasPersegi(); // Luas persegi dengan sisi 3cm adalah 9cm

 echo $luas_persegi; // Rumus menghitung luas persegi adalah sisi^2

 $luas_persegi::deskripsi(); // Persegi merupakan bangun ruang yang memiliki panjang sisi yang sama.