<?php

/*
string : metin
int : tam sayı
double : ondalıklı sayı
boolean : true / false
object : nesne 
array : dizi
null : değer içermeyen bilgi
*/

$urunAdi = "Samsung Galaxy s22 Ultra";

echo $urunAdi." ".gettype($urunAdi);

echo "<br/>";

$urunFiyat = 20000;

echo $urunFiyat." ".gettype($urunFiyat);

echo "<br/>";

$ötv = 2.5;

echo $ötv." ".gettype($ötv);
echo "<br/>";
$stokdurumu = false;

echo $stokdurumu." ".gettype($stokdurumu);

// Veri Tipi Değiştirme
echo "<br/>";
$urunFiyat = (string)20000;

echo $urunFiyat." ".gettype($urunFiyat);

echo "<br/>";
$urunFiyat = (double)20000;

echo $urunFiyat." ".gettype($urunFiyat);

echo "<br/>";

$ötv = (int)2.5;

echo $ötv." ".gettype($ötv);
echo "<br/>";
$urunFiyat = (int)"20a000";

echo $urunFiyat." ".gettype($urunFiyat);

echo "<br/>";
$stokdurumu = (int)true;

echo $stokdurumu." ".gettype($stokdurumu);

?>