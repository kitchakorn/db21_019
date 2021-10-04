
<form method="get" action="">
<label>รหัส <input type="text" name="id_order" 
        value="<?php echo $order->id_order_cus;?>"/></label><br>
<label>วันที่ <input type="date" name="date_order"
        value="<?php echo $order->date_order;?>"/></label><br>
<label>ชื่อพนักงาน <select name="name_staff">
    <?php foreach($staff_List as $dep) {
        echo "<option value = $dep->id_staff";
        if($dep->id_staff==$order->id_staff){echo "selected='selected'";}
         echo "$dep->name_staff</option>";}
    ?>
    </select></label><br>
<label>ชื่อลูกค้า <select name="name_customer">
    <?php foreach($customer_List as $dep) {
        echo "<option value = $dep->id_customer";
        if($dep->id_customer==$order->id_customer){echo "selected='selected'";}
         echo "$dep->name_customer</option>";}
    ?>
</select></label><br>

<input type="hidden"name="controller"value="order"/>
<button type= "submit"name="action"value="index">back</button>
<button type= "submit"name="action"value="update">update</button>

</form>
