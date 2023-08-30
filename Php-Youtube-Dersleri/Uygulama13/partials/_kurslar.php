            
            <?php 
            $categoryId = "";
            $keyword = "";
            $page = 1;
            
            if(isset($_GET["categoryid"]) && is_numeric($_GET["categoryid"])){
                $categoryId = $_GET["categoryid"];
            }
            if(isset($_GET["q"])){
                $keyword = $_GET["q"];
            }
            if(isset($_GET["page"]) && is_numeric($_GET["page"])){
                $page = $_GET["page"];
            }
            
            $sonuc = KursFiltreleme($categoryId,$keyword,$page);
    
    ?>
            
            
            
            
            
            <?php if(mysqli_num_rows($sonuc["data"])>0):?>
                <?php while($kurs= mysqli_fetch_assoc($sonuc["data"])):?>
                    <?php if($kurs["onay"]):?>
                            <div class="card mb-3">
                            <div class="row">
                                <div class="col-3">
                                    <img src="img/<?php echo $kurs["resim"]; ?>" alt="" class="img-fluid rounded-start">
                                </div>
                                <div class="col-9">
                                    <div class="card-body">
                                        <h5 class="card-title"><a href="kurs_detay.php?id=<?php echo $kurs["id"] ?>"><?php echo $kurs["baslik"]; ?></a></h5>
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
                                <?php endif?>
                            <?php endwhile?>
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                    <?php for($i=1;$i<=$sonuc["toplamSayfa"];$i++):?>                              
 
                                        <li class="page-item <?php if($i == $page) echo 'active'?>">
                                            <a class="page-link" href="
                                            <?php 
                                                $url = "?page=".$i;

                                                if(!empty($categoryId)){
                                                    $url .= "&categoryid=".$categoryId;
                                                }

                                                if(!empty($keyword)){
                                                    $url .= "&q=".$keyword;
                                                }
                                                echo $url;
                                            ?>
                                        "><?php echo $i?></a>
                                    </li>
                                    <?php endfor?>
                                </ul>
                            </nav>
                            </div>
                            </div>
            <?php else:?>
                <div class="alert alert-warning">
                    Kurs Bulunamadı.
                </div>
            <?php endif?>