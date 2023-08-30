<?php 
    require "libs/variables.php";
    require "libs/function.php";

?>

<?php include "partials/_header.php"?>
<?php include "partials/_navbar.php"?>

<?php
session_start();
    $baslik = $baslikError =  "";
    $altbaslik = $altbaslikError =  "";
    $resim = $resimError =  "";
    $aciklama = $aciklamaError =  "";
    
    if($_SERVER["REQUEST_METHOD"]== "POST"){

        if(empty($_POST["baslik"])){
            $baslikError = "baslik Adı Alanı Zorunludur.";
        }
        else{
            $baslik = form_control($_POST["baslik"]);
        }
        if(empty($_POST["altbaslik"])){
            $altbaslikError = "altbaslik Adı Alanı Zorunludur.";
        }
        else{
            $altbaslik = form_control($_POST["altbaslik"]);
        }
        if(empty($_POST["aciklama"])){
            $aciklamaError = "aciklama Adı Alanı Zorunludur.";
        }
        else{
            $aciklama = form_control($_POST["aciklama"]);
        }
        if(empty($_FILES["resim"]["name"])){
            $resimError = "Kategori Adı Alanı Zorunludur.";
        }
        else{
            ResimYükle($_FILES["resim"]);
            $resim = $_FILES["resim"]["name"];
        }

        if(empty($baslikError) && empty($altbaslikError) && empty($resimError) && empty($aciklamaError)){
            KursEkle($baslik,$altbaslik,$aciklama,$resim);
            $_SESSION["message"] = $baslik." isimli kategori eklendi.";
            $_SESSION["type"] = "success";
            header("Location: kurslar.php");
        }

    }

?>

        <div class="container my-3">
           <div class="row">
            <div class="col-12">
            <form method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="baslik">Başlık</label>
                        <input type="text" name="baslik" class="form-control" value="<?php echo $baslik?>">
                        <div class="text-danger"><?php echo $baslikError?></div>
                    </div>
                    <div class="mb-3">
                        <label for="altbaslik">Alt Başlık</label>
                        <input type="text" name="altbaslik" class="form-control" value="<?php echo $altbaslik?>">
                        <div class="text-danger"><?php echo $altbaslikError?></div>
                    </div>
                    <div class="mb-3">
                        <label for="aciklama">Açıklama</label>
                        <textarea type="text" name="aciklama" class="form-control"><?php echo $aciklama?></textarea>
                        <div class="text-danger"><?php echo $aciklamaError?>
                    </div>
                    </div>
                    <div class="mb-3">
                        <label for="resim">Resim</label>
                        <input type="file" name="resim" class="form-control" value="<?php echo $resim?>">
                        <div class="text-danger"><?php echo $resimError?></div>
                    </div>

                    <button class="btn btn-dark" type="submit">Kaydet</button>
                </form>
            </div>

           </div>
        </div>

        <?php include "partials/_editor.php"?>
        <?php include "partials/_footer.php"?>