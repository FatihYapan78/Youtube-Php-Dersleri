<h1>Kategoriler</h1>
                <ul class="list-group">
                    <?php foreach($kategori_data as $kategori): ?>
                        <li class="list-group-item <?php echo ($kategori["aktif"]) ? "active" : "" ?>"><?php echo $kategori["kategoriAdi"];?></li>
                    <?php endforeach?>
                </ul>