<?php


    class Kisi{
        public $ad;
        public $soyad;

        protected function KisiYurur(){
            echo "{$this->ad} {$this->soyad} yürüyor.";
        }
    }
    $kisi = new Kisi();
    $kisi->ad= "fatih";
    $kisi->soyad= "yapan";
    echo $kisi->ad;
    echo $kisi->soyad;
    echo "<br/>";
    class Ogrenci extends Kisi{
        public $ogrNo;

        function OgrenciCalısır(){
            $this->KisiYurur();
            echo "<br/>";
            echo "{$this->ad} {$this->soyad} çalışır.";
        }
    }

    $ogrenci = new Ogrenci();
    $ogrenci->ad= "faruk";
    $ogrenci->soyad= "yapan";
    echo $ogrenci->ad;
    echo $ogrenci->soyad;
    echo "<br/>";
    echo $ogrenci->OgrenciCalısır();


?>