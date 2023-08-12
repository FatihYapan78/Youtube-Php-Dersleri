<?php
    $ad = "Fatih";
    $soyad = "Yapan";

    echo $ad." ".$soyad;
    echo "<br/>";
    $maas = 25000;
    $vergiorani = 0.33;
    echo $maas - ($maas * $vergiorani);
    echo "<br/>";
    $sayi1 = 100;
    $sayi2 = 75;

    echo $sayi1."<br/>".$sayi2;
    // Tek satırlık yorum satırı
    /*
    Çoklu satır yorum satırı
    */
    // $sayi 1 = 60; Değişken isimlerinde boşluk olamaz
    // $1sayi = 60; Değişken isimleri rakam ile başlayamaz.
    // $Sayi1 = 150; Değişken isimleri büyük küçük harf duyarlıdır.
    // $Sayaç1 = 150; Değişken isimlerinde türkçe karakter kullanılmaz.
    echo "<br/>";
    echo $sayi1."<br/>".$sayi2;
?>