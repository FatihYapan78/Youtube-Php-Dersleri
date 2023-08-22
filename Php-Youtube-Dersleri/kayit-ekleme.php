<?php

include "connection.php";

    $query = "INSERT INTO course(baslik,altbaslik,resim,yayinTarihi,yorumSayisi,begeniSayisi,onay) VALUES('Angular Kursu','İleri seviye Angular Kursu','1.jpg','10/10/2023',10,25,1)";
    $query = "INSERT INTO course(baslik,altbaslik,resim,yayinTarihi,yorumSayisi,begeniSayisi,onay) VALUES('Angular Kursu','İleri seviye Angular Kursu','1.jpg','10/10/2023',10,25,1)";

    // $sonuc = mysqli_query($baglanti,$query);
    $sonuc = mysqli_multi_query($baglanti,$query);

    if($sonuc){
        echo "veri eklendi";
    }
    else{
        echo 'veri eklenemedi.';
    }





mysqli_close($baglanti);

?>