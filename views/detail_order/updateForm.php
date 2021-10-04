<form method="get" action="">


<label> จำนวนสีสกรีน <input type="number" name="print_color" 
    value="<?php echo $detail_order->print_color;?>"/> </label><br>
<label> จำนวนที่สั่ง <input type="number" name="amount_order_cus"
    value="<?php echo $detail_order->amount_order_cus;?>"/> </label><br>



    </select> </label><br>

<label>สินค้า <select name="id_cop">
    <?php foreach($color_of_product_List as $cop) 
        {echo "<option value = $cop->id_cop";
        if($cop->id_cop==$detail_order->id_cop){echo " selected='selected'";}
        echo "> $cop->name_product $cop->name_color</option>";}
        ?>
    </select></label><br>
<input type="hidden"name="controller"value="detail_order"/>
<input type="hidden" name="id" value="<?php echo $detail_order->id_doc; ?>"/>
<button type="submit"name="action"value="index">back</button>
<button type="submit"name="action"value="update">update</button>
</form>