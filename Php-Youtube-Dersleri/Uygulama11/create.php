<?php 
    require "libs/variables.php";
    require "libs/function.php";

?>

<?php include "partials/_header.php"?>
<?php include "partials/_navbar.php"?>

        <div class="container my-3">
           <div class="row">
            <div class="col-12">
                <form action="index.php" method="post">
                    <div class="mb-3">
                        <label for="title">Başlık</label>
                        <input type="text" name="title" id="title" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="subtitle">AltBaşlık</label>
                        <input type="text" name="subtitle" id="subtitle" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="image">Resim</label>
                        <input type="text" name="image" id="image" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="dateAdd">Eklenme Tarihi</label>
                        <input type="text" name="dateAdd" id="dateAdd" class="form-control">
                    </div>
                    <button class="btn btn-dark" type="submit">Kaydet</button>
                </form>
            </div>

           </div>
        </div>

        <?php include "partials/_footer.php"?>