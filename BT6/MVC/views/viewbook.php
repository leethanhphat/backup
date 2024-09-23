<!DOCTYPE html>
<html>
    <body>
    <h1>product info</h1>
    <?php
    echo "<b>productName:</b> ".$product->getproduct_name()."<br/>";
    echo "<b>categoryID: </b>".$product->getcategoryID()."<br/>";
    echo "<b>price: </b>".$product->getprice()."<br/>";

    echo "<b>stockQuantity: </b>".$product->getstock_quantity()."<br/>";

    echo "<b>image: </b> <br/><img src='".$product->getproduct_img()."'/><br/>"
    ?>
    </body>
</html>