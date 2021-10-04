<?php class detail_order{
    public $id_doc,$print_color,$amount_order_cus,$id_order_cus,$id_cop;
    public $name_product,$name_color;
    public function __construct($id_doc,$print_color,$amount_order_cus,$id_order_cus,$id_cop,$name_product,$name_color)
    {
        $this->id_doc = $id_doc;
        $this->print_color = $print_color;
        $this->amount_order_cus = $amount_order_cus;
        $this->id_order_cus = $id_order_cus;
        $this->id_cop = $id_cop;
        $this->name_color = $name_color;
        $this->name_product = $name_product;
    }
    public static function getAll()
    {
        //echo "hello";
        $detail_orderList =[];
        require("connect_database.php");
        $sql = "SELECT id_doc,id_order_cus,id_cop,product.name_product,color.name_color,print_color,amount_order_cus FROM detail_order_customer NATURAL JOIN color_of_product NATURAL JOIN product NATURAL JOIN color ORDER BY id_order_cus,id_doc";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $id_doc = $my_row[id_doc];
            $print_color = $my_row[print_color];
            $amount_order_cus = $my_row[amount_order_cus];
            $id_order_cus = $my_row[id_order_cus];
            $id_cop = $my_row[id_cop];
            $name_color =$my_row[name_color];
            $name_product = $my_row[name_product];
            $detail_orderList[] = new detail_order($id_doc,$print_color,$amount_order_cus,$id_order_cus,$id_cop,$name_product,$name_color);
        }
        //echo $id_cop;
        require("connection_close.php");
        return $detail_orderList;
    }
    public static function search($key)
    {
        $detail_orderList=[];
        require("connect_database.php");
        $sql = "SELECT id_doc,id_order_cus,id_cop,product.name_product,color.name_color,print_color,amount_order_cus FROM detail_order_customer NATURAL JOIN color_of_product NATURAL JOIN product NATURAL JOIN color
         WHERE (id_doc like'%$key%' or amount_order_cus like'%$key%' or id_order_cus like'%$key%' or id_cop like'%$key%' or name_color like '%$key%' or name_product like '%$key%') ORDER BY id_order_cus,id_doc";
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $id_doc = $my_row[id_doc];
            $print_color = $my_row[print_color];
            $amount_order_cus = $my_row[amount_order_cus];
            $id_order_cus = $my_row[id_order_cus];
            $id_cop = $my_row[id_cop];
            $name_color =$my_row[name_color];
            $name_product = $my_row[name_product];
            $detail_orderList[] = new detail_order($id_doc,$print_color,$amount_order_cus,$id_order_cus,$id_cop,$name_product,$name_color);
        }
        
        require("connection_close.php");
        return $detail_orderList;
    }
    public static function add($id_doc,$print_color,$amount_order_cus,$id_order_cus,$id_cop)
    { //echo "haha";
       require("connect_database.php");
       $sql = "INSERT INTO `detail_order_customer`(`id_doc`,`print_color`,`amount_order_cus`,`id_order_cus`,`id_cop`)
       values('$id_doc','$print_color','$amount_order_cus','$id_order_cus','$id_cop');";
       $result = $conn->query($sql);
       require("connection_close.php");
       return ;
    }
    public static function update($id_doc,$print_color,$amount_order_cus,$id_order_cus,$id_cop,$id)
    {
        require("connect_database.php");
        $sql="UPDATE `detail_order_customer` SET `id_doc`='$id_doc',`print_color`='$print_color',
        `amount_order_cus`='$amount_order_cus',`id_order_cus`='$id_order_cus',`id_cop`='$id_cop' WHERE id_doc = '$id'";
        $result=$conn->query($sql);
        require("connection_close.php");
        return ;

    }
    public static function get($id_doc)
    {
        require("connect_database.php");
        $sql="SELECT id_doc,id_order_cus,id_cop,product.name_product,color.name_color,print_color,amount_order_cus FROM detail_order_customer NATURAL JOIN color_of_product NATURAL JOIN product NATURAL JOIN color WHERE id_doc='$id_doc' ORDER BY id_order_cus,id_doc";
        $result=$conn->query($sql);
        $my_row=$result->fetch_assoc();
        $id_doc = $my_row[id_doc];
        $print_color = $my_row[print_color];
        $amount_order_cus = $my_row[amount_order_cus];
        $id_order_cus = $my_row[id_order_cus];
        $id_cop = $my_row[id_cop];
        $name_color =$my_row[name_color];
        $name_product = $my_row[name_product];
        require("connection_close.php");
        return new detail_order($id_doc,$print_color,$amount_order_cus,$id_order_cus,$id_cop,$name_product,$name_color);
    }
    public static function delete($id)
    {
        require("connect_database.php");
        $sql="DELETE FROM `detail_order_customer` WHERE id_doc ='$id'";
        $result=$conn->query($sql);
        require("connection_close.php");
        return ;
    }
}
?>