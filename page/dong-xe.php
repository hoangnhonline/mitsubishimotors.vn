<?php
    $tieude_id = $tmp_uri[2]; 
    $arr = explode("-", $tieude_id);      
    $cate_id = (int) end($arr);
    $row=$modelCate->getDetailCate($cate_id);    
    $row_tl1=  mysql_fetch_assoc($row);
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
                        <li class="category11">
                            <strong><a href="san-pham.html">Sản phẩm</a></strong>
                            <span>></span>
                        </li>
                        <li class="category11">
                            <strong><a href="#"><?php echo $row_tl1['cate_name_'.$lang]; ?></a></strong>
                            
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-main span9" style="float: left;">
                        <div class="padding-s">
                            
                            
                            <div class="category-products">
                                <ul class="products-grid row">
                                    <?php
                                        $tieude_id = $tmp_uri[2]; 
                                        $arr = explode("-", $tieude_id);      
                                        $cate_id = (int) end($arr);
                                        $idTL=$cate_id;
                                        $row1=$modelProduct->getListProductByTheLoai($idTL, $offset = -1, $limit = -1); 
                                        while($row_sp=  mysql_fetch_assoc($row1)){
                                    ?>
                                    <li class="item first span3">
                                        <a href="<?php echo $row_sp['product_alias'].'-'.$row_sp['product_id'].'.html' ;?>" title="<?php echo $row_sp['product_name_'.$lang]; ?>" class="product-image"><img src="<?php echo $row_sp['url_images']; ?>" alt="<?php echo $row_sp['product_name_'.$lang]; ?>" /></a>
                                        <div class="product-shop">
                                            <h2 class="product-name"><a href="<?php echo $row_sp['product_alias'].'-'.$row_sp['product_id'].'.html' ;?>" title="<?php echo $row_sp['product_name_'.$lang]; ?>"><?php echo $row_sp['product_name_'.$lang]; ?></a></h2>
                                            <p class="desc_grid" style="height: 50px;overflow: hidden;"><?php echo $row_sp['mota_'.$lang]; ?></p>



                                            <div class="price-box">
                                                <span class="regular-price" id="product-price-49">
                                                    <span class="price"><?php echo number_format($row_sp['price_small']).' đ'; ?></span>                                    </span>

                                            </div>


                                            <?php /*<div class="actions">
                                                <ul class="add-to-links">
                                                    <li><a title="Add to Wishlist" href="http://livedemo00.template-help.com/magento_45526/wishlist/index/add/product/49/" rel="tooltip" class="link-wishlist">Add to Wishlist</a></li>
                                                    <li><span class="separator">|</span> <a  title="Add to Compare " href="http://livedemo00.template-help.com/magento_45526/catalog/product_compare/add/product/49/uenc/aHR0cDovL2xpdmVkZW1vMDAudGVtcGxhdGUtaGVscC5jb20vbWFnZW50b180NTUyNi90aXJlcy5odG1s/" rel="tooltip" class="link-compare ">Add to Compare</a></li>
                                                </ul>
                                                <button type="button" title="Xem chi tiết" class="button btn-cart"><span><span>Xem chi tiết</span></span></button>
                                            </div> */?>
                                        </div>
                                    </li> 
                                        <?php } ?>
                                </ul>
                                
                                <script type="text/javascript">decorateGeneric($$('ul.products-grid'), ['odd', 'even', 'first', 'last'])</script>
                                
                            </div>
                                                        
                        </div>
                    </div>
                    <div class="col-right sidebar span3">
                        <?php include"blocks/menu-right.php" ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>