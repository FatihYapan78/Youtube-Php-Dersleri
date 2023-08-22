<?php
function kursEkle(string $baslik,string $altbaslik,string $resim,string $yayinTarihi,int $yorumSayisi=0,int $begeniSayisi=0,bool $onay=true){

    global $kurs_data;

    $kurs_data[count($kurs_data) + 1] = array(
        "baslik"=> $baslik,
        'altbaslik'=> $altbaslik,
        "resim"=> $resim,
        "yayinTarihi"=> $yayinTarihi,
        "yorumSayisi"=>$yorumSayisi,
        "begeniSayisi"=>$begeniSayisi,
        "onay"=>$onay
    );

    $myfile = fopen("kurslar.json","w");
    fwrite($myfile, json_encode($kurs_data, JSON_PRETTY_PRINT));
    fclose($myfile);
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


function form_control($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>