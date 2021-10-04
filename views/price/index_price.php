<table border=1>
new product_price<a href=?controller=student&action=newproduct_price> click</a><br>
<tr><td>idprice</td><td>maxqty</td><td>qrt_min</td><td>qrt_max</td><td>price</td>
<td>pid</td><td>update</td><td>delete</td></tr>
<?php foreach($product_price_List as $product_price)
{
        echo "<tr><td>$product_price->idprice</td><td>$product_pricee->maxqty</td><td>$product_price->qrt_min</td><td>$product_price->qrt_max</td>
        <td>$product_price->price</td><td>$product_price->pid</td><td>update</td><td>delete</td></tr>";
}
echo "</table>";
?>