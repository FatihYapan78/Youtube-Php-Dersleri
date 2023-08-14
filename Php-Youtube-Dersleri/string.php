<?php

    $ad = "Fatih";
    $soyad = "Yapan";

    echo $ad.$soyad;
    echo "<br/>";
    $mesaj = "Benim adım ".$ad." soyadım ".$soyad;
    echo $mesaj;
    echo "<br/>";
    $mesaj = "benim adım {$ad} soyadım {$soyad}";
    echo $mesaj;
    echo "<br/>";
    echo $mesaj[0];
    echo "<br/>";
    echo $mesaj[6];

    // String metodları
    echo "<br/>";
    echo strlen($mesaj);
    echo "<br/>";
    echo str_word_count($mesaj);
    echo "<br/>";
    echo ucfirst($mesaj);
    echo "<br/>";
    echo str_replace("Fatih","Faruk",$mesaj);
    echo "<br/>";
    echo str_replace(["Fatih","Yapan"],["Faruk","Yaban"],$mesaj);
    echo "<br/>";
    echo strtolower($mesaj);
    echo "<br/>";
    echo strtoupper($mesaj);


?>