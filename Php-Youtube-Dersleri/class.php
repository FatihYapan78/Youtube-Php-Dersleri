<?php


    class Kisi {
        public $ad;
        public $soyad;
        public $yas;
    }

    $kisi1 = new Kisi();
    $kisi1->ad = "fatih";
    $kisi1->soyad = "yapan";
    $kisi1->yas = 26;

    $kisi2 = new Kisi();
    $kisi2->ad = "faruk";
    $kisi2->soyad = "yılmaz";
    $kisi2->yas = 24;

    // echo $kisi1->ad." ".$kisi1->soyad." ".$kisi1->yas;
    // echo $kisi2->ad." ".$kisi2->soyad." ".$kisi2->yas;

    $kisiler = [$kisi1,$kisi2];

    foreach($kisiler as $kisi){
        echo gettype($kisi);
        echo "<br/>";
        echo $kisi->ad." ".$kisi->soyad." ".$kisi->yas;
        echo "<br/>";
        var_dump($kisi instanceof Kisi);
    }



?>