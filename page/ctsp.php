<?php
   $url= $row_sp['url_images'];
   $arr = explode("/", $url);      
   $url_nho =  end($arr);
?>
<div class="container">
    <div class="row">
        <div class="span12">
            <div class="main">
                <div class="breadcrumbs">
                    <ul>
                        <li class="home">
                            <a href="#" title="Go to Home Page">Trang chủ</a>
                            <span>></span>
                        </li>
                        <li class="home">
                            <a href="san-pham.html" title="Sản phẩm">Sản phẩm</a>
                            <span>></span>
                        </li>
                        <li class="product">
                            <strong><?php echo $row_sp['product_name_'.$lang]; ?></strong>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-main span9" style="float: left;">
                        <div class="padding-s">

                            <div id="messages_product_view"></div>
                            <div class="product-view">
                                <div class="product-essential">
                                    <form action="" method="post" id="product_addtocart_form" enctype="multipart/form-data">
                                        <div class="no-display">
                                            <input type="hidden" name="product" value="50" />
                                            <input type="hidden" name="related_product" id="related-products-field" value="" />
                                        </div>
                                        <div class="product-img-box">
                                            <script type="text/javascript">
                                                jQuery(document).ready(function() {
                                                    jQuery('.tumbSlider').jcarousel({
                                                        vertical: false,
                                                        visible: 3,
                                                        scroll: 1
                                                    });
                                                });
                                            </script>


                                            <p class="product-image">
                                                <a href='<?php echo $row_sp['url_images']; ?>' class = 'cloud-zoom' id='zoom1' rel="position:'right',showTitle:1,titleOpacity:0.5,lensOpacity:0.5,adjustX: 10,adjustY:-4">
                                                    <img class="small" src="<?php echo $row_sp['url_images']; ?>" alt='' title="<?php echo $row_sp['product_name_'.$lang]; ?>" />
                                                    <img width="308" style="max-height: 308px;" class="big" src="<?php echo $row_sp['url_images']; ?>" alt='' title="<?php echo $row_sp['product_name_'.$lang]; ?>" />
                                                </a>
                                            </p>
                                            <?php /*<div class="more-views">
                                                <h2>More Views</h2>
                                                <div class="container-slider">
                                                    <div class="tumbSlider-none">
                                                        <ul class="slider">
                                                            <li>
                                                                <a href='<?php echo $row_sp['url_images']; ?>' class='cloud-zoom-gallery' title=''
                                                                   rel="useZoom: 'zoom1', smallImage: '<?php echo $row_sp['url_images']; ?>' ">
                                                                    <img src="<?php echo $row_sp['url_images']; ?>" alt=""/>
                                                                </a>
                                                            </li>                                                           
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>*/?>
                                        </div>
                                        <div class="product-shop">
                                            <div class="product-name">
                                                <h1><?php echo $row_sp['product_name_'.$lang]; ?></h1>
                                            </div>
                                            <div class="short-description">
                                                
                                                <div class="std"><?php echo $row_sp['mota_'.$lang]; ?></div>
                                            </div>

                                            <div class="price-box">
                                                <span class="regular-price" id="product-price-50">
                                                    <span class="price"><strong>Giá bán: </strong><?php echo number_format($row_sp['price_small']) .' đ'; ?></span>                                    </span>

                                            </div>

                                            <div class="clear"></div>
                                            
                                            
                                            
                                        </div>
                                        <div class="clearer"></div>
                                    </form>                                    
                                </div>

                                <div class="product-collateral">
                                    <div class="box-collateral box-description">
                                        <h2>Chi tiết sản phẩm</h2>
                                        <div class="box-collateral-content">
                                            <div class="std">
                                                <?php echo $row_sp['content_'.$lang]; ?>
                                            </div>
                                        </div>
                                    </div>

                                 <?php /*<div class="box-collateral box-collateral box-up-sell related-carousel-none">
                                    <h2>You may also be interested in the following product(s)</h2>
                                    <ul class="products-ups">

                                        <li class="item">
                                            <div class="product-box">
                                                <a href="http://livedemo00.template-help.com/magento_45526/zeon-sport-as-225.html" title="Zeon Sport AS-225" class="product-image"><img src="http://livedemo00.template-help.com/magento_45526/media/catalog/product/cache/1/small_image/207x/9df78eab33525d08d6e5fb8d27136e95/f/i/file_8_18.jpg" alt="Zeon Sport AS-225" /></a>
                                                <h3 class="product-name"><a href="http://livedemo00.template-help.com/magento_45526/zeon-sport-as-225.html" title="Zeon Sport AS-225">Zeon Sport AS-225</a></h3>




                                                <div class="price-box">
                                                    <span class="regular-price" id="product-price-54-upsell">
                                                        <span class="price">$254.64</span>                                    </span>

                                                </div>

                                            </div>
                                        </li>
                                        <li class="item">
                                            <div class="product-box">
                                                <a href="http://livedemo00.template-help.com/magento_45526/toyo-open-country-at-versatile-truck-radial.html" title="Toyo Open Country AT Versatile Truck Radial" class="product-image"><img src="http://livedemo00.template-help.com/magento_45526/media/catalog/product/cache/1/small_image/207x/9df78eab33525d08d6e5fb8d27136e95/f/i/file_8_16.jpg" alt="Toyo Open Country AT Versatile Truck Radial" /></a>
                                                <h3 class="product-name"><a href="http://livedemo00.template-help.com/magento_45526/toyo-open-country-at-versatile-truck-radial.html" title="Toyo Open Country AT Versatile Truck Radial">Toyo Open Country AT Versatile Truck Radial</a></h3>




                                                <div class="price-box">
                                                    <span class="regular-price" id="product-price-52-upsell">
                                                        <span class="price">$300.24</span>                                    </span>

                                                </div>

                                            </div>
                                        </li>
                                        <li class="item">
                                            <div class="product-box">
                                                <a href="http://livedemo00.template-help.com/magento_45526/toyo-proxes-performance-radial.html" title="Toyo Proxes Performance Radial" class="product-image"><img src="http://livedemo00.template-help.com/magento_45526/media/catalog/product/cache/1/small_image/207x/9df78eab33525d08d6e5fb8d27136e95/f/i/file_8_17.jpg" alt="Toyo Proxes Performance Radial" /></a>
                                                <h3 class="product-name"><a href="http://livedemo00.template-help.com/magento_45526/toyo-proxes-performance-radial.html" title="Toyo Proxes Performance Radial">Toyo Proxes Performance Radial</a></h3>




                                                <div class="price-box">
                                                    <span class="regular-price" id="product-price-53-upsell">
                                                        <span class="price">$241.00</span>                                    </span>

                                                </div>

                                            </div>
                                        </li>

                                    </ul>
                                    <script type="text/javascript">decorateTable('upsell-product-table')</script>
                                </div>*/?>

                                    
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-right sidebar span3">
                        <?php include"blocks/menu-right.php" ?>
                        <div class="block block-related">
                            <div class="block-title">
                                <strong><span>Sản phẩm cùng loại</span></strong>
                            </div>
                            <div class="block-content">
                                
                                <ol class="mini-products-list" id="block-related">
                                    <?php
                                        $idTL=$row_sp['idTL'];
                                        $idsp=$row_sp['product_id'];
                                        $row=$modelProduct->SanPham_List_TheoTheLoai_IDSP($idTL, $idsp, $tukhoa = '');
                                        while($row_cungloai =  mysql_fetch_assoc($row)){
                                    ?>
                                    <li class="item">
                                        <div class="product">
                                            <a href="<?php echo $row_cungloai['product_alias'].'-'.$row_cungloai['product_id'].'.html'; ?> " title="<?php echo $row_cungloai['product_name_'.$lang]; ?> " class="product-image">
                                                <img src="<?php echo $row_cungloai['url_images']; ?>" alt="<?php echo $row_cungloai['product_name_'.$lang]; ?> " /></a>
                                            <p class="product-name"><a href="<?php echo $row_cungloai['product_alias'].'-'.$row_cungloai['product_id'].'.html'; ?>"><?php echo $row_cungloai['product_name_'.$lang]; ?> </a></p>
                                            <div class="product-details">



                                                <div class="price-box">
                                                    <span class="regular-price" id="product-price-45-related">
                                                        <span class="price"><?php echo number_format($row_cungloai['price_small']).' đ'; ?></span>                                    </span>

                                                </div>

                                                
                                            </div>
                                        </div>
                                    </li>
                                        <?php } ?>
                                </ol>
                                <script type="text/javascript">decorateList('block-related', 'none-recursive')</script>
                            </div>
                            
                        </div>
                        <div class="block block-related">
                            <div class="block-title">
                                <strong><span>Sản phẩm khác</span></strong>
                            </div>
                            <div class="block-content">
                                
                                <ol class="mini-products-list" id="block-related">
                                    <?php
                                        $idTL=$row_sp['idTL'];
                                        //$idsp=$row_sp['product_id'];
                                        $row=$modelProduct->SanPham_Khac($idTL  ,  $tukhoa = '');
                                        while($row_khac =  mysql_fetch_assoc($row)){
                                    ?>
                                    <li class="item">
                                        <div class="product">
                                            <a href="<?php echo $row_khac['product_alias'].'-'.$row_khac['product_id'].'.html'; ?> " title="<?php echo $row_khac['product_name_'.$lang]; ?> " class="product-image">
                                                <img src="<?php echo $row_khac['url_images']; ?>" alt="<?php echo $row_khac['product_name_'.$lang]; ?> " /></a>
                                            <p class="product-name"><a href="<?php echo $row_khac['product_alias'].'-'.$row_khac['product_id'].'.html'; ?>"><?php echo $row_khac['product_name_'.$lang]; ?> </a></p>
                                            <div class="product-details">



                                                <div class="price-box">
                                                    <span class="regular-price" id="product-price-45-related">
                                                        <span class="price"><?php echo number_format($row_khac['price_small']).' đ'; ?></span>                                    </span>

                                                </div>

                                                
                                            </div>
                                        </div>
                                    </li>
                                        <?php } ?>
                                </ol>
                                <script type="text/javascript">decorateList('block-related', 'none-recursive')</script>
                            </div>
                            
                        </div>
                        
                        
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>