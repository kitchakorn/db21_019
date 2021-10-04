<?php
class product_price{
    public $idprice;
    public $maxqty;
    public $qrt_min;
    public $qrt_max;
    public $price;
    public $screen;
    public $pid;
    
    public function __construct($idprice,$maxqty,$qrt_min,$qrt_max,$price,$screen,$pid)
    {
        
        $this->idprice=$idprice;
        $this->maxqty=$maxqty;
        $this->qrt_min=$qrt_min;
        $this->qrt_max=$qrt_max;
        $this->price=$price;
        $this->screen=$screen;
        $this->pid=$pid;
    }

    public static function getAll()
    {
        $product_pricelist = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM product_price";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc())
        {   
            $idprice=$my_row['idprice'];
            $maxqty=$my_row['maxqty'];
            $qrt_min=$my_row['qrt_min'];
            $qrt_max=$my_row['qrt_max'];
            $price=$my_row['price'];
            $screen=$my_row['screen'];
            $pid=$my_row['pid'];

            $product_pricelist[]=new product_price($idprice,$maxqty,$qrt_min,$qrt_max,$price,$screen,$pid);
        }
        require("connection_close.php");
        return $product_pricelist;
    }

    public static function get($idprice)
    {
        require("connection_connect.php");
        $sql = "select * from product_price where idprice = '$idprice'";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();
        $idprice=$my_row['idprice'];
        $maxqty=$my_row['maxqty'];
        $qrt_min=$my_row['qrt_min'];
        $qrt_max=$my_row['qrt_max'];
        $price=$my_row['price'];
        $screen=$my_row['screen'];
        $pid=$my_row['pid'];
        require("connection_close.php");

        return new product_price($idprice,$maxqty,$qrt_min,$qrt_max,$price,$screen,$pid);
    }


    public static function add($idprice,$maxqty,$qrt_min,$qrt_max,$price,$screen,$pid)
    {
        require("connection_connect.php");
        $sql = "insert into product_price (idprice,maxqty,qrt_min,qrt_max,price,screen,pid) 
            values ('$idprice', '$maxqty', '$qrt_min', '$qrt_max', '$price' ,'$screen' ,'$pid')";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "add success $result rows";
    }

    public static function update($idprice,$maxqty,$qrt_min,$qrt_max,$price,$screen,$pid)
    {
        require("connection_connect.php");
        $sql = "update product_price set maxqty = '$maxqty' , qrt_min = '$qrt_min' , qrt_max = '$qrt_max' , price = '$price'  ,screen = '$screen' , pid = '$pid'
                where idprice = '$idprice' ";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "update success $result rows";
    }

    public static function delete($idprice)
    {
        require("connection_connect.php");
        $sql = "delete from product_price where idprice = '$idprice'";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "delete success $result rows";
    }

 


}