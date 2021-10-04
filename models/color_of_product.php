<?php class color_of_product{
    public $id_cop,$id_product,$id_color;
    public $name_color,$name_product;
    public function __construct($id_cop,$id_product,$id_color,$name_color,$name_product)
    {
        $this->id_cop = $id_cop;
        $this->id_product = $id_product;
        $this->id_color = $id_color;
        $this->name_product = $name_product;
        $this->name_color = $name_color;
        
    }
    public static function getAll()
    {
        $color_of_productList =[];
        require("connect_database.php");
        $sql = "SELECT id_cop,id_product,product.name_product,id_color,color.name_color FROM color_of_product NATURAL JOIN product NATURAL JOIN color";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $id_cop = $my_row[id_cop];
            $id_product = $my_row[id_product];
            $id_color = $my_row[id_color];
            $name_product = $my_row[name_product];
            $name_color = $my_row[name_color];
            $color_of_productList[] = new color_of_product($id_cop,$id_product,$id_color,$name_color,$name_product);
        }
        require("connection_close.php");
        return $color_of_productList;
        ;
    }
}
?>