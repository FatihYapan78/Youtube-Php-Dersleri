<?php
    $kurs1_baslik = "Php Kursu";
    $kurs1_aciklama = "Sıfırdan ileri seviye Php ile web geliştirme";
    $kurs1_resim = "1.jpg";
    $kurs1_yayinTarihi = "01.01.2023";
    $kurs1_yorumSayisi = "100";
    $kurs1_begeniSayisi = "300";
    
    $kurs2_baslik = "Python Kursu";
    $kurs2_aciklama = "Sıfırdan ileri seviye Python prrogramlama";
    $kurs2_resim = "2.jpg";
    $kurs2_yayinTarihi = "02.02.2023";
    $kurs2_yorumSayisi = "600";
    $kurs2_begeniSayisi = "100";

    $kurs3_baslik = "Node.js Kursu";
    $kurs3_aciklama = "Sıfırdan ileri seviye Node.js ile web geliştirme";
    $kurs3_resim = "3.jpg";
    $kurs3_yayinTarihi = "03.03.2023";
    $kurs3_yorumSayisi = "500";
    $kurs3_begeniSayisi = "200";

?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
          <div class="row">
            <h1 class="text-center">Kurslar</h1>
        <div class="card" style="width: 18rem;">
            <img src="img/<?php echo $kurs1_resim?>" class="img-fluid" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php echo $kurs1_baslik?></h5>
            <p class="card-text">Yayınlanma Tarihi : <?php echo $kurs1_yayinTarihi?></p>
            <p class="card-text"><?php echo $kurs1_aciklama?></p>
            <p class="card-text">Beğeni Sayısı : <?php echo $kurs1_begeniSayisi?></p>
            <p class="card-text">Yorum Sayısı : <?php echo $kurs1_yorumSayisi?></p>
        </div>
        </div>
        <div class="card mx-5" style="width: 18rem;">
            <img src="img/<?php echo $kurs2_resim?>" class="img-fluid" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php echo $kurs2_baslik?></h5>
            <p class="card-text">Yayınlanma Tarihi : <?php echo $kurs2_yayinTarihi?></p>
            <p class="card-text"><?php echo $kurs2_aciklama?></p>
            <p class="card-text">Beğeni Sayısı : <?php echo $kurs2_begeniSayisi?></p>
            <p class="card-text">Yorum Sayısı : <?php echo $kurs2_yorumSayisi?></p>
        </div>
        </div>
        <div class="card " style="width: 18rem;">
            <img src="img/<?php echo $kurs3_resim?>" class="img-fluid" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php echo $kurs3_baslik?></h5>
            <p class="card-text">Yayınlanma Tarihi : <?php echo $kurs3_yayinTarihi?></p>
            <p class="card-text"><?php echo $kurs3_aciklama?></p>
            <p class="card-text">Beğeni Sayısı : <?php echo $kurs3_begeniSayisi?></p>
            <p class="card-text">Yorum Sayısı : <?php echo $kurs3_yorumSayisi?></p>
        </div>
        </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>