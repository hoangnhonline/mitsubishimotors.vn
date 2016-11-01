<!-- quick -->
<ul id="quick">
        <li>
                <a href="#" title="Products"><span class="icon"><img src="resources/images/icons/application_double.png" alt="Products" /></span><span>{danhmuc}</span></a>
                <ul>
                        <li><a href="<?php echo BASE_URL.'danhmuc_list'; ?>">{qldanhmuc}</a></li>
                        <li><a href="<?php echo BASE_URL.'danhmuccha_add'; ?>">Thêm hãng xe</a></li>
                        <li><a href="<?php echo BASE_URL.'danhmuc_add'; ?>">Thêm dòng xe</a></li>
                        
                </ul>
        </li>
        <li>
                <a href="" title="Events"><span class="icon"><img src="resources/images/icons/calendar.png" alt="Events" /></span><span>{sanpham}</span></a>
                <ul>
                        <li><a href="<?php echo BASE_URL.'product_list'; ?>">{dssanpham}</a></li>
                        <li class="last"><a href="<?php echo BASE_URL.'product_add'; ?>">{themsp}</a></li>
                </ul>
        </li>
        <?php /*
        <li>
                <a href="" title="Events"><span class="icon"><img src="resources/images/icons/calendar.png" alt="Events" /></span><span>{giohang}</span></a>
                <ul>
                        <li><a href="<?php echo BASE_URL.'giohang_list'; ?>">{dsgiohang}</a></li>
                        
                </ul>
        </li> */?>
        <li>
                <a href="#" title="Products"><span class="icon"><img src="resources/images/icons/application_double.png" alt="Products" /></span><span>{tintuc}</span></a>
                <ul>
                        <li><a href="<?php echo BASE_URL.'baiviet_list'; ?>">{dsbaiviet}</a></li>
                        <li class="last"><a href="<?php echo BASE_URL.'baiviet_add'; ?>">{thembaiviet}</a></li>
                </ul>
        </li>
        <?php /*<li>
                <a href="#" title="Products"><span class="icon"><img src="resources/images/icons/application_double.png" alt="Products" /></span><span>{duandalam}</span></a>
                <ul>
                        <li><a href="<?php echo BASE_URL.'duan_list'; ?>">{dsduan}</a></li>
                        <li class="last"><a href="<?php echo BASE_URL.'duan_add'; ?>">{themduan}</a></li>
                </ul>
        </li>*/?>
        <li>
                <a href="" title="Links"><span class="icon"><img src="resources/images/icons/page_white_copy.png" alt="Blocks" /></span><span>Blocks</span></a>
                <ul>
                        <li><a href="<?php echo BASE_URL.'block_list'; ?>">Quản lý blocks</a></li>
                </ul>
        </li>
        <li>
                <a href="#" title="Products"><span class="icon"><img src="resources/images/icons/application_double.png" alt="Menu" /></span><span>Hình ảnh (slide Home)</span></a>
                <ul>
                        <li><a href="<?php echo BASE_URL.'image_list'; ?>">Danh sách hình ảnh</a></li>
                        <li class="last"><a href="<?php echo BASE_URL.'image_add'; ?>">Thêm hình </a></li>
                </ul>
        </li>
        <li>
                <a href="#" title="Products"><span class="icon"><img src="resources/images/icons/application_double.png" alt="Menu" /></span><span>{nguoidung}</span></a>
                <ul>
                        <li><a href="<?php echo BASE_URL.'user_changepass'; ?>">{thaymk}</a></li>
                        
                </ul>
        </li>
</ul>