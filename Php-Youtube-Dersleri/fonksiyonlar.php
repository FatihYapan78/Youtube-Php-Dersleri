<?php

    // Fonksiyon Tanımlama
    // function youtube(){
    //     echo "İlk Fonksiyonumuz";
    // }
    // youtube();
    // Fonksiyonda Değer Döndürme
    // function degerDondur(){
    //     return 20 + 30;
    // }
    // echo degerDondur();
    // Fonksiyona Parametre Gönderme
    // function parametre($dogumTarihi){
    //     return 2023 - $dogumTarihi;
    // }
    // echo parametre(1997);
    // function toplama($sayi,$sayi2){
    //     return $sayi + $sayi2;
    // }
    // echo toplama(20,30);
    // UYGULAMA
    # 1- Kendisine gönderilen bir kelimeyi belirtilen kez ekranda gösteren fonksiyonu yazınız.
    // function kelimeYaz($kelime,$adet){
    //     for($i=0; $i<$adet;$i++){
    //         echo $kelime."<br/>";
    //     }
    // }
    // kelimeYaz("Fatih",20);
    # 2- Dikdörtgenin alan ve çevresini hesaplayan fonksiyonu yazınız.
    // function Hesapla($uzun,$kısa){
    //     echo "Alan : ".$uzun * $kısa;
    //     echo "Çevre : ".($uzun + $kısa)*2;
    // }
    // Hesapla(10,30);
    # 3- Yazı tura uygulamasını fonksiyon kullanarak yapınız.
    // function yaziTura(){
    //     $sonuc = rand(0,100);
    //     if($sonuc < 50){
    //         echo "Yazı";
    //     }
    //     else{
    //         echo "Tura";
    //     }
    // }
    // yaziTura();
    # 4- Kendisine gönderilen bir sayının tam bölenlerini bir diziyle döndüren fonksiyonu yazınız.
    // function tamBolen($sayi){
    //     $tamBolenSAyilar = array();
    //     for($i=1;$i<=$sayi;$i++){
    //         if($sayi % $i == 0){
    //             array_push($tamBolenSAyilar,$i);
    //         }
    //     }
    //     return $tamBolenSAyilar;
    // }

    // print_r(tamBolen(250));

    // Default Parametre Atamak
        // function test($isim="fatih",$soyisim="yapan"){
        //     echo $isim.$soyisim;
        // }

        // test("faruk","yılmaz");
    // Değişken Sayıda Parametre Alan Fonksiyon
        
        // function test(...$sayilar){
        //     $toplam = 0;
        //     foreach($sayilar as $sayi){
        //         $toplam += $sayi;
        //     }
        //     echo $toplam;
        // }
        // test(10,20,30,40,50);
    // Fonksiyonlarda Scope
    // global scope
    // local scope
        
        // $x = 5;

        // echo $x;

        // function test(){
        //     local scope
        //     $GLOBALS["x"] = 10;
        //     global $x;
        //     echo $x;
        // }
        // test();
        // echo $x;
    // Referans ve Value Değerler
    // reference
    // value
        // function test(&$sayi){
        //     $sayi+=10;
        //     echo $sayi;
        // }
        // $ornekSayi = 10;
        // test($ornekSayi);
        // echo $ornekSayi;
    
    // 213213 => ornekSayi = 20


    // Tanımsız Parametre Göndermek

    // function test(){
    //     $parametreSayisi = func_num_args();
    //     if($parametreSayisi == 0){
    //         echo "Parametre Yok";
    //     }
    //     else{
    //         $parametreler = func_get_args();
    //         foreach($parametreler as $parametre){
    //             echo $parametre;
    //         }
    //     }
    // }
    // test("fatih","yapan","karabük");
    // Parametre Veri Tipleri
    declare(strict_types=1);
    function test(int $sayi1,int $sayi2): int{
        return $sayi1 + $sayi2;
    }

    echo test(10,20);
?>