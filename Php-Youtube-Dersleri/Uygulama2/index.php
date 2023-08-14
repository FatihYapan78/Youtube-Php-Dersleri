<?php 
    $kurs1_baslik = "Php Kursu";
    $kurs1_altbaslik = "Sıfırdan ileri seviye Php ile Web geliştirme";
    $kurs1_resim = "1.jpg";
    $kurs1_yayinTarihi = "01.01.2023";
    $kurs1_yorumSayisi = "100";
    $kurs1_beğeniSayisi = "300";


    $kurs2_baslik = "Python Kursu";
    $kurs2_altbaslik = "Sıfırdan ileri seviye Python prrogramlama";
    $kurs2_resim = "2.jpg";
    $kurs2_yayinTarihi = "02.02.2023";
    $kurs2_yorumSayisi = "200";
    $kurs2_beğeniSayisi = "500";

    $kurs3_baslik = "Node.js Kursu";
    $kurs3_altbaslik = "Sıfırdan ileri seviye Node.js ile web geliştirme";
    $kurs3_resim = "3.jpg";
    $kurs3_yayinTarihi = "03.03.2023";
    $kurs3_yorumSayisi = "600";
    $kurs3_beğeniSayisi = "100";


    $kurs1_altbaslik = ucfirst(strtolower($kurs1_altbaslik));
    $kurs2_altbaslik = ucfirst(strtolower($kurs2_altbaslik));
    $kurs3_altbaslik = ucfirst(strtolower($kurs3_altbaslik));

    $kurs1_altbaslik = substr($kurs1_altbaslik,0,30)."...";
    $kurs2_altbaslik = substr($kurs2_altbaslik,0,30)."...";
    $kurs3_altbaslik = substr($kurs3_altbaslik,0,30)."...";

    $kurs1_url = str_replace([" "],["-"],strtolower($kurs1_baslik));
    $kurs2_url = str_replace([" "],["-"],strtolower($kurs2_baslik));
    $kurs3_url = str_replace([" ","."],["-","-"],strtolower($kurs3_baslik));


    // define("title","Popüler Kurslar");
    const title = "Popüler Kurslar";
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
    

        <div class="container my-3">
            <h1 class="text-center"><?php echo title?></h1>
            <div class="card mb-3">
                <div class="row">
                    <div class="col-3">
                        <img src="img/<?php echo $kurs1_resim; ?>" alt="" class="img-fluid rounded-start">
                    </div>
                    <div class="col-9">
                        <div class="card-body">
                            <h5 class="card-title"><a href="<?php echo $kurs1_url ?>"><?php echo $kurs1_baslik; ?></a></h5>
                            <p>Yayınlanma Tarihi : <?php echo $kurs1_yayinTarihi; ?></p>
                            <p><?php echo $kurs1_altbaslik; ?></p>
                            <p>Beğeni Sayısı : <?php echo $kurs1_beğeniSayisi; ?></p>
                            <p>Yorum Sayısı : <?php echo $kurs1_yorumSayisi; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="row">
                    <div class="col-3">
                        <img src="img/<?php echo $kurs2_resim; ?>" alt="" class="img-fluid rounded-start">
                    </div>
                    <div class="col-9">
                        <div class="card-body">
                        <h5 class="card-title"><a href="<?php echo $kurs2_url ?>"><?php echo $kurs2_baslik; ?></a></h5>
                            <p>Yayınlanma Tarihi : <?php echo $kurs2_yayinTarihi; ?></p>
                            <p><?php echo $kurs2_altbaslik; ?></p>
                            <p>Beğeni Sayısı : <?php echo $kurs2_beğeniSayisi; ?></p>
                            <p>Yorum Sayısı : <?php echo $kurs2_yorumSayisi; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="row">
                    <div class="col-3">
                        <img src="img/<?php echo $kurs3_resim; ?>" alt="" class="img-fluid rounded-start">
                    </div>
                    <div class="col-9">
                        <div class="card-body">
                        <h5 class="card-title"><a href="<?php echo $kurs3_url ?>"><?php echo $kurs3_baslik; ?></a></h5>
                            <p>Yayınlanma Tarihi : <?php echo $kurs3_yayinTarihi; ?></p>
                            <p><?php echo $kurs3_altbaslik; ?></p>
                            <p>Beğeni Sayısı : <?php echo $kurs3_beğeniSayisi; ?></p>
                            <p>Yorum Sayısı : <?php echo $kurs3_yorumSayisi; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>