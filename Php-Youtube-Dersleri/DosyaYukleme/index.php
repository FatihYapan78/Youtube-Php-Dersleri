<?php


    if(isset($_POST["submit"]) && $_POST["submit"] == "btnUpload"){

        // Dosya Seçilmiş mi ? 
        // Dosya Boyutu
        // Dosya İsmi Kontrolü
        // Dosya Uzantısı (jpg,png)

        // echo "<pre>";
        // print_r($_FILES);
        // print_r($_POST);
        // echo "</pre>";

        $upload = true;   

       
        $kayıtDosyası = "./img/";
        $filename = $_FILES["image"]["name"];
        $fileSourcePath = $_FILES["image"]["tmp_name"];
        $fileSize = $_FILES["image"]["size"];
        $fileDestPath = $kayıtDosyası.$filename;
        $dosya_uzantilari = array("jpg","jpeg","png");

        $dosyaAdi = explode(".", $filename);
        $dosyaAdi_Uzantisiz = $dosyaAdi[0];
        $dosya_Uzantisi = $dosyaAdi[1];

        if(!in_array($dosya_Uzantisi, $dosya_uzantilari)){
            $upload = false;
            echo "Dosya Uzantısı".implode(",",$dosya_uzantilari)."olmalıdır.";
        }
        
        $yeniDosyaAdi = md5(time().$dosyaAdi_Uzantisiz).".".$dosya_Uzantisi;
        $fileSourcePath = $_FILES["image"]["tmp_name"];
        $fileDestPath = $kayıtDosyası.$yeniDosyaAdi;



        if($fileSize > 500000){
            $upload = false;
            echo "Dosya Boyutu Çok büyük.";
            echo "<br/>";
        }

        if(empty($filename)){
            $upload = false;
            echo "Dosya Seçiniz";
            echo "<br/>";
        }
        if(!$upload){
            echo "Dosya Seçilmedi.";
        }
        else{
            if(move_uploaded_file($fileSourcePath, $fileDestPath)){
                echo "Dosya Yüklendi";
            }
            else{
                echo "Dosya Yüklenemedi";
            }
        }
    }


?>


<form action="index.php" method="post" enctype="multipart/form-data">
    <input type="file" name="image">
    <button type="submit" value="btnUpload" name="submit">Gönder</button>
</form>