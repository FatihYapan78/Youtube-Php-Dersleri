<?php
function isLoggedIn(){
    return (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] == true);
}

function isAdmin(){
    return (isLoggedIn() && isset($_SESSION["user_type"]) && $_SESSION["user_type"] == "admin");
}


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

function KursFiltreleme($categoryId,$keyword,$page){
    include "connection.php";

    $pagekurscount = 2;
    $offset = ($page - 1) * $pagekurscount; // 2 * 2 => 4
    $query = "";
    if(!empty($categoryId)){
        $query = "from course_category k INNER JOIN course c ON k.kurs_id = c.id WHERE k.kategori_id = $categoryId";
    }
    else{
        $query = "FROM course WHERE onay=1";
    }

    if(!empty($keyword)){
        $query .= " and baslik LIKE '%$keyword%' or altbaslik LIKE '%$keyword%'";
    }

    $toplamkurs = "SELECT COUNT(*)".$query;
    $count_data = mysqli_query($baglanti,$toplamkurs);
    $count = mysqli_fetch_array($count_data)[0];
    $toplamSayfa = ceil($count / $pagekurscount);

    $sql = "SELECT *".$query." LIMIT $offset, $pagekurscount";

    $sonuc = mysqli_query($baglanti,$sql);
    mysqli_close($baglanti);
    return array(
        "toplamSayfa" => $toplamSayfa,
        "data" => $sonuc,
    );
}

function KategoriGetirKursId($courseId){
    include "connection.php";

    $query = "SELECT * from course_category k INNER JOIN category c ON k.Kategori_id = c.id WHERE k.kurs_id = $courseId";
    $sonuc = mysqli_query($baglanti,$query);
    mysqli_close($baglanti);
    return $sonuc;
}

function KursGetirKategoriId($kategoriId){
    include "connection.php";

    $query = "SELECT * from course_category k INNER JOIN course c ON k.kurs_id = c.id WHERE k.kategori_id = $kategoriId";
    $sonuc = mysqli_query($baglanti,$query);
    mysqli_close($baglanti);
    return $sonuc;
}

function KursEkle(string $baslik,string $altbaslik,string $aciklama,string $resim,$yorumSayisi=0,$begeniSayisi=0,$onay=1){
    include "connection.php";

    $query = "INSERT INTO course(baslik,altbaslik,aciklama,resim,yorumSayisi,begeniSayisi,onay) VALUES (?,?,?,?,?,?,?)";
    $stmt = mysqli_prepare($baglanti,$query);
    mysqli_stmt_bind_param($stmt,"ssssiii",$baslik,$altbaslik,$aciklama,$resim,$yorumSayisi,$begeniSayisi,$onay);
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

function KursDüzenle(int $id,string $baslik,string $altbaslik,string $aciklama, string $resim,int $onay){
    include "connection.php";

    $query = "UPDATE course SET baslik='$baslik',altbaslik='$altbaslik',aciklama='$aciklama', resim='$resim',onay=$onay WHERE id=$id";
    $sonuc = mysqli_query($baglanti,$query);
    mysqli_close($baglanti);
    return $sonuc;
}

function KursKategoriSil($id){
    include "connection.php";

    $query = "DELETE FROM course_category WHERE kurs_id=$id";
    $sonuc = mysqli_query($baglanti,$query);
    mysqli_close($baglanti);
    return $sonuc;
}

function KursKategoriEkle(int $id,array $kategoriler){
    include "connection.php";
    $query = "";
    foreach($kategoriler as $kategori){
        $query .= "INSERT INTO course_category(kurs_id,kategori_id) VALUES ($id,$kategori);";
    }
    $sonuc = mysqli_multi_query($baglanti,$query);
    mysqli_close($baglanti);
    return $sonuc;
}

function KursSil(int $id){
    include "connection.php";

    $query = "DELETE FROM course WHERE id=$id";
    $sonuc = mysqli_query($baglanti,$query);
    mysqli_close($baglanti);
    return $sonuc;
}

function KursGetirKeyword($q){

    include "connection.php";

    $query = "SELECT * from course WHERE baslik LIKE '%$q%' or altbaslik LIKE '%$q%'";
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