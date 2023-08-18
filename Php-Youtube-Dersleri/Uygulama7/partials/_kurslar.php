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
                                    <h5 class="card-title"><a href="<?php echo urlEkle($kurslar[$keys[$i]]["baslik"]) ?>"><?php echo $kurslar[$keys[$i]]["baslik"]; ?></a></h5>
                                    <p>Yayınlanma Tarihi : <?php echo $kurslar[$keys[$i]]["yayinTarihi"]; ?></p>

                                    
                                    <p><?php echo altBaslikKısaltma($kurslar[$keys[$i]]["altbaslik"]); ?></p>

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