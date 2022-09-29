<?php
    foreach($_POST as $key => $value){
        if($key == "user"){
            $comanda .= $value.":";
        }
        if($value == "on"){
            $comanda .= $key.",";
        }
    }

    $comanda = "\n";
    $allSales = fopen('allSales.txt', 'a');
    fwrite($allSales, $comanda);
    fclose($allSales);
?>