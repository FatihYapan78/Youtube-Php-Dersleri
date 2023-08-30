<?php

    class Database{
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $dbName = "youtubedb";


    protected function connect(){
        try{
            $sdn = "mysql:host=".$this->host.";dbname=".$this->dbName;
            $baglanti = new PDO($sdn,$this->user,$this->password);
            $baglanti->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $baglanti->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);

            return $baglanti;
        }
        catch(PDOException $e){
            echo "Bağlantı Hatası".$e->getMessage();
        }
    }

    }





?>