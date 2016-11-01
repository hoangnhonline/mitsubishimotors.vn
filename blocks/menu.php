<div class="nav-container">
    <div class="container">
        <div class="row">
            <div class="span12">
                <div id="menu-icon"><div>Menu</div></div>
                <ul id="nav" class="sf-menu">
                    <li class="level0 nav-1 first level-top  ">
                        <a href="#" class="level-top <?php if($com=='') echo 'menu_active'; ?>"><span>Trang chủ</span></a>                       
                    </li>
                    <li class="level0 nav-2 level-top ">
                        <a href="gioi-thieu.html" class="level-top <?php if($com=='about-us') echo 'menu_active'; ?>"><span>Giới thiệu</span></a>
                    </li>
                    <li class="level0 nav-2 level-top parent ">
                        <a href="san-pham.html" class="level-top <?php if($com=='product' || $com=='danhmuc' || $com=='dongxe' ) echo 'menu_active'; ?>"><span>Sản phẩm</span></a>
                        <ul class="level0">
                            <?php
                                $row=$modelCate->getAllTL();
                                while($row_tl=  mysql_fetch_assoc($row)){
                            ?>
                            <li class="level1 nav-1-1 first">
                                <a href="danhmuc/<?php echo $row_tl['TenTL_KhongDau'].'-'.$row_tl['idTL'].'.html' ?>"><span><?php echo $row_tl['TenTL_'.$lang]; ?></span></a>
                                <ul class="level0">
                                     <?php
                                        $idTL=$row_tl['idTL'];
                                        $row1=$modelCate->getListCate($idTL);
                                        while($row_cate=  mysql_fetch_assoc($row1)){
                                    ?>
                                    <li class="level1 nav-1-1 first"><a href="dongxe/<?php echo $row_cate['cate_alias'].'-'.$row_cate['cate_id'].'.html' ?>"><span><?php echo $row_cate['cate_name_'.$lang]; ?></span></a></li>
                                    <?php } ?>
                                </ul>
                            </li>
                            <?php } ?>
                        </ul>
                    </li>
                    <li class="level0 nav-3 level-top ">
                        <a href="khuyen-mai.html" class="level-top <?php if($com=='khuyen-mai') echo 'menu_active'; ?>"><span>Khuyến mãi</span></a>
                    </li>
                    <li class="level0 nav-4 level-top ">
                        <a href="tu-van-bao-hiem.html" class="level-top <?php if($com=='tvbh') echo 'menu_active'; ?>"><span>Tư vấn bảo hiểm</span></a>
                    </li>
                    <li class="level0 nav-5 level-top ">
                        <a href="dang-ky-lai-thu.html" class="level-top <?php if($com=='dklt') echo 'menu_active'; ?>"><span>Đăng ký lái thử</span></a>
                    </li>
                    <li class="level0 nav-6 level-top ">
                        <a href="lien-he.html" class="level-top <?php if($com=='contact') echo 'menu_active'; ?>"><span>Liên hệ</span></a>
                    </li>
                    <li class="level0 nav-7 last level-top ">
                        <a href="tin-tuc.html" class="level-top <?php if($com=='news') echo 'menu_active'; ?>"><span>Tin tức</span></a>
                    </li> 
                </ul>
                <ul class="sf-menu-phone">
                    <li class="level0 nav-1 first level-top ">
                        <a href="#" class="level-top"><span>Trang chủ</span></a>
                        
                    </li>
                    <li class="level0 nav-2 level-top">
                        <a href="gioi-thieu.html" class="level-top"><span>Giới thiệu</span></a>
                    </li>
                    <li class="level0 nav-2 level-top parent">
                        <a href="san-pham.html" class="level-top"><span>Sản phẩm</span></a>
                        <ul class="level0">
                            <?php
                                $row=$modelCate->getAllTL();
                                while($row_tl=  mysql_fetch_assoc($row)){
                            ?>
                            <li class="level1 nav-1-1 first parent">
                                <a href="danhmuc/<?php echo $row_tl['TenTL_KhongDau'].'-'.$row_tl['idTL'].'.html' ?>"><span><?php echo $row_tl['TenTL_'.$lang]; ?></span></a>
                                <ul class="level0">
                                     <?php
                                        $idTL=$row_tl['idTL'];
                                        $row1=$modelCate->getListCate($idTL);
                                        while($row_cate=  mysql_fetch_assoc($row1)){
                                    ?>
                                    <li class="level1 nav-1-1 first"><a href="dongxe/<?php echo $row_cate['cate_alias'].'-'.$row_cate['cate_id'].'.html' ?>"><span><?php echo $row_cate['cate_name_'.$lang]; ?></span></a></li>
                                    <?php } ?>
                                </ul>
                            </li>
                            <?php } ?>
                        </ul>
                    </li>
                    <li class="level0 nav-3 level-top">
                        <a href="khuyen-mai.html" class="level-top"><span>Khuyến mãi</span></a>
                    </li>
                    <li class="level0 nav-4 level-top">
                        <a href="tu-van-bao-hiem.html" class="level-top"><span>Tư vấn bảo hiểm</span></a>
                    </li>
                    <li class="level0 nav-5 level-top">
                        <a href="dang-ky-lai-thu.html" class="level-top"><span>Đăng ký lái thử</span></a>
                    </li>
                    <li class="level0 nav-6 level-top">
                        <a href="lien-he.html" class="level-top"><span>Liên hệ</span></a>
                    </li>
                    <li class="level0 nav-7 last level-top">
                        <a href="tin-tuc.html" class="level-top"><span>Tin tức</span></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>