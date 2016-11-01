<div class="block block-layered-nav">
    <div class="block-title">
        <strong><span>Danh mục sản phẩm</span></strong>
    </div>
    <div class="block-content">
        <dl id="narrow-by-list">
            <?php
            $row = $modelCate->getAllTL();
            while ($row_tl = mysql_fetch_assoc($row)) {
                ?>
                <dt><a href="danhmuc/<?php echo $row_tl['TenTL_KhongDau'] . '-' . $row_tl['idTL'] . '.html' ?>"><?php echo $row_tl['TenTL_' . $lang]; ?></a></dt>
                <dd>
                    <ol>
                        <?php
                        $idTL = $row_tl['idTL'];
                        $row1 = $modelCate->getListCate($idTL);
                        while ($row_cate = mysql_fetch_assoc($row1)) {
                            ?>
                            <li>
                                <a href="dongxe/<?php echo $row_cate['cate_alias'] . '-' . $row_cate['cate_id'] . '.html' ?>"><span class="price"><?php echo $row_cate['cate_name_' . $lang]; ?></span> </a>
                            </li>
                        <?php } ?>
                    </ol>
                </dd>
            <?php } ?>
        </dl>


    </div>
</div>