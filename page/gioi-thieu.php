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
                        <li class="cms_page">
                            <strong><a href="gioi-thieu.html">Giới thiệu</a></strong>
                        </li>
                    </ul>
                </div>
                <div class="col-main">
                    <div class="padding-s">
                        <div class="std">
                            <div class="page-title">
                                <h1>Giới Thiệu</h1>
                            </div>
                            <?php 
                                $gt=$modelBlock->getDetailBlock(3);
                                $row_gt=  mysql_fetch_assoc($gt);
                                echo $row_gt['block_content_'.$lang];
                            ?>
                        </div>                                    </div>
                </div>
            </div>
        </div>
    </div>
</div>