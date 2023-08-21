<?php

    $file = fopen("course.json","r");
    $size = filesize("course.json");

    // echo fread($file,$size)."<br/>";
    // echo gettype(fread($file,$size))."<br/>";

    $stringveri = fread($file,$size);
    // echo $stringveri["title"];

    // string to array => decode

    $array = json_decode($stringveri,true);

    echo $array["aciklama"];

    fclose($file);




?>