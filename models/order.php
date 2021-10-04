<?php class order{
     public $Id_customer;
     public $sid;
    public $name_staff;
    public $name_customer;
    public $address_customer;
    public $tel_customer;

    public function __construct($Id_customer,$sid,$name_customer,$name_staff,$address_customer,$tel_customer)
    {
        $this->Id_customer = $Id_customer;
        $this->name_staff = $name_staff;
        $this->name_customer = $name_customer;
        $this->address_customer=$address_customer;
        $this->tel_phone=$tel_customer;
       
    }
    public static function getAll()
    {
        $orderList=[];
        require("connect.php");
        $sql="SELECT * FROM Customer NATURAL JOIN staff ";
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $Id_customer = $my_row[$id_customer];
            $name_staff= $my_row[$name_staff];
            $name_customer = $my_row[$name_customer];
            $address_customer=$my_row[$address_customer];
            $tel_customer=$my_row[$tel_customer];
            $orderList[] = new Order($Id_customer,$sid,$name_customer,$name_staff,$address_customer,$tel_customer);
        }
        require("connection_close.php");
        return $orderList;


    }
    public static function get($Id_customer)
    {
        require("connect.php");
        $sql="SELECT * FROM Customer NATURAL JOIN staff";
        $result=$conn->query($sql);
        $my_row=$result->fetch_assoc();
        $Id_customer = $my_row[$id_customer];
        $name_staff= $my_row[$name_staff];
        $name_customer = $my_row[$name_customer];
        $address_customer=$my_row[$address_customer];
        $tel_customer=$my_row[$tel_customer];
        require("connection_close.php");
        return new Order(($Id_customer,$sid,$name_customer,$name_staff,$address_customer,$tel_customer);

    }
    public static function search($key)
    {
        require("connect.php");
        $sql="SELECT * FROM Customer NATURAL JOIN staff";
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $Id_customer = $my_row[$id_customer];
            $name_staff= $my_row[$name_staff];
            $name_customer = $my_row[$name_customer];
            $address_customer=$my_row[$address_customer];
            $tel_customer=$my_row[$tel_customer];
            $orderList[] = new Order($Id_customer,$sid,$name_customer,$name_staff,$address_customer,$tel_customer);
        }
        require("connection_close.php");
        return $orderList;

    }
   
     public static function Add($Id_customer,$sid,$name_customer,$name_staff,$address_customer,$tel_customer)
     { 
        
        require("connect.php");
        $sql = "INSERT INTO `order_cutomer`(`id_order_cus`,`date_order`,`id_staff`,`id_customer`)
        values('$id_order_cus','$date_order','$id_staff','$id_customer');";
        $result = $conn->query($sql);
  
        require("connection_close.php");
        return  ;
     }
    
     public static function update($Id_customer,$sid,$name_customer,$name_staff,$address_customer,$tel_customer)
     {
        require("connect.php");
        $sql="UPDATE `order_cutomer` SET `id_order_cus`='$id_order_cus',`date_order`='$date_order',
        `id_staff`='$id_staff',`id_customer`='$id_customer' WHERE id_order_cus = '$id'";
        $result=$conn->query($sql);
        require("connection_close.php");
        return ;
        
     }
     public static function delete($id)
     {
         require_once("connect.php");
         $sql="DELETE FROM `order_cutomer` WHERE id_order_cus='$id'";
         $result=$conn->query($sql);
         require("connection_close.php");
         return ;
     }



}

?>