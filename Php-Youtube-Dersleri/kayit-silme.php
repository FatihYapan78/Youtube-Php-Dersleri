<?php

include "connection.php";

    // $query = "DELETE FROM course WHERE id=5";
    $query = "DELETE FROM course WHERE baslik='Angular Kursu'";


    $sonuc = mysqli_query($baglanti,$query);
    $adet = mysqli_affected_rows($baglanti);

    if($sonuc){
        echo "veri silindi: ".$adet;
    }
    else{
        echo "veri silinemedi";
    }




mysqli_close($baglanti);

?>