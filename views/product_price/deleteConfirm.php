<?php echo "<br>Are you sure to delete <br>

<br> $product_price->idprice $product_price->maxqty $product_price->qrt_min $product_price->qrt_max $product_price->price $product_price->screen $product_price->pid<br>";?>

<form method="get" action="">
<input type="hidden" name="controller" value="product_price"/>
<input type="hidden" name="misid" value="<?php echo $product_price->idprice;?>"/>
<button type="submit" name="action" value="index_product_price"> Back</button>
<button type="submit" name="action" value="delete"> delete</button>
</form>