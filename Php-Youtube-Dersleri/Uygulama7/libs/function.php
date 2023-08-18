<?php
function kursEkle(&$kurslar,string $baslik,string $altbaslik,string $resim,string $yayinTarihi,int $yorumSayisi=0,int $begeniSayisi=0,bool $onay=true){

    $yeniKurs[count($kurslar) + 1] = array(
        "baslik"=> $baslik,
        'altbaslik'=> $altbaslik,
        "resim"=> $resim,
        "yayinTarihi"=> $yayinTarihi,
        "yorumSayisi"=>$yorumSayisi,
        "begeniSayisi"=>$begeniSayisi,
        "onay"=>$onay
    );
    $kurslar = array_merge($kurslar, $yeniKurs);
}

function urlEkle($baslik){
    return str_replace([" "],["-"],strtolower($baslik));
}

function altBaslikKısaltma($altbaslik){
    if(strlen($altbaslik) > 50){
        return substr($altbaslik,0,50)."...";
    }
    else{
        return $altbaslik; 
    }
}
?>