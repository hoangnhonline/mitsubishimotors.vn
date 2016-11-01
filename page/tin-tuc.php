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
                            <strong><a href="tin-tuc.html">Tin tức</a></strong>
                        </li>
                    </ul>
                </div>
                <div class="col-main span8" style="float: left;">
                    <div class="padding-s">
                        <div class="std">
                            <div class="page-title">
                                <h1>Tin tức</h1>
                            </div>
                            
                            <div class="article-listing" style="margin-left: 30px;margin-top: 20px;">
                                <div class="list">
                                    <span id="ctl00_cphMain_ArticleListing1_lblResult" class="lblresult"></span>
                                    <?php
                                        $tin=$modelArticle->getListArticle();                                              
                                        while ($row_tin =  mysql_fetch_assoc($tin)){
                                           $url=  str_replace("../","",$row_tin[HinhDaiDien]);
                                          $dem=  mysql_num_rows($tin);
                                           if($dem>0){
                                    ?>
                                    <div class="item">
                                        <div class="image">
                                            <a target="_self" style="display: table-cell;text-align: center; vertical-align: middle;   width:100px;   height:75px;" href="tintuc/<?php echo $row_tin['title_alias'].'-'.$row_tin['article_id'].'.html' ?>" class="image"><img alt="" src="<?php echo $url; ?>" width="100" height="75" class="image"></a>
                                        </div>
                                        <a href="tintuc/<?php echo $row_tin['title_alias'].'-'.$row_tin['article_id'].'.html' ?>" class="title" target="_self">
                                            <?php echo $row_tin['title_'.$lang]; ?></a>
                                        <br>
                                        <span class="summary">
                                            <?php
                                                $str = $row_tin['content_'.$lang]; //Tạo chuỗi
                                                $str = strip_tags($str); //Lược bỏ các tags HTML
                                                if(strlen($str)>300) { //Đếm kí tự chuỗi $str, 100 ở đây là chiều dài bạn cần quy định
                                                $strCut = substr($str, 0, 300); //Cắt 100 kí tự đầu
                                                $str = substr($strCut, 0, strrpos($strCut, ' ')).' ... <a href="tintuc/'.$row_tin[title_alias].'-'.$row_tin[article_id].'.html'.' " style="color:red;">Read More >></a>'; //Tránh trường hợp cắt dang dở như "nội d... Read More"
                                                }
                                                echo $str;
                                            ?>
                                            <?php //echo $row_tin['content_'.$lang]; ?>
                                        </span>
                                        <div class="clear">
                                        </div>
                                    </div>
                                    <?php } else{ ?>
                                        <div style="text-align: center">
                                            <img width="20%" src="img/icon-update.jpg">
                                        </div>  
                                        <?php } } ?>

                                </div>


                            </div>                           
                          
                                                      
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