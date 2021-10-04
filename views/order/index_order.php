<table border=1>
new order <a href=?controller=order&action=newOrder> click</a><br>

<tr><td>id_order</td><td>name_customer</td><td>name_staff</td><td>address_coustomer</td><td>tel_coustomer</td><td>update</td><td>delete</td></tr>
<?php foreach($order_List as $order)
{
        echo "<tr><td>$order->id_order</td>
        <td>$order->name_customer</td>
        <td>$order->name_stadff</td>
        <td>$order->address_customer</td>
        <td>$order->tel_coustomer</td>
      
        <a href=?controller=order&action=updateForm&id_order_cus=$order->id_order>update</a>
        </td><td>
        <a href=?controller=order&action=deleteConfirm&id_order_cus=$order->id_order>delete</a>
        </td></tr>";
}
echo "</table>";
?>