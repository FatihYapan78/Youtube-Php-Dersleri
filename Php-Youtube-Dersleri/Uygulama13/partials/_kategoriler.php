<?php if(isset($_GET["categoryid"]) && is_numeric($_GET["categoryid"])){
    $secilenKategori = $_GET["categoryid"];
}
    
    ?>




<h1>Kategoriler</h1>
                <ul class="list-group">
                <a href="index.php" class="list-group-item list-group-item-action">Tüm Kurslar</a>
                    <?php $sonuc = KategoriGetir(); while($kategori  =mysqli_fetch_assoc($sonuc)): ?>
                        <a class="text-decoration-none" href="<?php echo "index.php?categoryid=".$kategori["id"]?>">
                        <li class="list-group-item list-group-item-action <?php 
                            if($kategori["id"] == $secilenKategori){
                                echo "active";
                            }
                            
                            ?>"><?php echo $kategori["kategoriAdi"];?>
                            </li>
                        </a>
                    <?php endwhile?>
                </ul>