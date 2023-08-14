<?php
    // Numeric Arrays
    // $renkler = array("kırmızı","mavi","sarı");
    // echo gettype($renkler)."<br/>";
    // echo $renkler[0]."<br/>";
    // echo $renkler[1]."<br/>";
    // echo $renkler[2]."<br/>";

    // Associative Arrays (key-value)
    // $plakalar = array(
    //     "41"=>"Kocaeli",
    //     "06"=>"Ankara",
    //     "34"=>"İstanbul",
    //     "78"=>"Karabük"
    // );
    // echo $plakalar["41"]."<br/>";
    // echo $plakalar["78"]."<br/>";

    // Çok Boyutlu Diziler
    // $ogrenci1 = array("Hakan Yılmaz",array(45,43,78));

    // echo $ogrenci1[1][1];
    // $sınıf = array(
    //     "78"=>array(
    //         "ad"=>"Fatih",
    //         "soyad"=>"Yapan",
    //         "notlar"=>array(
    //             "MatNot"=>array(50,43,12),
    //             "FizNot"=>array(52,33,11),
    //             "FenNot"=>array(90,53,13),
    //         )
    //     )
    //         );
    // echo $sınıf["78"]["notlar"]["MatNot"][0]."<br/>";
    // echo $sınıf["78"]["notlar"]["FizNot"][1]."<br/>";

    // Dizi Fonksiyonları
    $notlar = array(34,12,65,78,90,90);
    $plakalar = array(
            "41"=>"Kocaeli",
            "06"=>"Ankara",
            "34"=>"İstanbul",
            "78"=>"Karabük"
        );

    // array_push($notlar, 20); // elemanı sona eklemek
    // array_unshift($notlar, 10); // elemanı başa eklemek
    // $plakalar["07"] = "Antalya"; // elemanı sona eklemek
    // $new_eleman = array("67"=>"Zonguldak");
    // $plakalar = array_merge($new_eleman,$plakalar);
    // array_pop($notlar); // sondan eleman silmek 
    // array_shift($notlar); // baştan eleman silmek 
    // sıralama - artan
    // sort($notlar);
    // asort($plakalar); // value
    // ksort($plakalar); // key
    // sıralama - azalan
    // rsort($notlar);
    // arsort($plakalar); // value
    // krsort($plakalar); // key
    // string to array
        // $str = "Karabük,78";
        // $arr = explode(",",$str);
        // print_r($arr);
        // echo "<br/>";
    // array to string
        // $arr = array("fatih","yapan");
        // $str = implode($arr);
        // print_r($str);
        // echo "<br/>";
    // Eleman tekrar sayısını gösterir.
    // print_r(array_count_values($notlar));
    // key -value bilgisi yer değiştirme
    // print_r(array_flip($plakalar));
    // dizi içerisinden rastgele eleman seçmek
    // $index = array_rand($notlar,2);
    // echo $notlar[$index[0]]."<br/>";
    // echo $notlar[$index[1]]."<br/>";
    echo count($notlar)."<br/>"; // Eleman sayısını verir.
    echo count($plakalar)."<br/>"; // Eleman sayısını verir.
    print_r($notlar); // ekrana yazdırma
    echo "<br/>";
    print_r($plakalar);
?>