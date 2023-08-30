<?php
     require "libs/variables.php";
     require "libs/function.php";

     session_start();
     $id = $_GET["id"];
     $sonuc = getKursId($id);
     $secilenKurs = mysqli_fetch_assoc($sonuc);

     if(KursSil($id)){
        $_SESSION["message"] = $secilenKurs["baslik"]." isimli kurs silindi.";
        $_SESSION["type"] = "danger";
        header("Location: kurslar.php");
    }
    else{
        echo "hata";
    }

?>