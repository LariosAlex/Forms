<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method='POST'>
        USUARI: <input type="text"><br>
        <?php 
            $products = file("productShop.txt");
            foreach($products as $product){
                $product = trim($product);
                echo "<input type='checkbox' id='$product' name='sel_products[]' value='$product'>\n";
                echo "<label for='.$product.'>Buy $product</label><br>\n";
            }
        ?>
        <input type="submit" value ="Buy products">
    </form>
</body>
</html>