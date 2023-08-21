<?php

    session_start();


    $_SESSION["username"] = "fatih";
    $_SESSION["password"] = "123";

    // Silme
    // unset($_SESSION["username"]);
    // Hepsini Silme
    session_unset();
    // $_SESSION=[];

    if(isset($_SESSION["username"])){
        echo $_SESSION["username"];

    }
    else{
        echo "username yok";
    }


    echo $_SESSION["password"];



?>