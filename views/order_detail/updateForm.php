<form method="get" action="">

<label> รหัส <input type="text" name="tracking_id"
    value="<?php echo $detail_order->tracking_id;?>"/> </label><br>
<label> วัน <input type="text" name="date" 
    value="<?php echo $detail_order->date;?>"/> </label><br>
<label> รหัสลูกค้า <input type="text" name="id_customer"
    value="<?php echo $detail_order->id_customer;?>"/> </label><br>
<label> ชื่อสินค้า <input type="text" name="name"
    value="<?php echo $detail_order->name;?>"/> </label><br>    
<label> สีสินค้า <input type="text" name="name_color"
    value="<?php echo $detail_order->name_color;?>"/> </label><br> 
<
<input type="hidden"name="controller"value="detail_order"/>
<input type="hidden" name="id" value="<?php echo $detail_order->tracking_id; ?>"/>
<button type="submit"name="action"value="index">back</button>
<button type="submit"name="action"value="update">update</button>
</form>