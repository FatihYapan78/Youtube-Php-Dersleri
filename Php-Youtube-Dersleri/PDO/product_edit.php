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
    <?php
        $id = $_GET["id"];
        $urun = new Product();
        $item = $urun->getUrunlerById($id);

        if(isset($_POST["submit"])){
            $title = $_POST["title"];
            $description = $_POST["description"];
            $price = $_POST["price"];

            

            if($urun->EditProduct($id,$title,$price,$description)){
                header("Location: index.php");
            }
        }
    
    ?>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <form method="POST">
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" value="<?php echo $item->title?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea type="text" name="description" class="form-control"><?php echo $item->description?></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Price</label>
                        <input type="text" name="price" class="form-control" value="<?php echo $item->price?>">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Ekle</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>