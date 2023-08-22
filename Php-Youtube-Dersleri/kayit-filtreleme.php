<?php

include "connection.php";

    // $query = "SELECT * from course WHERE id=1";
    // $query = "SELECT * from course WHERE id>1";
    // $query = "SELECT * from course WHERE id>1 and id<5";
    // $query = "SELECT * from course WHERE baslik='Angular Kursu'";
    // $query = "SELECT * from course WHERE baslik like '%kurs%'";
    // $query = "SELECT * from course WHERE baslik like 'kurs%'";
    $query = "SELECT * from course WHERE baslik like '%kursu'";


    $sonuc = mysqli_query($baglanti,$query);

    while($satir = mysqli_fetch_assoc($sonuc)){
        echo $satir["id"]." ".$satir["baslik"];
        echo "<br/>";
    }



mysqli_close($baglanti);

?>