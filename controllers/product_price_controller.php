<?php
class product_price
{
    public static function index_product_price()
    {
        $product_price_list = product_price::getAll();
        require_once("views/product_price/index_product_price.php");
    }

   

    public function newproduct_price()
    {
        $product_price_list=product_price::getAll();
        require_once('views/product_price/newproduct_price.php');
    }

    
    public function addproduct_price()
    {
        $idprice=$_GET['idprice'];
        $maxqty=$_GET['maxqty'];
        $qrt_min=$_GET['qrt_min'];
        $qrt_max=$_GET['qrt_max'];
        $price=$_GET['price'];
        $screen=$_GET['screen'];
        $pid=$_GET['pid'];

        product_price::add($idprice,$maxqty,$qrt_min,$qrt_max,$price,$screen,$pid); 

        product_priceController::index_product_price(); 
    }

    public function updateForm()
    {
        $idprice=$_GET['idprice'];
        $product_price = product_price::get($idprice);
        require_once('views/product_price/updateForm.php');
    }

    public function update()
    {
        $idprice=$_GET['idprice'];
        $maxqty=$_GET['maxqty'];
        $qrt_min=$_GET['qrt_min'];
        $qrt_max=$_GET['qrt_max'];
        $price=$_GET['price'];
        $screen=$_GET['screen'];
        $pid=$_GET['pid'];
        product_price::update($idprice,$maxqty,$qrt_min,$qrt_max,$price,$screen,$pid); 

        product_priceController::index_product_price(); 
    }

    public function deleteConfirm()
    {
        $idprice = $_GET['idprice'];
        $product_price = product_price::get($idprice);
        require_once('views/product_price/deleteConfirm.php');
    }
    public function delete()
    {
        $idprice = $_GET['idprice'];

        product_price::delete($idprice);
        product_priceController::index_product_price(); 
    }

}