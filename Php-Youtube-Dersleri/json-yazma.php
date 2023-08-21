<?php

    $kurslar = array(
        "title"=>"php kursu",
        "aciklama"=>"ileri seviye php kursu",
        "image"=>"2.jpg"
    );

    // array to string => encode
    $jsonstring = json_encode($kurslar, JSON_PRETTY_PRINT);

    $file = fopen("course2.json","w");
    fwrite($file, $jsonstring);
    fclose($file);




?>