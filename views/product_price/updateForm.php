<form align=center method="get" action="">


<label>maxqty <input type="text" name="maxqty" 
    value="<?php echo $product_price->maxqty; ?>"/> </label><br>

<label>qrt_min <input type="int" name="qrt_min" 
    value="<?php echo $product_price->qrt_min; ?>"/> </label><br>

<label>qrt_max <input type="int" name="qrt_max" 
    value="<?php echo $product_price->qrt_max; ?>"/> </label><br>

<label>price <input type="int" name="price" 
    value="<?php echo $product_price->price; ?>"/> </label><br>

<label>screen <input type="int" name="screen" 
    value="<?php echo $product_price->screen; ?>"/> </label><br>




<label>pid<select name="pid">
                    <?php
                        foreach($product_price_list as $productp)
                        {
                            echo "<option value = $productp->pid";
                            if($productp->pid == $product->pid)
                            {
                                echo " selected = selected ";
                            }
                            echo ">$productp->pid</option>";
                        }
                    ?>
</select></label><br>


<input type="hidden" name="controller" value="product_price"/>
<button type="submit" name="action" value="index"> Back </button>
<button type="submit" name="action" value="update"> update </button>
</form>