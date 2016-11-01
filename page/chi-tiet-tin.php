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
                                <h1>Chi tiết tin</h1>
                            </div>
                            
                            <div class="contentFrame">
                                <div class="content" style="margin-top: 30px;">

                                    

                                        <div class="article-detail" style="margin-left: 30px;margin-top: 20px;">
                                <div class="title">

                                    <span id="ctl00_cphMain_ArticleDetail1_ltlTitle" class="bullet-li"><?php echo $row_1['title_'.$lang]; ?></span>

                                </div>

                            <div class="TopToolbar">
                                <a class="back" href="javascript:history.go(-1);">
                                    Quay lại</a>
                                <span class="seperator"></span>
                                

                            </div>

                            <script type="text/javascript">


                                $(".plusSize").click(function () {
                                    $("#divDetailContent").css({ "font-size": (parseInt($("#divDetailContent").css("font-size")) + 1) + 'px', "line-height": "120%" });
                                });

                                $(".minusSize").click(function () {
                                    $("#divDetailContent").css({ "font-size": (parseInt($("#divDetailContent").css("font-size")) - 1) + 'px', "line-height": "120%" });
                                });

                            </script>
                                <div id="divDetailContent">

                                   <?php echo $row_1['content_'.$lang]; ?>
                                </div>

                                <div class="clear">
                                </div>

                            <div class="BottomToolbar">

                            </div>




                            </div>
                                    <div class="article-reference" style="margin-left: 30px;">    
                                <div class="title"><a id="ctl00_cphMain_ArticleDetail1_articleReference_mrcArticle" class="Tin tức khác">{tinlienquan}</a></div>

                                        <ul>
                                            <?php
                                                $id_tin=$row_1['article_id'];
                                                $tinlq=$modelArticle->getListArticleLienQuan($id_tin);                                              
                                                while ($row_tinlq =  mysql_fetch_assoc($tinlq)){  
                                            ?>
                                            <li>
                                                <a href="tintuc/<?php echo $row_tinlq['title_alias'].'-'.$row_tinlq['article_id'].'.html' ?>" target="_self">
                                                    <?php echo $row_tinlq['title_'.$lang]; ?></a>
                                            </li>
                                            <?php } ?>
                                        </ul>

                            </div>



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

