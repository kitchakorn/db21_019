<p style="color:black;font-size:30px;" align=center> New Mission </p>
<form align=center method="get"action="">
<label> idprice                <input type="text" name="idprice"/></label><br>
<label> maxqty         <input type="text" name="maxqty"/></label><br>
<label> qrt_min    <input type="text" name="qrt_min"/></label><br>
<label> qrt_max           <input type="text" name="qrt_max"/></label><br>
<label> price           <input type="text" name="price"/></label><br>
<label> screen           <input type="text" name="screen"/></label><br>


<label>pid <select name="pid">
        <?php foreach($product_price_list as $pd){echo "<option value = $pd->pid>$pd->name</option>";}?>
</select></label><br>

<input type="hidden" name="controller" value="product_price"/>
<button type="submit" name="action" value="index"> Back </button>
<button type="submit" name="action" value="addproduct_price"> Save </button>
</form>