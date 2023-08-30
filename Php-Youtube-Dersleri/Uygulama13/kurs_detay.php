            
<?php 
    require "libs/variables.php";
    require "libs/function.php";
    session_start();
?>


<?php if(!isset($_GET["id"]) && !is_numeric($_GET["id"])){
                header("Location: index.php");
            }

            $sonuc = getKursId($_GET["id"]);
            $kurs = mysqli_fetch_assoc($sonuc);
    ?>
            
            
<?php include "partials/_header.php"?>
<?php include "partials/_navbar.php"?>
            
            

        <div class="container my-3">
           <div class="row">
                <div class="col-4">
                    <img src="img/<?php echo $kurs["resim"]?>" class="img-fluid">
                </div>
                <div class="col-8">
                    <h4><?php echo $kurs["baslik"]?></h4>
                    <p><?php echo $kurs["altbaslik"]?></p>
                    <hr>
                    <p><?php echo htmlspecialchars_decode($kurs["aciklama"]) ?></p>
                </div>
           </div>
        </div>

        <?php include "partials/_footer.php"?>