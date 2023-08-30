<?php


    class Product extends Database{
        public function getUrunler(){
            $sql = "SELECT * from product";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        }

        public function getUrunlerById(int $id){
            $sql = "SELECT * from product WHERE id=:id";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute(["id"=>$id]);
            return $stmt->fetch();
        }

        public function CreateProduct($title,$price,$description){
            $sql = "INSERT INTO product(title,price,description) VALUE(:title,:price,:description)";
            $stmt = $this->connect()->prepare($sql);
            return $stmt->execute([
                "title"=>$title,
                "price"=>$price,
                "description"=>$description,
            ]);
        }
        
        public function EditProduct($id,$title,$price,$description){
            $sql = "UPDATE product SET title=:title,price=:price,description=:description WHERE id=:id";
            $stmt = $this->connect()->prepare($sql);
            return $stmt->execute([
                'id'=>$id,
                "title"=>$title,
                "price"=>$price,
                "description"=>$description,
            ]);
        }

        public function DeleteProduct($id){
            $sql = "DELETE FROM product WHERE id=:id";
            $stmt = $this->connect()->prepare($sql);
            return $stmt->execute([
                'id'=>$id,
            ]);
        }
    }



?>