<?php
function counts($value_1) 
{
    global $link;
    $sql = "SELECT * FROM `product`";
    $result = mysqli_query($link, $sql);
    $rows = mysqli_num_rows($result);
    //return $rows;

    $count = 0;

    for($j = 1; $j<=$rows;$j++) {
        $row = mysqli_fetch_row($result);
        if($row[3] == $value_1)
        {
            $count += 1;
        }
    }

    return $count;
}

function get_sneakers($value_1) 
{
    $trash = 0;
    global $link;
    $sql = "SELECT * FROM `product`";
    $result = mysqli_query($link, $sql);
    $rows = mysqli_num_rows($result);

    for($i=1; $i<=$rows; $i++) {
        $row = mysqli_fetch_row($result);
        if($row[3] == $value_1)
        { 
        ?>
            <div class="bottom">
            <div class="featured-slider slick-initialized slick-slider">
            <img src="<?=$row[5]?>" alt="">
            

            <div class="info">
                <div class="price">
                    <p><?php echo $row[2];?><span class="currency">₴</span></p>
                </div>
                <div class="title"><a
                        href="https://www-yeezy.com/index.php?route=product/product&amp;path=1075&amp;product_id=1523"><?php echo$row[1].'<br> ';?></a></div>
            </div>
            
           

       
            </div>
            </div>
 
        <?php
        }
            

    }

}


?>