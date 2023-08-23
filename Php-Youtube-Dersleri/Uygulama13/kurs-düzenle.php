<?php 
    require "libs/variables.php";
    require "libs/function.php";

?>

<?php include "partials/_header.php"?>
<?php include "partials/_navbar.php"?>

<?php
session_start();
    $id = $_GET["id"];
    $sonuc = getKursId($id);
    $secilenKurs = mysqli_fetch_assoc($sonuc);
    $baslik = $baslikError =  "";
    $altbaslik = $altbaslikError =  "";
    $resim = $resimError =  "";
    $onay = $onayError =  "";
    
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
        if(empty($_FILES["resim"]["name"])){
            $resim = $secilenKurs["resim"];
        }
        else{
            ResimYükle($_FILES["resim"]);
            $resim = $_FILES["resim"]["name"];
        }
        if($_POST["onay"] == "on"){
            $onay = 1;
        }
        else{
            $onay = 0;
        }

        if(empty($baslikError) && empty($altbaslikError)){
            KursDüzenle($id,$baslik,$altbaslik,$resim,$onay);
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
                        <input type="text" name="baslik" class="form-control" value="<?php echo $secilenKurs["baslik"]?>">
                        <div class="text-danger"><?php echo $baslikError?></div>
                    </div>
                    <div class="mb-3">
                        <label for="altbaslik">Alt Başlık</label>
                        <input type="text" name="altbaslik" class="form-control" value="<?php echo $secilenKurs["altbaslik"]?>">
                        <div class="text-danger"><?php echo $altbaslikError?></div>
                    </div>
                    <div class="mb-3">
                        <label for="resim" class="d-block">Resim</label>
                        <img src="img/<?php echo $secilenKurs["resim"]?>" style="width: 150px;">
                        <input type="file" name="resim" class="form-control" value="<?php echo $secilenKurs["resim"]?>">
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input border border-1 border-dark" name="onay" type="checkbox" id="onay" <?php echo $secilenKurs["onay"] ? "checked":""?>>
                            <label class="form-check-label" for="onay">
                                Onay
                            </label>
                        </div>
                    </div>

                    <button class="btn btn-dark" type="submit">Kaydet</button>
                </form>
            </div>

           </div>
        </div>

        <?php include "partials/_footer.php"?>