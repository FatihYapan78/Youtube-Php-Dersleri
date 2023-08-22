<?php

include "connection.php";

    // $query = "SELECT * from course";
    $query = "SELECT id,baslik from course";


    $sonuc = mysqli_query($baglanti,$query);

    while($row = mysqli_fetch_row($sonuc)){
        echo $row[0]." ".$row[1];
        echo "<br/>";
    };

    echo "<hr/>";

    $sonuc = mysqli_query($baglanti,$query);

    while($row = mysqli_fetch_assoc($sonuc)){
        echo $row["id"]." ".$row["baslik"];
        echo "<br/>";
    };






mysqli_close($baglanti);

?>