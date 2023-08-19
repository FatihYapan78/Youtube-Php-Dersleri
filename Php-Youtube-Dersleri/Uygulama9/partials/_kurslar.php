            <?php foreach ($kurslar as $kurs):?>
                <?php if($kurs["onay"]):?>
                        <div class="card mb-3">
                        <div class="row">
                            <div class="col-3">
                                <img src="img/<?php echo $kurs["resim"]; ?>" alt="" class="img-fluid rounded-start">
                            </div>
                            <div class="col-9">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="<?php echo urlEkle($kurs["baslik"]) ?>"><?php echo $kurs["baslik"]; ?></a></h5>
                                    <p>Yayınlanma Tarihi : <?php echo $kurs["yayinTarihi"]; ?></p>

                                    
                                    <p><?php echo altBaslikKısaltma($kurs["altbaslik"]); ?></p>

                                    <?php if($kurs["begeniSayisi"] > 0): ?>
                                    <p>Beğeni Sayısı : <?php echo $kurs["begeniSayisi"]; ?></p>
                                    <?php endif?>
                                    <?php if($kurs["yorumSayisi"] > 0): ?>
                                        <p>Yorum Sayısı : <?php echo $kurs["yorumSayisi"]; ?></p>
                                    <?php else: ?>
                                        <p>İlk yorumu sen yap</p>
                                    <?php endif?>
                                </div>
                            </div>
                        </div>
                        </div>
                <?php endif?>
            <?php endforeach?>