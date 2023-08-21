<?php
/*
    fopen("dosya_ismi","dosya açma modu");

    dosya açma modları:

    r  : Dosya okuma modunda açılır. İmleç dosyanın başında yer alır.
    w  : Dosya yazma modunda açılır. İmleç dosyanın başında yer alır. Dosya konumdaysa içindeki tüm veriler silinir. Dosya konumda yoksa oluşturur.
    a  : Dosya yazma modunda açılır. İmleç dosya sonundadır. Dosyaya ekleme yapılır. Dosya konumda yoksa oluşturur.
    x  : Dosya yazma modunda açılır. Dosya yoksa oluşturulur, varsa False döner.

    r+ : Dosya okuma ve yazma modunda açılır. İmleç dosyanın başında yer alır.
    w+ : Dosya okuma ve yazma modunda açılır. İmleç dosyanın başında yer alır. Dosya konumdaysa içindeki tüm veriler silinir. 
    a+ : Dosya yazma ve okuma modunda açılır. İmleç dosya sonundadır. Dosyaya ekleme yapılır. Dosya konumda yoksa oluşturur.
    x+ : Dosya okuma ve yazma modunda açılır. Dosya yoksa oluşturulur, varsa False döner.

*/

    $file = fopen("dosya.txt","r"); // Dosyayı okuma modunda açar.
    $size = filesize("dosya.txt"); // Dosyanın boyutunu verir.
    // echo fread($file,$size); // Ekrana yazdırır.

    // echo fgets($file);
    // echo fgets($file);

    while(!feof($file)){ // Dosyanın sonuna gelmediğin sürece oku.
        echo fgets($file); 
    }

    fclose($file); // Dosyayı kapatmak.

?>