<table border=1>
<br>new order <a href=?controller=order&action=newOrder> click</a><br>
<br><tr><td>name_customer</td><td>date_order</td><td>address_customer</td><td>tel_customer</td><td>name_staff</td><td>update</td><td>delete</td></tr></br>
<?php foreach($order_List as $order)
{
        echo "
        <td>$order->name_customer</td>
        <td>$order->date_order</td>
        <td>$order->address_customer</td>
        <td>$order->tel_customer</td>
        <td>$order->name_staff</td><td>
        <a href=?controller=order&action=updateForm&id_order_cus=$order->id_order_cus>update</a>
        </td><td>
        <a href=?controller=order&action=deleteConfirm&id_order_cus=$order->id_order_cus>delete</a>
        </td></tr>";
}
echo "</table>";
?>