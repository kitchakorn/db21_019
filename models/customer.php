<?php class customer{
    public $Id_customer,$name_customer;
    public function __construct($Id_customer,$name_customer)
    {
        $this->Id_customer =$Id_customer;
        $this->name_customer=$name_customer;
    }
    public static function getAll()
    {
        $customerList=[];
        require("connect_database.php");
        $sql="select * from Customer";
        $result = $conn->query($sql);
       while($my_row = $result->fetch_assoc()){
            $Id_customer=$my_row[Id_customer];
            $name_customer=$my_row[name_customer];
            $customerList[] = new customer($Id_customer,$name_customer);
    
        }
        require("connection_close.php");
        return $customerList;
    }
        
}?>