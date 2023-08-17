<?php 
    $kategoriler = array(
        array("kategoriAdi"=>"Web Progralama","aktif"=>true),
        array("kategoriAdi"=>"Front-End","aktif"=>false),
        array("kategoriAdi"=>"Back-End","aktif"=>false),
        array("kategoriAdi"=>"Veri Analizi","aktif"=>false),
        array("kategoriAdi"=>"Mobil Uygulama","aktif"=>false),
    );
    // sort($kategoriler);

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
            "onay"=>true
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
            "onay"=>true
        )
        );

    $keys = array_keys($kurslar);

    $kurs1_altbaslik = ucfirst(strtolower($kurslar["1"]["altbaslik"]));
    $kurs2_altbaslik = ucfirst(strtolower($kurslar["2"]["altbaslik"]));
    $kurs3_altbaslik = ucfirst(strtolower($kurslar["3"]["altbaslik"]));
    $kurs4_altbaslik = ucfirst(strtolower($kurslar["4"]["altbaslik"]));


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
                    <?php for($i=0;$i<count($kategoriler);$i++): ?>
                        <li class="list-group-item <?php echo ($kategoriler[$i]["aktif"]) ? "active" : "" ?>"><?php echo $kategoriler[$i]["kategoriAdi"];?></li>
                    <?php endfor?>
                </ul>
            </div>
            <div class="col-9">
                <h1 class="text-center"><?php echo title?></h1>
                <p>
                    <?php echo count($kategoriler)?> kategoride <?php echo count($kurslar)?> kurs eklenmiştir.
                </p>
            <?php // foreach ($kurslar as $kurs):?>
            <?php for($i=0;$i<count($kurslar);$i++):?>
                <?php if($kurslar[$keys[$i]]["onay"]):?>
                        <div class="card mb-3">
                        <div class="row">
                            <div class="col-3">
                                <img src="img/<?php echo $kurslar[$keys[$i]]["resim"]; ?>" alt="" class="img-fluid rounded-start">
                            </div>
                            <div class="col-9">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="<?php echo $kurs1_url ?>"><?php echo $kurslar[$keys[$i]]["baslik"]; ?></a></h5>
                                    <p>Yayınlanma Tarihi : <?php echo $kurslar[$keys[$i]]["yayinTarihi"]; ?></p>
                                    <?php if(strlen($kurslar[$keys[$i]]["altbaslik"]))?>
                                    <p><?php echo $kurs1_altbaslik; ?></p>
                                    <?php if($kurslar[$keys[$i]]["begeniSayisi"] > 0): ?>
                                    <p>Beğeni Sayısı : <?php echo $kurslar[$keys[$i]]["begeniSayisi"]; ?></p>
                                    <?php endif?>
                                    <?php if($kurslar[$keys[$i]]["yorumSayisi"] > 0): ?>
                                        <p>Yorum Sayısı : <?php echo $kurslar[$keys[$i]]["yorumSayisi"]; ?></p>
                                    <?php else: ?>
                                        <p>İlk yorumu sen yap</p>
                                    <?php endif?>
                                </div>
                            </div>
                        </div>
                        </div>
                <?php endif?>
            <?php endfor?>

            <?php // endforeach?>
            
            </div>
           </div>
        </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>