
<form method="get" action="">
<label> รหัสรายละเอียด <input type="text" name="id_doc"/> </label><br>
<label> จำนวนสีสกรีน <input type="number" name="print_color"/> </label><br>
<label> จำนวนที่สั่ง <input type="number" name="amount_order_cus"/> </label><br>
<label> รหัสออเดอร์ <select name="id_order_cus">
    <?php foreach($order_List as $ord){echo "<option value = $ord->id_order_cus> $ord->id_order_cus</option>";}?>
</select> </label><br>

<label>สินค้า <select name="id_cop">
    <?php foreach($color_of_product_List as $cop) {echo "<option value = $cop->id_cop> $cop->name_product $cop->name_color</option>";}?>
</select></label><br>

<input type="hidden" name="controller" value = "detail_order"/>
<button type="submit"name="action" value = "index"> back </button>
<button type="submit"name="action" value= "adddetail_order"> save </button>

</form>