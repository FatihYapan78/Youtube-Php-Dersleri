<?php

    if(isset($_POST["submit"]) && $_POST["submit"] == "btnUpload"){
        
        for($i=0;$i<count($_FILES["image"]["name"]);$i++){
            $filename = $_FILES["image"]["name"][$i];
            $fileSourcePath = $_FILES["image"]["tmp_name"][$i];
            $fileSize = $_FILES["image"]["size"][$i];
            $dosya_yolu = "images/".$filename;
            $dosya_uzantilari = array("jpg","jpeg","png");
            $dosyaAdi = explode(".", $filename);
            $dosyaAdi_Uzantisiz = $dosyaAdi[0];
            $dosya_Uzantisi = $dosyaAdi[1];
            $yeniDosyaAdi = md5(time().$dosyaAdi_Uzantisiz).".".$dosya_Uzantisi;
            $dosya_yolu = "images/".$yeniDosyaAdi;
            if(!in_array($dosya_Uzantisi, $dosya_uzantilari)){
                $upload = false;
                echo "Dosya Uzantısı".implode(",",$dosya_uzantilari)."olmalıdır.";
            }
            else{
                if($fileSize > 500000){
                    echo "Dosya Boyutu Çok büyük.";
                    echo "<br/>";
                }
                else{
                    if(move_uploaded_file($fileSourcePath, $dosya_yolu)){
                        echo "Dosya Yüklendi";
                    }
                    else{
                        echo "Dosya Yüklenemedi";
                    }
                }
            }
        }

    }

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="multiple.php" method="post" enctype="multipart/form-data">
    <input type="file" name="image[]" multiple="multiple">
    <button type="submit" value="btnUpload" name="submit">Gönder</button>
</form>
</body>
</html>