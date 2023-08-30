<?php 
    require "libs/variables.php";
    require "libs/function.php";
    session_start();
    if(!isAdmin()){
        header("Location: index.php");
    }
?>

<?php include "partials/_message.php"?>
<?php include "partials/_header.php"?>
<?php include "partials/_navbar.php"?>

        <div class="container my-3">
           <div class="row">
            <a href="kurs-ekle.php" class="btn btn-primary">Kurs Ekle</a>
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th style="width: 50px;">Id</th>
                            <th>Başlık</th>
                            <th>Kategoriler</th>
                            <th>Alt Başlık</th>
                            <th>Resim</th>
                            <th>Yayın Tarihi</th>
                            <th>Yorum Sayisi</th>
                            <th>Beğeni Sayisi</th>
                            <th>Onay</th>
                            <th style="width: 150px;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $sonuc = KursGetir(); while($kurs = mysqli_fetch_assoc($sonuc)): ?>
                        <tr>
                                <td><?php echo $kurs["id"]?></td>
                                <td><?php echo $kurs["baslik"]?></td>
                                <td>
                                    <?php
                                        echo "<ul>";
                                        $result = KategoriGetirKursId($kurs["id"]);

                                        if(mysqli_num_rows($result) > 0){
                                            while($kategori = mysqli_fetch_assoc($result)){
                                                echo "<li>".$kategori["kategoriAdi"]."</li>";
                                            }
                                        }
                                        else{
                                            echo "<li>Kategori Seçilmedi</li>";
                                        }
                                        echo "</ul>";
                                    
                                    
                                    ?>



                                </td>
                                <td><?php echo $kurs["altbaslik"]?></td>
                                <td><img src="img/<?php echo $kurs["resim"]?>" style="width: 100px;"></td>
                                <td><?php echo $kurs["yayinTarihi"]?></td>
                                <td><?php echo $kurs["yorumSayisi"]?></td>
                                <td><?php echo $kurs["begeniSayisi"]?></td>
                                <td><?php echo $kurs["onay"]?></td>
                                <td>
                                    <a href="kurs-düzenle.php?id=<?php echo $kurs["id"]?>" class="btn btn-primary btn-sm">Düzenle</a>
                                    <a href="kurs-sil.php?id=<?php echo $kurs["id"]?>" class="btn btn-danger btn-sm">Sil</a>
                                </td>
                        </tr>
                        <?php endwhile?>
                    </tbody>
                </table>
            </div>
           </div>
        </div>

<?php include "partials/_footer.php"?>