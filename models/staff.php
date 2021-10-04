<?php class staff{
    public $sid,$name_staff;
    public function __construct($sid,$name_staff)
    {
        $this->sid =$sid;
        $this->name_staff=$name_staff;
    }
    public static function getAll()
    {
        $staffList=[];
        require("connect_database.php");
        $sql="select * from staff";
        $result = $conn->query($sql);
       while($my_row = $result->fetch_assoc()){
            $sid=$my_row[sid];
            $name_staff=$my_row[name_staff];
            $staffList[] = new staff($sid,$name_staff);
    
        }
        require("connection_close.php");
        return $staffList;
    }
        
}?>
