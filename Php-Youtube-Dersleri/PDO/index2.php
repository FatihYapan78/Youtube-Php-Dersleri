<?php
    include "baglanti.php";



    // Veri Ekleme

    // $title = "Iphone 1";
    // $price = 2000;
    // $description = "Güzel Telefon";

    // $sql = "INSERT INTO urunler(title,price,description) VALUES(:title,:price,:description)";

    // $stmt = $baglanti->prepare($sql);
    // $stmt->execute(['title'=>$title,'price'=>$price,'description'=>$description]);

    // echo "kayit eklendi.";

    // Birden Fazla Kayıt Eklemek
    // $title = "Iphone 2";
    // $price = 2000;
    // $description = "Güzel Telefon";

    // $sql = "INSERT INTO urunler(title,price,description) VALUES(:title,:price,:description)";
    // $stmt = $baglanti->prepare($sql);

    // $stmt->bindParam(':title',$title);
    // $stmt->bindParam(':price',$price);
    // $stmt->bindParam(':description',$description);

    // $stmt->execute();
    // $title = "Iphone 3";
    // $price = 2000;
    // $description = "Güzel Telefon";
    // $stmt->execute();

    // Veri Sorgulama
    // $sql = "SELECT * from urunler";
    // $sonuc = $baglanti->query($sql);

    // while($row = $sonuc->fetch()){
    //     echo $row->title."<br/>";
    //     echo $row->price."<br/>";
    // }

    // $urunler = $sonuc->fetchAll();

    // foreach($urunler as $urun){
    //     echo $urun->title."<br/>";
    // }

    // Prepared
    // $id =2;
    // $sql = "SELECT * from urunler WHERE id=?";
    // $stmt = $baglanti->prepare($sql);
    // $stmt->execute([$id]);

    // $urunler = $stmt->fetchAll();

    // foreach($urunler as $urun){
    //     echo $urun->title."<br/>";
    // }

    // Kayıt Güncelleme
    // $id = 1;
    // $title = "Güncellendi";

    // $sql = "UPDATE urunler SET title=:title WHERE id=:id";
    // $stmt = $baglanti->prepare($sql);
    // $stmt->execute(['id'=>$id,'title'=>$title]);

    // echo "Veri Güncellendi".$stmt->rowCount();

    // Kayıt Silme
    // $id = 3;

    // $sql = "DELETE FROM urunler WHERE id=:id";
    // $stmt = $baglanti->prepare($sql);
    // $stmt->execute(['id'=>$id]);

    // echo "Veri Silindi".$stmt->rowCount();
?>