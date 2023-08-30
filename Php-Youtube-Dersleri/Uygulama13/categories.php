<?php 
    require "libs/variables.php";
    require "libs/function.php";
    session_start();
    if(!isAdmin()){
        header("Location: index.php");
    }
?>

<?php include "partials/_message.php"?>
<?php include "partials/_header.php"?>
<?php include "partials/_navbar.php"?>

        <div class="container my-3">
           <div class="row">
            <a href="kategori-ekle.php" class="btn btn-primary">Kategori Ekle</a>
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th style="width: 50px;">Id</th>
                            <th>Kategori Adı</th>
                            <th style="width: 150px;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $sonuc = KategoriGetir(); while($category = mysqli_fetch_assoc($sonuc)): ?>
                        <tr>
                                <td><?php echo $category["id"]?></td>
                                <td><?php echo $category["kategoriAdi"]?></td>
                                <td>
                                    <a href="kategori-düzenle.php?id=<?php echo $category["id"]?>" class="btn btn-primary btn-sm">Düzenle</a>
                                    <a href="kategori-sil.php?id=<?php echo $category["id"]?>" class="btn btn-danger btn-sm">Sil</a>
                                </td>
                        </tr>
                        <?php endwhile?>
                    </tbody>
                </table>
            </div>
           </div>
        </div>

<?php include "partials/_footer.php"?>