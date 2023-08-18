<h1>Kategoriler</h1>
                <ul class="list-group">
                    <?php for($i=0;$i<count($kategoriler);$i++): ?>
                        <li class="list-group-item <?php echo ($kategoriler[$i]["aktif"]) ? "active" : "" ?>"><?php echo $kategoriler[$i]["kategoriAdi"];?></li>
                    <?php endfor?>
                </ul>