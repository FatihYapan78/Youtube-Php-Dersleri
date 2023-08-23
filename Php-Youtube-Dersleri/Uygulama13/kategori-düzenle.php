<?php 
    require "libs/variables.php";
    require "libs/function.php";

?>

<?php include "partials/_header.php"?>
<?php include "partials/_navbar.php"?>

<?php
session_start();
    $id = $_GET["id"];
    $sonuc = getId($id);
    $secilenKategori = mysqli_fetch_assoc($sonuc);
    $kategori = $kategoriError =  "";
    
    if($_SERVER["REQUEST_METHOD"]== "POST"){

        if(empty($_POST["kategori"])){
            $kategoriError = "Kategori Adı Alanı Zorunludur.";
        }
        else{
            $kategori = form_control($_POST["kategori"]);
        }

        if(empty($kategoriError)){
            KategoriDüzenle($id,$kategori);
            $_SESSION["message"] = $kategori." isimli kategori düzenlendi.";
            $_SESSION["type"] = "success";
            header("Location: categories.php");
        }

    }

?>

        <div class="container my-3">
           <div class="row">
            <div class="col-12">
            <form method="post">
                    <div class="mb-3">
                        <label for="kategori">Kategori Adı</label>
                        <input type="text" name="kategori" class="form-control" value="<?php echo $secilenKategori["kategoriAdi"]?>">
                        <div class="text-danger"><?php echo $kategoriError?></div>
                    </div>

                    <button class="btn btn-dark" type="submit">Kaydet</button>
                </form>
            </div>

           </div>
        </div>

        <?php include "partials/_footer.php"?>