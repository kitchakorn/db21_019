<?php echo "<br>Are you sure to delete this detail order<br>";
    echo "$detail_order->tracking_id <br>";
    echo "$detail_order->date<br>";
    echo "$detail_order->name $detail_order->name_color<br>";
    
    

?>
<form method="get" action="">
    <input type="hidden" name="controller" value="detail_order"/>
    <input type="hidden" name="id" value="<?php echo $detail_order->tracking_id;?>"/>
    <button type="submit" name="action" value="index">back</button>
    <button type="submit" name="action" value="delete">delete</button>
</form>