<?php class range_price{
    public $id_range,$min_range,$max_range,$price,$color_price,$id_product;
    public function __construct($id_range,$min_range,$max_range,$price,$color_price,$id_product){
    $this->id_range = $id_range;
    $this->min_range = $min_range;
    $this->max_range = $max_range;
    $this->price = $price;
    $this->color_price = $color_price;
    $this->id_product = $id_product; 
    }
    public static function getAll(){
        $range_priceList = [];
        require("connect_database.php");
        $sql = " SELECT * FROM range_price ";
        $result = $conn->query($sql);
         while($my_row = $result->fetch_assoc()){
         $id_range = $my_row[id_range];
         $min_range = $my_row[min_range];
         $max_range = $my_row[max_range];
         $price = $my_row[price];
         $color_price = $my_row[color_price];
        $id_product = $my_row[id_product];
        $range_priceList[] = new range_price($id_range,$min_range,$max_range,$price,$color_price,$id_product);
        }
        require("connection_close.php");
        return $range_priceList;
    }
    public static function get($id_range){
        require("connect_database.php");
        $sql="SELECT * FROM range_price ";
        $result=$conn->query($sql);
        $my_row=$result->fetch_assoc();
        $id_range = $my_row[id_range];
        $min_range = $my_row[min_range];
        $max_range = $my_row[max_range];
        $price = $my_row[price];
        $color_price = $my_row[color_price];
        $id_product = $my_row[id_product];
        require("connection_close.php");
        return new range_price($id_range,$min_range,$max_range,$price,$color_price,$id_product);
        }
    public static function search($key)
    {
        $range_priceList = [];
        require("connect_database.php");
        $sql="SELECT * FROM range_price NATURAL JOIN product where id_product like '%$key%' or id_range like '%$key%' or min_range like '%$key%' or max_range like '%$key%' or price like '%$key%' or color_price like '%$key%' ";
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $id_range = $my_row[id_range];
            $min_range = $my_row[min_range];
            $max_range = $my_row[max_range];
            $price = $my_row[price];
            $color_price = $my_row[color_price];
            $id_product = $my_row[id_product];
            $range_priceList[] = new range_price($id_range,$min_range,$max_range,$price,$color_price,$id_product);
        }
            require("connection_close.php");
            return $range_priceList;
    
    }
    public static function Add($id_range,$min_range,$max_range,$price,$color_price,$id_product)
     { 
        
        require("connect_database.php");
        $sql = "INSERT INTO `range_price`(`id_range`,`min_range`,`max_range`,`price`,`color_price`,`id_product`)
        values('$id_range','$min_range','$max_range','$price','$color_price','$id_product')";
        $result = $conn->query($sql);
  
        require("connection_close.php");
        return  ;
     }
     public static function delete($id)
     {
         require_once("connect_database.php");
         $sql="DELETE FROM `range_price` WHERE id_range='$id' ";
         $result=$conn->query($sql);
         require("connection_close.php");
         return ;
     }
     public static function update()
     {
         
     }
    




  
}?>