<div class="std">
    
   <?php /* <script src="skin/frontend/default/theme512/js/camera.js"></script>
    <script>
        jQuery(function() {
            jQuery('#camera_wrap').camera({
                alignmen: 'topCenter',
                height: '34.83%',
                minHeight: '100px',
                loader: false,
                navigation: false,
                fx: 'simpleFade',
                navigationHover: false,
                thumbnails: false,
                playPause: false
            });
        });
    </script>
    <div class="fluid_container_wrap">
        <div class="fluid_container">
            <div class="camera_wrap camera_orange_skin" id="camera_wrap">
                <div data-link="diagnostic-test.html/" data-src="skin/frontend/default/theme512/images/camera/slides/slide1.png"></div>
                <div data-link="gear-boxes.html/" data-src="skin/frontend/default/theme512/images/camera/slides/slide2.png"></div>
                <div data-link="hydraulics.html/" data-src="skin/frontend/default/theme512/images/camera/slides/slide3.png"></div>
                <div data-link="lighting.html/" data-src="skin/frontend/default/theme512/images/camera/slides/slide4.png"></div>
                <div data-link="paints.html/" data-src="skin/frontend/default/theme512/images/camera/slides/slide5.png"></div>
            </div>
        </div>
    </div>
    <div class="menu-left" style="float: left; width: 20%;  ">
        <!--<div class="verMenuTitle" >
            <div class="tieude-menu">Danh mục sản phẩm</div>
            <div style="width: 90%; background-color: red;">
                <div class="demo-container ">
                     <div class="dcjq-vertical-mega-menu">
                        <ul id="mega-1" class="menu">                            
                            <li id="menu-item-3"><a href="#">Mirage</a>
                                <ul>
                                <li id="menu-item-52"><a href="#">Mirage CVT</a></li>
                                <li id="menu-item-53"><a href="#">Mirage MT</a></li>                                
                                </ul>
                            </li>
                            <li id="menu-item-3"><a href="#">Attrage</a>
                                <ul>
                                    <li id="menu-item-52"><a href="#">Attrage CVT</a></li>
                                    <li id="menu-item-53"><a href="#">Attrage MT</a></li>
                                    <li id="menu-item-54"><a href="#">Attrage MT STD</a></li>
                                </ul>
                            </li>
                            <li id="menu-item-51"><a href="#">Triton</a>
                                <ul>
                                    <li id="menu-item-52"><a href="#">Triton GLS AT</a></li>
                                    <li id="menu-item-53"><a href="#">Triton GLS MT</a></li>
                                    <li id="menu-item-54"><a href="#">Triton GLX</a></li>
                                    <li id="menu-item-55"><a href="#">Triton GL</a></li>
                                </ul>
                            </li>
                            <li id="menu-item-51"><a href="#">Pajero Sport</a>
                                <ul>
                                    <li id="menu-item-52"><a href="#">Pajero Sport G.4WD.AT</a></li>
                                    <li id="menu-item-53"><a href="#">Pajero Sport G.2WD.AT</a></li>
                                    <li id="menu-item-54"><a href="#">Pajero Sport D.2WD.MT</a></li>                                   
                                </ul>
                            </li>
                            <li id="menu-item-51"><a href="#">Outlander Sport</a>
                                <ul>
                                    <li id="menu-item-52"><a href="#">Outlander Sport CVT premium</a></li>
                                    <li id="menu-item-53"><a href="#">Outlander Sport CVT premium</a></li>                                                                      
                                </ul>
                            </li>
                            <li id="menu-item-51"><a href="#">Pajero</a>
                                <ul>
                                    <li id="menu-item-52"><a href="#">Pajero GLS AT</a></li>
                                    <li id="menu-item-53"><a href="#">Pajero Cứu thương</a></li>
                                                                       
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>         
            </div>
        </div>-->
        <div id="menu">
                <ul id="mega-1" class="menu">
                    <?php
                        $row=$modelCate->getAllTL();
                        while($row_tl=  mysql_fetch_assoc($row)){
                    ?>
                    <li id="menu-item-3"><a href="danhmuc/<?php echo $row_tl['TenTL_KhongDau'].'-'.$row_tl['idTL'].'.html' ?>"><?php echo $row_tl['TenTL_'.$lang]; ?></a>
                        <ul>
                            <?php
                                $idTL=$row_tl['idTL'];
                                $row1=$modelCate->getListCate($idTL);
                                while($row_cate=  mysql_fetch_assoc($row1)){
                            ?>
                            <li id="menu-item-52"><a href="dongxe/<?php echo $row_cate['cate_alias'].'-'.$row_cate['cate_id'].'.html' ?>"><?php echo $row_cate['cate_name_'.$lang]; ?></a></li>
                            <?php } ?>                           
                        </ul>
                    </li>
                    <?php } ?>
                </ul>
        </div>
    </div>*/?>
    <div class="slide" style="float: left; width: 95%; ">
        
        <div class="flexslider">
              <ul class="slides">
                  <?php
                    $sql="SELECT * FROM hinhanh_home";
                    $ha=mysql_query($sql) or die(mysql_error());                                               
                    while ($row_ha =  mysql_fetch_assoc($ha)){  
                        $url=  str_replace("../","",$row_ha[Url]);
                 ?> 
                <li>
                  <img width="770px" src="<?php echo $url; ?>"
                </li>
                <?php } ?>
                
              </ul>
        </div>
    </div>
</div>
<div style="clear: both;"></div>

