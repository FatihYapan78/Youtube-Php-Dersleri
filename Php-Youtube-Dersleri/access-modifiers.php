<?php
    // public, private, protected
    class Urun {
        private $name;
        private $fiyat;

        // Nesne oluşturulma aşamasında otomatik olarak çağrılır.
        function __construct($name,$fiyat)
        {
            $this->name = $name;
            if($fiyat<0){
                $this->fiyat=0;
            }
            else{
                $this->fiyat=$fiyat;
            }
        }

        function __destruct()
        {
            echo "nesne silindi.";
        }

        function display_product(){
            return $this->name." ".$this->fiyat;
        }
    }


    $urun1 = new Urun("Iphone 8",10000);
    $urun2 = new Urun("Iphone 9",12000);

    // echo $urun1->display_product();
    // echo "<br/>";
    // echo $urun2->display_product();

    echo $urun1->name;
    echo $urun1->name="Iphone 10";

?>