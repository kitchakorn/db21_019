<table border=1>
add new product_price <a href=?controller=product_price&action=newproduct_price> CLICK</a><br>
<form method="get" action="">
        <input type="text" name="key">
        <input type="hidden" name="controller" value="product_price">
</form>



<tr><td>idprice</td><td>maxqty</td><td>qrt_min</td><td>qrt_max</td><td>price</td><td>screen</td>
<td>pid</td><td>UPDATE</td><td>DELETE</td></tr>
<?php foreach($product_price_list as $product_price)
{
        echo "<tr><td>$product_price->idprice</td><td>$product_price->maxqty</td><td>$product_price->qrt_min</td><td>$product_price->qrt_max</td>
        <td>$product_price->screen</td><td>$product_price->pid</td><td>
        
        <a href=?controller=product_price&action=updateForm&idprice=$product_price->idprice>update</a>
        </td><td>
        
        <a href=?controller=product_price&action=deleteConfirm&idprice=$product_price->idprice>delete</a>
        </td></tr>";
}
echo "</table>";
?>