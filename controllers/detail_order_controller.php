<?php class Detail_Order_Controller
{
    public function index()
    {
        $detail_order_List= detail_order::getAll();
        require_once("./views/detail_order/index_order_detail.php");
    }
    public function newdetail_order()
    {
        $order_List = Order::getAll();
        $color_of_product_List = product_color::getAll();
        require_once('./views/detail_order/newDetail_order.php');
    }
    public function adddetail_order()
    { 
        $tracking_id = $_GET['tracking_id'];
        $date = $_GET['date'];
        $id_customer = $_GET['id_customer'];
        $name = $_GET['name'];
        $name_color = $_GET['name_color'];
        detail_order::add($tracking_id,$date,$id_customer,$name_color,$name);
        Detail_Order_Controller::index();
    }
    public function updateForm()
    {
        $tracking_id = $_GET['tracking_id'];
        $detail_order=detail_order::get( $tracking_id);
        $order_List = Order::getAll();
        $color_of_product_List = product_color::getAll();
        require_once('./views/detail_order/updateForm.php');

    }
    public function update()
    {
        $tracking_id = $_GET['tracking_id'];
        $date = $_GET['date'];
        $id_customer = $_GET['id_customer'];
        $name = $_GET['name'];
        $name_color = $_GET['name_color'];
        detail_order::update($tracking_id,$date,$id_customer,$name_color,$name);
        DeDetail_Order_Controller::index();
    }
    public function deleteConfirm()
    {
        $tracking_id = $_GET['tracking_id'];
        $detail_order=detail_order::get($tracking_id);
        require_once('./views/detail_order/deleteConfirm.php');

    }
    public function delete()
    {
        $tracking_id = $_GET['tracking_id'];
        detail_order::delete( $tracking_id);
        Detail_Order_Controller::index();
    }


}
?>