<?php
require_once("models/Model_Product.php");
class ProductController{ 
    public $model_product;
    public function __construct()
    {
    $this->model_product = new Model_Product();
    }
    public function invoke()
    {
        if(!isset($_GET["productid"])){
            $products = $this->model_product->getproductlist();
            include "views/productlist.php";
        }
        else
        {
            $products = $this->model_product->getproduct($_GET["productid"]); 
            include "views/viewproduct.php";
        }
    }
}
?>