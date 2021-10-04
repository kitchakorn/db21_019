<?php echo "<br>Are you sure to delete this detail order<br>";
    echo "รหัสรายละเอียด : $detail_order->id_doc <br>";
    echo "รหัสออร์เดอร์ : $detail_order->id_order_cus<br>";
    echo "สินค้า : $detail_order->name_product $detail_order->name_color<br>";
    echo "จำนวนสีสกรีน : $detail_order->print_color<br>";
    echo "จำนวนที่สั่ง : $detail_order->amount_order_cus<br>";
    

?>
<form method="get" action="">
    <input type="hidden" name="controller" value="detail_order"/>
    <input type="hidden" name="id" value="<?php echo $detail_order->id_doc;?>"/>
    <button type="submit" name="action" value="index">back</button>
    <button type="submit" name="action" value="delete">delete</button>
</form>