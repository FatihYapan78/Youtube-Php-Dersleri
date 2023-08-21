<?php

    setcookie("username","fatih",time() + (60 * 60 * 24));
    setcookie("auth",true,time() + (60 * 60 *24));

    if(isset($_COOKIE["username"])){
        echo $_COOKIE["username"];
    }
    else{
        echo "Cookie yok";
    }

    // güncelleme
    setcookie("username","faruk",time() + (60 * 60 * 24));

    // Silme 
    setcookie("username","faruk",time() - (60 * 60));
    setcookie("auth",true,time() - (60 * 60 * 24));
?>