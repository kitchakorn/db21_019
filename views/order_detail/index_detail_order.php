<?php 
    echo "นายกฤชกรณ์ ขวัญยืน    6020551750";
?>
<table border = 1>   
<br>new Detail_order <a href=?controller=detail_order&action=newdetail_order> click</a><br>

<form method="get" action="">
        <input type="text" name="key">
        <input type="hidden" name="controller" value="detail_order">
        <button type="submit" name="action" value="search">
search</button>
</form>

<tr> <td>tracking_id</td> <td>date</td> <td>id_customer</td><td>name</td> <td>name_color</td> <td>update</td> <td>delete</td> </tr> 
<?php foreach($detail_order_List as $detail_order)
{
    echo "<tr> <td>$detail_order->tracking_id</td> 
    <td>$detail_order->date</td> 
    <td>$detail_order->id_customer</td> 
    <td>$detail_order->name</td> 
    <td>$detail_order->name_color</td>   
    <td><a href=?controller=detail_order&action=updateForm&tracking_id=$detail_order->tracking_id>update</a></td> 
    <td><a href=?controller=detail_order&action=deleteConfirm&tracking_id=$detail_order->tracking_id>delete</td> 
    </tr>";
}
echo "</table>";
?>