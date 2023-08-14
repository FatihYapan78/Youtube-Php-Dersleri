<?php 
    echo "sonuç : ".(5-5);
    echo "<br/>";
    echo "sonuç : ".(5+5);
    echo "<br/>";
    echo "sonuç : ".(5*5);

    $sayi1 = 5;
    $sayi2 = 10;
    echo "<br/>";
    echo "sonuç : ".($sayi1*$sayi2);
    echo "<br/>";
    echo var_dump(is_int(5));
    echo "<br/>";
    echo var_dump(is_int(5.3));

    echo "<br/>";
    echo is_float(5.3);
    echo "<br/>";
    echo is_numeric(5.5);
    echo "<br/>";
    echo abs(-33);
    echo "<br/>";
    echo ceil(4.8);
    echo "<br/>";
    echo floor(4.3);
    echo "<br/>";
    echo round(4.5);
    echo "<br/>";
    echo sqrt(25);
    echo "<br/>";
    echo pow(6,3);
    echo "<br/>";
    echo max(6,3,45,213,435);
    echo "<br/>";
    echo min(6,3,45,213,435);

?>