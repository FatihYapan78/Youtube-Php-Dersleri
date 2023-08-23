<?php

        setcookie("username","", time() - (60 * 60));
        setcookie("auth",true, time() - (60 * 60));
        header("Location: login.php");



?>