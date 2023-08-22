<?php 
    require "libs/variables.php";
    require "libs/function.php";

    $kategori = fopen("kategoriler.json","r");
    $size = filesize("kategoriler.json");
    $kategori_data = json_decode(fread($kategori,$size),true);
    fclose($kategori);

    $kurs= fopen("kurslar.json","r");
    $size = filesize("kurslar.json");
    $kurs_data = json_decode(fread($kurs,$size),true);
    fclose($kurs);

    session_start();
    if(isset($_SESSION["message"])){
        echo "<div class='alert alert-danger mb-0 text-center'>".$_SESSION["message"]."</div>";
    }
    session_unset();
?>

<?php

    if($_SERVER["REQUEST_METHOD"]=="POST"){

        $title = $_POST["title"];
        $subtitle = $_POST["subtitle"];
        $image = $_POST["image"];
        $dateAdd = $_POST["dateAdd"];

        kursEkle($title, $subtitle, $image, $dateAdd);
        header("Location: index.php");
    };
?>




<?php include "partials/_header.php"?>
<?php include "partials/_navbar.php"?>

        <div class="container my-3">
           <div class="row">
            <div class="col-3">
                <?php include "partials/_kategoriler.php"?>
            </div>
            <div class="col-9">
                
                <?php include "partials/_title.php"?>
                <?php include "partials/_kurslar.php"?>
            
            </div>
           </div>
        </div>

        <?php include "partials/_footer.php"?>