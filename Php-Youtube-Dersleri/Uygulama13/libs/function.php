<?php

function KategoriGetir(){
    include "connection.php";

    $query = "SELECT * from category";
    $sonuc = mysqli_query($baglanti,$query);
    mysqli_close($baglanti);
    return $sonuc;
}


function getId(int $id){
    include "connection.php";

    $query = "SELECT * from category WHERE id=$id";
    $sonuc = mysqli_query($baglanti,$query);
    mysqli_close($baglanti);
    return $sonuc;
}

function KategoriDüzenle(int $id,string $kategori){
    include "connection.php";

    $query = "UPDATE category SET kategoriAdi='$kategori' WHERE id=$id";
    $sonuc = mysqli_query($baglanti,$query);
    mysqli_close($baglanti);
    return $sonuc;
}

function KategoriSil(int $id){
    include "connection.php";

    $query = "DELETE FROM category WHERE id=$id";
    $sonuc = mysqli_query($baglanti,$query);
    mysqli_close($baglanti);
    return $sonuc;
}

function KategoriEkle (string $kategori){
    include "connection.php";

    $query = "INSERT INTO category(kategoriAdi) VALUES (?)";
    $stmt = mysqli_prepare($baglanti,$query);
    mysqli_stmt_bind_param($stmt,"s",$kategori);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    return $stmt;
}

function getKursId(int $id){
    include "connection.php";

    $query = "SELECT * from course WHERE id=$id";
    $sonuc = mysqli_query($baglanti,$query);
    mysqli_close($baglanti);
    return $sonuc;
}

function KursGetir(){
    include "connection.php";

    $query = "SELECT * from course";
    $sonuc = mysqli_query($baglanti,$query);
    mysqli_close($baglanti);
    return $sonuc;
}

function KursEkle(string $baslik,string $altbaslik,string $resim,$yorumSayisi=0,$begeniSayisi=0,$onay=1){
    include "connection.php";

    $query = "INSERT INTO course(baslik,altbaslik,resim,yorumSayisi,begeniSayisi,onay) VALUES (?,?,?,?,?,?)";
    $stmt = mysqli_prepare($baglanti,$query);
    mysqli_stmt_bind_param($stmt,"sssiii",$baslik,$altbaslik, $resim,$yorumSayisi,$begeniSayisi,$onay);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    return $stmt;
}

function ResimYükle(array $file){
    if(isset($file)){
        $dest_path = "./img/";
        $filename = $file["name"];
        $fileSourcePath = $file["tmp_name"];
        $fileDestPath = $dest_path.$filename;

        move_uploaded_file($fileSourcePath,$fileDestPath);
    }
}

function KursDüzenle(int $id,string $baslik,string $altbaslik,string $resim,int $onay){
    include "connection.php";

    $query = "UPDATE course SET baslik='$baslik',altbaslik='$altbaslik',resim='$resim',onay=$onay WHERE id=$id";
    $sonuc = mysqli_query($baglanti,$query);
    mysqli_close($baglanti);
    return $sonuc;
}







// function kursEkle(string $baslik,string $altbaslik,string $resim,string $yayinTarihi,int $yorumSayisi=0,int $begeniSayisi=0,bool $onay=true){

//     global $kurs_data;

//     $kurs_data[count($kurs_data) + 1] = array(
//         "baslik"=> $baslik,
//         'altbaslik'=> $altbaslik,
//         "resim"=> $resim,
//         "yayinTarihi"=> $yayinTarihi,
//         "yorumSayisi"=>$yorumSayisi,
//         "begeniSayisi"=>$begeniSayisi,
//         "onay"=>$onay
//     );

//     $myfile = fopen("kurslar.json","w");
//     fwrite($myfile, json_encode($kurs_data, JSON_PRETTY_PRINT));
//     fclose($myfile);
// }

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