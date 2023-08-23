<?php
     require "libs/variables.php";
     require "libs/function.php";

     session_start();
     $id = $_GET["id"];
     $sonuc = getId($id);
     $secilenKategori = mysqli_fetch_assoc($sonuc);

     if(KategoriSil($id)){
        $_SESSION["message"] = $secilenKategori["kategoriAdi"]." isimli kategori silindi.";
        $_SESSION["type"] = "danger";
        header("Location: categories.php");
    }
    else{
        echo "hata";
    }

?>