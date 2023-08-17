<?php 
    $kategoriler = array("Web Progralama","Front-End","Back-End","Veri Analizi");
    sort($kategoriler);

    $kurslar = array(
        "1"=>array(
            "baslik"=>"Php Kursu",
            'altbaslik'=>"Sıfırdan ileri seviye Php ile Web geliştirme",
            "resim"=>"1.jpg",
            "yayinTarihi"=>"01.01.2023",
            "yorumSayisi"=>0,
            "begeniSayisi"=>5,
            "onay"=>true
        ),
        "2"=>array(
            "baslik"=>"Python Kursu",
            'altbaslik'=>"Sıfırdan ileri seviye Python prrogramlama",
            "resim"=>"2.jpg",
            "yayinTarihi"=>"02.02.2023",
            "yorumSayisi"=>10,
            "begeniSayisi"=>5,
            "onay"=>false
        ),
        "3"=>array(
            "baslik"=>"Node Js Kursu",
            'altbaslik'=>"Sıfırdan ileri seviye Node Js ile Web geliştirme",
            "resim"=>"3.jpg",
            "yayinTarihi"=>"03.03.2023",
            "yorumSayisi"=>5,
            "begeniSayisi"=>15,
            "onay"=>true
        ),
        "4"=>array(
            "baslik"=>"Django Kursu",
            'altbaslik'=>"Sıfırdan ileri seviye Django ile Web geliştirme",
            "resim"=>"1.jpg",
            "yayinTarihi"=>"05.06.2023",
            "yorumSayisi"=>20,
            "begeniSayisi"=>15,
            "onay"=>false
        )
        );



    $kurs1_altbaslik = ucfirst(strtolower($kurslar["1"]["altbaslik"]));
    $kurs2_altbaslik = ucfirst(strtolower($kurslar["2"]["altbaslik"]));
    $kurs3_altbaslik = ucfirst(strtolower($kurslar["3"]["altbaslik"]));
    $kurs4_altbaslik = ucfirst(strtolower($kurslar["4"]["altbaslik"]));

    // $kurs1_altbaslik = substr($kurs1_altbaslik,0,30)."...";
    // $kurs2_altbaslik = substr($kurs2_altbaslik,0,30)."...";
    // $kurs3_altbaslik = substr($kurs3_altbaslik,0,30)."...";
    // $kurs4_altbaslik = substr($kurs4_altbaslik,0,30)."...";

    $kurs1_url = str_replace([" "],["-"],strtolower($kurslar["1"]["baslik"]));
    $kurs2_url = str_replace([" "],["-"],strtolower($kurslar["2"]["baslik"]));
    $kurs3_url = str_replace([" ","."],["-","-"],strtolower($kurslar["3"]["baslik"]));
    $kurs4_url = str_replace([" ","."],["-","-"],strtolower($kurslar["4"]["baslik"]));


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
           <div class="row">
            <div class="col-3">
                <h1>Kategoriler</h1>
                <ul class="list-group">
                <li class="list-group-item"><?php echo $kategoriler[0];?></li>
                <li class="list-group-item"><?php echo $kategoriler[1];?></li>
                <li class="list-group-item"><?php echo $kategoriler[2];?></li>
                <li class="list-group-item"><?php echo $kategoriler[3];?></li>
                </ul>
            </div>
            <div class="col-9">
                <h1 class="text-center"><?php echo title?></h1>
                <p>
                    <?php echo count($kategoriler)?> kategoride <?php echo count($kurslar)?> kurs eklenmiştir.
                </p>
            <?php if($kurslar["1"]["onay"]):?>
                    <div class="card mb-3">
                    <div class="row">
                        <div class="col-3">
                            <img src="img/<?php echo $kurslar["1"]["resim"]; ?>" alt="" class="img-fluid rounded-start">
                        </div>
                        <div class="col-9">
                            <div class="card-body">
                                <h5 class="card-title"><a href="<?php echo $kurs1_url ?>"><?php echo $kurslar["1"]["baslik"]; ?></a></h5>
                                <p>Yayınlanma Tarihi : <?php echo $kurslar["1"]["yayinTarihi"]; ?></p>
                                <?php if(strlen($kurslar["1"]["altbaslik"]))?>
                                <p><?php echo $kurs1_altbaslik; ?></p>
                                <?php if($kurslar["1"]["begeniSayisi"] > 0): ?>
                                <p>Beğeni Sayısı : <?php echo $kurslar["1"]["begeniSayisi"]; ?></p>
                                <?php endif?>
                                <?php if($kurslar["1"]["yorumSayisi"] > 0): ?>
                                    <p>Yorum Sayısı : <?php echo $kurslar["1"]["yorumSayisi"]; ?></p>
                                <?php else: ?>
                                    <p>İlk yorumu sen yap</p>
                                <?php endif?>
                            </div>
                        </div>
                    </div>
                    </div>
            <?php endif?>
                
            

            <div class="card mb-3">
                <div class="row">
                    <div class="col-3">
                        <img src="img/<?php echo $kurslar["2"]["resim"]; ?>" alt="" class="img-fluid rounded-start">
                    </div>
                    <div class="col-9">
                        <div class="card-body">
                            <h5 class="card-title"><a href="<?php echo $kurs2_url ?>"><?php echo $kurslar["2"]["baslik"]; ?></a></h5>
                            <p>Yayınlanma Tarihi : <?php echo $kurslar["2"]["yayinTarihi"]; ?></p>
                            <p><?php echo $kurs2_altbaslik; ?></p>
                            <p>Beğeni Sayısı : <?php echo $kurslar["2"]["begeniSayisi"]; ?></p>
                            <p>Yorum Sayısı : <?php echo $kurslar["2"]["yorumSayisi"]; ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-3">
                <div class="row">
                    <div class="col-3">
                        <img src="img/<?php echo $kurslar["3"]["resim"]; ?>" alt="" class="img-fluid rounded-start">
                    </div>
                    <div class="col-9">
                        <div class="card-body">
                            <h5 class="card-title"><a href="<?php echo $kurs3_url ?>"><?php echo $kurslar["3"]["baslik"]; ?></a></h5>
                            <p>Yayınlanma Tarihi : <?php echo $kurslar["3"]["yayinTarihi"]; ?></p>
                            <p><?php echo $kurs3_altbaslik; ?></p>
                            <p>Beğeni Sayısı : <?php echo $kurslar["3"]["begeniSayisi"]; ?></p>
                            <p>Yorum Sayısı : <?php echo $kurslar["3"]["yorumSayisi"]; ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-3">
                <div class="row">
                    <div class="col-3">
                        <img src="img/<?php echo $kurslar["4"]["resim"]; ?>" alt="" class="img-fluid rounded-start">
                    </div>
                    <div class="col-9">
                        <div class="card-body">
                            <h5 class="card-title"><a href="<?php echo $kurs4_url ?>"><?php echo $kurslar["4"]["baslik"]; ?></a></h5>
                            <p>Yayınlanma Tarihi : <?php echo $kurslar["4"]["yayinTarihi"]; ?></p>
                            <p><?php echo $kurs4_altbaslik; ?></p>
                            <p>Beğeni Sayısı : <?php echo $kurslar["4"]["begeniSayisi"]; ?></p>
                            <p>Yorum Sayısı : <?php echo $kurslar["4"]["yorumSayisi"]; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
           </div>
        </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>