
<form method="get" action="">
<label> รหัส <input type="text" name="tracking_id"/> </label><br>
<label> วัน <input type="text" name="date"/> </label><br>
<label> รหัสลูกค้า <input type="text" name="id_customer"/> </label><br>
<label> ชื่อสินค้า <input type="text" name="name"/> </label><br>
<label> สีสินค้า <input type="text" name="name_color"/> </label><br>


<input type="hidden" name="controller" value = "detail_order"/>
<button type="submit"name="action" value = "index"> back </button>
<button type="submit"name="action" value= "adddetail_order"> save </button>

</form>