<?php class staff{
    public $id_staff,$fname_staff;
    public function __construct($id_staff,$fname_staff)
    {
        $this->id_staff =$id_staff;
        $this->fname_staff=$fname_staff;
    }
    public static function getAll()
    {
        $staffList=[];
        require("connect_database.php");
        $sql="select * from staff";
        $result = $conn->query($sql);
       while($my_row = $result->fetch_assoc()){
            $id_staff=$my_row[id_staff];
            $fname_staff=$my_row[fname_staff];
            $staffList[] = new staff($id_staff,$fname_staff);
    
        }
        require("connection_close.php");
        return $staffList;
    }
        
}?>
