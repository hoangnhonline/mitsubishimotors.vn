<div class="container">
    <div class="row">
        <div class="span12">
            <div class="main">
                <div class="col-main">
                    <div class="padding-s">
                        <?php include 'blocks/slide.php'; ?>

                        <div class="page-title category-title">
                            <h1>Sản phẩm</h1>
                        </div>
                        <ul class="products-grid row">
                            <?php
                                $row=$modelProduct->getProductHome();
                                $i=0;
                                while($row_sp=  mysql_fetch_assoc($row)){
                                    $i++;
                            ?>
                            <li class="item span3 first">
                                <a href="<?php echo $row_sp['product_alias'].'-'.$row_sp['product_id'].'.html' ;?>" title="<?php echo $row_sp['product_name_'.$lang]; ?>" class="product-image"><img src="<?php echo $row_sp['url_images']; ?>" alt="#"/></a>
                                <div class="product-shop">
                                    <h3 class="product-name"><a href="<?php echo $row_sp['product_alias'].'-'.$row_sp['product_id'].'.html' ;?>" title="<?php echo $row_sp['product_name_'.$lang]; ?>"><?php echo $row_sp['product_name_'.$lang]; ?></a></h3>
                                    <p class="desc_grid" style="height: 50px;overflow: hidden;"><?php echo $row_sp['mota_'.$lang]; ?></p>
                                    <div class="price-box">
                                        <span class="regular-price" id="product-price-50-new">
                                            <span class="price"><?php echo number_format($row_sp['price_small']); ?> đ</span> </span>
                                    </div>
                                    
                                </div>
                            </li> 
                            <?php 
                                if($i%4==0){
                                    echo "</ul><ul class='products-grid row'>";
                                }
                            
                            } ?>
                             

                        </ul>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>