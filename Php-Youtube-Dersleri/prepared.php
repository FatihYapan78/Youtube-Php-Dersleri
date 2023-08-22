<?php

include "connection.php";

    $baslik = "Angular Kursu";
    $altbaslik = "İleri seviye Angular Kursu";
    $resim = "1.jpg";
    $tarih = "10/12/2023";
    $begeni = 10;
    $yorum = 10;
    $onay = 1;



    $query = "INSERT INTO course(baslik,altbaslik,resim,yayinTarihi,yorumSayisi,begeniSayisi,onay) VALUES(?,?,?,?,?,?,?)";

    $stmt = mysqli_prepare($baglanti,$query);

    mysqli_stmt_bind_param($stmt,'ssssiii', $baslik,$altbaslik,$resim,$tarih,$begeni,$yorum,$onay);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    echo "veri eklendi";




mysqli_close($baglanti);

?>