<?php 
    require "libs/variables.php";
    require "libs/function.php";

?>

<?php

    if($_SERVER["REQUEST_METHOD"]=="POST"){

        $title = $_POST["title"];
        $subtitle = $_POST["subtitle"];
        $image = $_POST["image"];
        $dateAdd = $_POST["dateAdd"];

        kursEkle($kurslar, $title, $subtitle,$image,$dateAdd);
    }



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