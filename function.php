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

function search($value_2) {
    $search = $value_2;
    global $link;
    $sql = "SELECT * FROM `product` WHERE `name` LIKE '%$search%'";

    $result = mysqli_query($link, $sql);
    while($select_while = mysqli_fetch_assoc($result)) {
        ?>

        
   
        <div class="content row product-grid">
   
            <div class="col-md-3    ">
            <div class="card mb-4 shadow-sm">
            <img src="<?=$select_while['link'];?>" alt="">

            

            <div class="card-body"><p class="card-text"><h1><?php echo $select_while['category'].' '.$select_while['name'];?></h1></p>
            <a href="/">
            <button type="button" class="btn btn-lg btn-block btn-primary"><h4><?php echo $select_while['price']; ?>₴</h4></button>
            </a>
            </div></div></div></div>



        <?php
        }
    }

function add_product($v_1, $v_2, $v_3, $v_4, $v_5) {
    global $link;
    //echo $v_1;echo $v_2;echo $v_3;echo $v_4;echo $v_5;

    if(!empty($v_2) && !empty($v_3) && !empty($v_4) && !empty($v_5))
    {   
        $sql = "INSERT INTO `product`( `name`, `price`, `category`, `link`, `description`) values ('".$v_1."', '".$v_2."', '".$v_3."', '".$v_4."', '".$v_5."')"; 
        $link = mysqli_connect('localhost','root','','yeezy');
        $result = mysqli_query($link, $sql); ?>
        <div class="alert alert-success">
            <strong>Успех!</strong> Запись добавлена.
        </div>
        
<?php
    } else { ?>
        <div class="alert alert-danger">
            <strong>Ошибка!</strong> У вас есть незаполненые поля, попробуйте заполнить все правильно.
        </div>
<?php
    }
    
}

function get_sneakers($value_1) 
{
    global $link;
    $sql = "SELECT * FROM `product`";
    $result = mysqli_query($link, $sql);
    $rows = mysqli_num_rows($result);
    ?>
    
<div class="album py-5 bg-light">
    <div class="container">
        <div class="row">
        <?php

        for($i=1; $i<=$rows; $i++) {
            $row = mysqli_fetch_row($result);
            if($row[3] == $value_1)
            { 
            ?>
                <div class="col-md-3    ">
                <div class="card mb-4 shadow-sm">
                <img src="<?=$row[5]?>" alt="">
                

                
                    <div class="card-body"><p class="card-text"><?php echo $row[3].' '.$row[1];?></p>
                    <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <form action="/product/?<?php echo$row[0];?>" method "get">
                    <a href="/product/?<?php echo$row[0];?>">
                    <button type="button" class="btn btn-lg btn-block btn-primary"><?php echo$row[2];?><span class="currency">₴</span></button>
                    </a></form>
    
        </div>
                </div></div></div></div>
    <?php
           
            } }?>
                
        </div>
    </div>
</div>
         <?php
    
}



function get_product_url($value_1, $id) {
    global $link;
    $sql = "SELECT * FROM `product` where `id` = ".$id."";
    $result = mysqli_query($link, $sql);
    $rows = mysqli_num_rows($result);
    for($i=0; $i<=$rows; $i++) { 
        $row = mysqli_fetch_row($result);
        ?>
        <div class="breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 inner">
                    <?php
                    if($value_1 == "YEEZY 350 V2") {
                        $link_url = "yeezy-boost-350-v2";
                    }
                    if($value_1 == "YEEZY 380") {
                        $link_url = "yeezy-boost-380";
                    }
                    if($value_1 == "YEEZY 500") {
                        $link_url = "yeezy-boost-500";
                    }
                    if($value_1 == "YEEZY 700") {
                        $link_url = "yeezy-boost-700";
                    }
                    if($row[3] = $value_1) { ?>
                      <a href="/<?=$link_url;?>/"><img src="/img/home.png" width="16px" height="16px" alt=""><?php echo $row[3];?></a> 
                      <span class="current"><?php echo ' / '.$row[3]. ' '.$row[1];?></span>
                       <?php
                       $i = $rows;
                    }
                    
                    ?>
                    </div>
                </div>
            </div>
        </div>
       
         
        
        <div class="container">
        <div class="row">
        <div class="col-md-6    ">
        <div class="card mb-3 shadow-sm"><img src="<?php echo $row[5];?>" alt="" class=""></div></div>
        
        <div class="col-lg-4 info">
        <h1><?php echo $row[3]. ' '.$row[1];?></h1> 
       
        <select class="form-select" id="inputGroupSelect01">
            <option selected>Choose...</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select></div>
        </div></div>
        
<?php
    }
}

function get_category($id_1) {
    global $link;
    $sql = "SELECT `category` FROM `product` where `id` = ".$id_1."";
    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_row($result);
    return $row[0];
    
}

?>



