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
       
        <div class="props">
            <div class="left">
              <div class="size-select">
                <div class="toggler">
                  <span>Выберите Размер</span>
                </div>
                <div class="hover">
                  <div class="language">
                    <span class="active">Rus </span>
                  </div>
                  <div class="size-blocks">
                    <div class="outer active">
                      <input type="hidden" name="option[16455]" value="" class="grid-option">
                      <div class="size-block">
                        <button data-product-option-id="16455" data-product-option-value-id="133768"
                          class="size-button">36</button>
                        <button data-product-option-id="16455" data-product-option-value-id="133769"
                          class="size-button">37</button>
                        <button data-product-option-id="16455" data-product-option-value-id="133770"
                          class="size-button">38</button>
                        <button data-product-option-id="16455" data-product-option-value-id="133771"
                          class="size-button">39</button>
                        <button data-product-option-id="16455" data-product-option-value-id="133772"
                          class="size-button">40</button>
                      </div>
                    </div>
                    <div class="outer">
                      <div class="size-block">
                        <button data-product-option-id="16455" data-product-option-value-id="133768"
                          class="size-button">36</button>
                        <button data-product-option-id="16455" data-product-option-value-id="133769"
                          class="size-button">37</button>
                        <button data-product-option-id="16455" data-product-option-value-id="133770"
                          class="size-button">38</button>
                        <button data-product-option-id="16455" data-product-option-value-id="133771"
                          class="size-button">39</button>
                        <button data-product-option-id="16455" data-product-option-value-id="133772"
                          class="size-button">40</button>
                      </div>
                    </div>
                  </div>
                  <div class="size-grid">
                    <a href="https://www-yeezy.com/#sizetbl" class="popup-with-form">Таблица размеров</a>
                  </div>
                </div>
              </div>
              <div class="d-none d-md-block">
                <div class="selected-props">
                  <div class="go-to-info">
                    <a href="https://www-yeezy.com/#detail-description" class="goscroll">Перейти к описанию</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="right">
              <div class="instock">
                <span>Есть в наличии</span>
              </div>
              <div class="delivery">
                <span>Курьер доставит завтра</span>
              </div>
              <div class="price">
                <p>10 990<span class="currency">руб.</span></p>
              </div>

              <div class="d-md-none">
                <div class="selected-props">
                  <div class="go-to-info">
                    <a href="https://www-yeezy.com/#detail-description" class="goscroll">Перейти к описанию</a>
                  </div>
                </div>
              </div>
              
              <div class="controls">
            <div class="left">
              <button class="btn btn-a2c">Добавить в корзину</button>
              <div class="product-info">
                <input type="hidden" class="product-name" value="Yeezy Boost 350 V2 Antlia">
                <input type="hidden" class="product-price" value="10990">
                <input type="hidden" class="product-brand" value="">
                <input type="hidden" class="product-category" value="">
                <input type="hidden" class="product-variant" value="">
              </div>
              <script type="text/javascript">

                  function openbox(id) {
                      display = document.getElementById(id).style.display;

                      if (display == 'none') {
                          document.getElementById(id).style.display = 'block';
                      } else {
                          document.getElementById(id).style.display = 'none';
                      }
                  } </script>

            </div><div class="right">
              <button class="btn btn-fb" style="background-color:grey"><a href="#" onclick="openbox('fancybox-stage');">купить в 1 клик</a></button>

            </div>
            <div class="fancybox-stage" style="display:none"><div class="fancybox-slide fancybox-slide--html fancybox-slide--current fancybox-slide--complete"><div style="display: inline-block;" id="fast-purchase" class="popup fancybox-content" data-selectable="true"><button data-fancybox-close="" class="fancybox-close-small" title="Close"><svg viewBox="0 0 32 32"><path d="M10,10 L22,22 M22,10 L10,22"></path></svg></button><div class="popupform">
  <div class="title">Купить в 1 клик</div>
  <div class="subtitle">Заполните форму для оформления заказ</div>
  <input type="hidden" name="product_id" value="1523">
  <div class="form-input">
    <label>
      <span>ФИО</span>
      <input type="text" class="input-field input-name" placeholder="Введите Ваше имя" name="name" id="one-name">
    </label>
  </div>
  <div class="form-input">
    <label>
      <span>Телефон</span>
      <input type="text" class="phone-field input-phone" placeholder="Введите телефон" name="phone" id="one-phone">
    </label>
  </div>
  <div class="form-input">
    <label>
      <span>Размер</span>
    </label>
                  <div class="size-select">
          <div class="toggler">
            <span>Выберите Размер</span>
          </div>
          <div class="hover">
            <div class="language">
              <span class="active">Rus </span>
              <span> en</span>
            </div>
            <div class="size-blocks">
              <div class="outer active">
                <input type="hidden" name="option[16455]" value="" class="grid-option">
                <div class="size-block">
                                      <button data-product-option-id="16455" data-product-option-value-id="133768" class="size-button">36</button>
                                      <button data-product-option-id="16455" data-product-option-value-id="133769" class="size-button">37</button>
                                      <button data-product-option-id="16455" data-product-option-value-id="133770" class="size-button">38</button>
                                      <button data-product-option-id="16455" data-product-option-value-id="133771" class="size-button">39</button>
                                      <button data-product-option-id="16455" data-product-option-value-id="133772" class="size-button">40</button>
                                  </div>
              </div>
              <div class="outer">
                <div class="size-block">
                                      <button data-product-option-id="16455" data-product-option-value-id="133768" class="size-button">36</button>
                                      <button data-product-option-id="16455" data-product-option-value-id="133769" class="size-button">37</button>
                                      <button data-product-option-id="16455" data-product-option-value-id="133770" class="size-button">38</button>
                                      <button data-product-option-id="16455" data-product-option-value-id="133771" class="size-button">39</button>
                                      <button data-product-option-id="16455" data-product-option-value-id="133772" class="size-button">40</button>
                                  </div>
              </div>
            </div>
            <div class="size-grid">
              <a href="#">Таблица размеров</a>
            </div>
          </div>
        </div>
            </div>
  <div class="form-controls">
    <button class="btn btn-a2c" id="oneclick-order">Оформить заказ</button>
    <div class="product-info">
      <input type="hidden" class="product-id" value="1523">
      <input type="hidden" class="product-name" value="Yeezy Boost 350 V2 Antlia">
      <input type="hidden" class="product-price" value="10990">
      <input type="hidden" class="product-brand" value="">
      <input type="hidden" class="product-category" value="Yeezy Boost 350 V2">
      <input type="hidden" class="product-variant" value="">
    </div>
  </div>
</div></div></div></div>
            </div>
          </div></div>
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



