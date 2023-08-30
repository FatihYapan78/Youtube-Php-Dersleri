<?php
    include "class/db_class.php";
    include "class/urunler_class.php";
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">

    <a href="product_create.php" class="btn btn-primary m-3">KURS EKLE</a>

    <?php $urun = new Product();?>

    <?php if($urun->getUrunler()):?>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>id</th>
                    <th>title</th>
                    <th>price</th>
                    <th>description</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($urun->getUrunler() as $item):?>
                    <tr>
                        <td><?php echo $item->id?></td>
                        <td><?php echo $item->title?></td>
                        <td><?php echo $item->price?></td>
                        <td><?php echo $item->description?></td>
                        <td>
                            <a href="<?php echo 'product_edit.php?id='.$item->id?>" class="btn btn-primary btn-sm">Düzenle</a>
                            <a href="<?php echo 'product_delete.php?id='.$item->id?>" class="btn btn-danger btn-sm">Sil</a>
                        </td>
                    </tr>
                <?php endforeach?>
            </tbody>
        </table>
    <?php else:?>

    <?php endif?>
    </div>
</body>
</html>