<?php 
    $products = file("productShop.txt");
    foreach($products as $product){
        echo '<input type="checkbox" id="'.$product.'" name="'.$product.'" value="'.$product.'">
        <label for="'.$product.'"> Buy '.$product.'</label><br>';
    }
?>