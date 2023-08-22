<?php

include "connection.php";

    // $query = "UPDATE course SET baslik='React Kursu' WHERE id=1";
    $query = "UPDATE course SET onay=1 WHERE onay=0";


    $sonuc = mysqli_query($baglanti,$query);

    if($sonuc){
        echo "veri güncellendi";
    }
    else{
        echo "veri güncellenemedi";
    }




mysqli_close($baglanti);

?>