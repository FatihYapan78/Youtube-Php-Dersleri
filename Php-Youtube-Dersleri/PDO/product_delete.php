<?php
    include "class/db_class.php";
    include "class/urunler_class.php";
    
?>
<body>
    <?php
    $id = $_GET["id"];
    $urun = new Product();
    $item = $urun->getUrunlerById($id);

        

    if($urun->DeleteProduct($id)){
                header("Location: index.php");
        }
        
    
    ?>
</body>
</html>