<?php class product{

    public $id_product;
    public $name_product;
    public $description_product;
    public $min_product;
    public $id_category;
    public $id_type;
    
    public function __construct($id_product,$name_product,$description_product,$min_product,$id_category,$id_type)
    {
        $this->id_product = $id_product;
        $this->name_product = $name_product;
        $this->description_product = $description_product;
        $this->min_product = $min_product;
        $this->id_category = $id_category;
        $this->id_type = $id_type;
        
    }
    public static function getAll()
    {
        $productList =[];
        require("connect_database.php");
        $sql = "select * from product";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $id_product = $my_row[id_product];
            $name_product = $my_row[name_product];
            $description_product = $my_row[description_product];
            $min_product = $my_row[min_product];
            $id_category = $my_row[id_category];
            $id_type = $my_row[id_type];
            $productList[] = new product($id_product,$name_product,$description_product,$min_product,$id_category,$id_type);
        }
        require("connection_close.php");
        return $productList;
        ;
    }
}
?>