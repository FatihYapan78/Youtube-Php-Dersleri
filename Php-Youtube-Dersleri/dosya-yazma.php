<?php

    $file = fopen("dosya2.txt","a+");

    $veri = "Java Dersleri\n";

    fwrite($file,$veri);

    fseek($file,0); // İmlecin konumunu belirler.

    while(!feof($file)){ // Dosyanın sonuna gelmediğin sürece oku.
        echo fgets($file)."<br/>"; 
    }

    fclose($file);







?>