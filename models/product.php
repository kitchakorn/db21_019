<?php class product{

    public $pid,$name,$detail,$minimumstock,$id_typeproduct;
    
    public function __construct($pid,$name,$detail,$minimumstock,$id_typeproduct)
    {
        $this->id_product = $pid;
        $this->name_product = $name
        $this->description_product = $detail;
        $this->min_product = $minimumstock;
        $this->id_typeproduct = $id_typeproduct;
        
    }
    public static function getAll()
    {
        $productList =[];
        require("connect_database.php");
        $sql = "select * from product";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $pid = $my_row[$id_product];
            $name = $my_row[$name];
            $detail = $my_row[$detail]
            $minimumstock = $my_row[$minimumstock];
            $id_typeproduct = $my_row[$id_typeproduct];
            $productList[] = new product(($pid,$name,$detail,$minimumstock,$id_typeproduct);
        }
        require("connection_close.php");
        return $productList;
        ;
    }
}
?>