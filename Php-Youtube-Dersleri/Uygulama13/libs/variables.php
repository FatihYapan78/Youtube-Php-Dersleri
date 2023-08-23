<?php

const db_username = "fatih";
const db_password = "123";


$kategoriler = array(
    array("kategoriAdi"=>"Web Progralama","aktif"=>true),
    array("kategoriAdi"=>"Front-End","aktif"=>false),
    array("kategoriAdi"=>"Back-End","aktif"=>false),
    array("kategoriAdi"=>"Veri Analizi","aktif"=>false),
    array("kategoriAdi"=>"Mobil Uygulama","aktif"=>false),
);
// sort($kategoriler);

$sehirler = array(
    "34"=>"İstanbul",
    "78"=>"Karabük",
    "06"=>"Ankara",
    "07"=>"Antalya"
);

$hobiler = array(
    "1"=>"Sinema",
    "2"=>"Spor",
    "3"=>"Bilgisayar Oyunu"
);

$kurslar = array(
    "1"=>array(
        "baslik"=>"Php Kursu",
        'altbaslik'=>"Sıfırdan ileri seviye Php ile Web geliştirme kursu",
        "resim"=>"1.jpg",
        "yayinTarihi"=>"01.01.2023",
        "yorumSayisi"=>0,
        "begeniSayisi"=>5,
        "onay"=>true
    ),
    "2"=>array(
        "baslik"=>"Python Kursu",
        'altbaslik'=>"Sıfırdan ileri seviye Python programlama kursu",
        "resim"=>"2.jpg",
        "yayinTarihi"=>"02.02.2023",
        "yorumSayisi"=>10,
        "begeniSayisi"=>5,
        "onay"=>true
    ),
    "3"=>array(
        "baslik"=>"Node Js Kursu",
        'altbaslik'=>"Sıfırdan ileri seviye Node Js ile Web geliştirme kursu",
        "resim"=>"3.jpg",
        "yayinTarihi"=>"03.03.2023",
        "yorumSayisi"=>5,
        "begeniSayisi"=>15,
        "onay"=>true
    ),
    "4"=>array(
        "baslik"=>"Django Kursu",
        'altbaslik'=>"Sıfırdan ileri seviye Django ile Web geliştirme kursu",
        "resim"=>"1.jpg",
        "yayinTarihi"=>"05.06.2023",
        "yorumSayisi"=>20,
        "begeniSayisi"=>15,
        "onay"=>true
    )
    );
 // define("title","Popüler Kurslar");
 const title = "Popüler Kurslar";

 $keys = array_keys($kurslar);

?>