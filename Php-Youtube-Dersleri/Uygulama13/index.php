<?php 
    require "libs/variables.php";
    require "libs/function.php";
    session_start();

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