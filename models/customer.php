<?php class customer{
    public $id_customer,$name_customer;
    public function __construct($id_customer,$name_customer)
    {
        $this->id_customer =$id_customer;
        $this->name_customer=$name_customer;
    }
    public static function getAll()
    {
        $customerList=[];
        require("connect_database.php");
        $sql="select * from customer";
        $result = $conn->query($sql);
       while($my_row = $result->fetch_assoc()){
            $id_customer=$my_row[id_customer];
            $name_customer=$my_row[name_customer];
            $customerList[] = new customer($id_customer,$name_customer);
    
        }
        require("connection_close.php");
        return $customerList;
    }
        
}?>