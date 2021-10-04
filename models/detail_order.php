<?php class Order_detail{
    public $tracking_id,$date,$id_customer;
    public $name,$name_color;
    public function __construct($tracking_id,$date,$id_customer,$name,$name_color)
    {
        $this->tracking_id = $tracking_id;
        $this->date = $date;
        $this->id_customer = $id_customer;
        $this->name = $name;
        $this->name_color = $name_color;
    }
    public static function getAll()
    {
        $detail_orderList =[];
        require("connect_database.php");
        $sql = "SELECT tracking_id,date,id_customer,name,name_color, FROM Order_detail NATURAL JOIN product_color NATURAL JOIN Customer NATURAL JOIN tracking_order ORDER BY tracking_id";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $tracking_id = $my_row[tracking_id];
            $date = $my_row[date];
            $id_customer = $my_row[id_customer];
            $name_color =$my_row[name_color];
            $name = $my_row[name];
            $detail_orderList[] = new Order_detail($tracking_id,$date,$id_customer,$name_color,$name);
        }
        
        require("connection_close.php");
        return $detail_orderList;
    }
   
    public static function add($tracking_id,$date)
    { 
       require("connect_database.php");
       $sql = "INSERT INTO `tracking_order`(`tracking_id`,`date`)
       values('$tracking_id','$date');";
       $result = $conn->query($sql);
       require("connection_close.php");
       return ;
    }
    public static function update($tracking_id,$date)
    {
        require("connect_database.php");
        $sql="UPDATE `tracking_order` SET `tracking_id`='$tracking_id',`date`='$date' WHERE tracking_id = '$id'";
        $result=$conn->query($sql);
        require("connection_close.php");
        return ;

    }
    public static function get($tracking_id)
    {
        require("connect_database.php");
        $sql="SELECT tracking_id,date,id_customer,name,name_color, FROM Order_detail NATURAL JOIN product_color NATURAL JOIN Customer NATURAL JOIN tracking_order ORDER BY tracking_id";
        $result=$conn->query($sql);
        $my_row=$result->fetch_assoc();
        $tracking_id = $my_row[tracking_id];
        $date = $my_row[date];
        $id_customer = $my_row[id_customer];
        $name_color =$my_row[name_color];
        $name = $my_row[name];
        require("connection_close.php");
        return new Order_detail($tracking_id,$date,$id_customer,$name_color,$name);
    }
    public static function delete($id)
    {
        require("connect_database.php");
        $sql="DELETE FROM `tracking_order` tracking_id = '$id'";
        $result=$conn->query($sql);
        require("connection_close.php");
        return ;
    }
}
?>