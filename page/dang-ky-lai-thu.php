<div class="container">
    <div class="row">
        <div class="span12">
            <div class="main">
                <div class="breadcrumbs">
                    <ul>
                        <li class="home">
                            <a href="" title="Go to Home Page">Trang chủ</a>
                            <span>></span>
                        </li>
                        <li class="cms_page">
                            <strong><a href="dang-ky-lai-thu.html">Đăng ký lái thử</a></strong>
                        </li>
                    </ul>
                </div>
                <div class="col-main">
                    <div class="padding-s">
                        <div class="std">
                            <div class="page-title">
                                <h1>Đăng ký lái thử</h1>
                            </div>
                            <div class="contact" >
                                <div class="contact-info">
                                    <?php
                                    $gt = $modelBlock->getDetailBlock(14);
                                    $row_gt = mysql_fetch_assoc($gt);
                                    echo $row_gt['block_content_' . $lang];
                                    ?>                            
                                </div>
                                <div class="contactForm">

                                    <div id="ctl00_cphMain_Contact1_ctl00_cphMain_Contact1_rapContactPanel">
                                        <div id="ctl00_cphMain_Contact1_rapContact">

                                            <div class="labelsColumn">
                                                <label>
                                                    {tieude}<span>*</span></label>
                                                <label>
                                                    {noidung}<span>*</span></label>
                                                <label style="margin-top: 60px;">
                                                    Người liên hệ<span>*</span></label>
                                                
                                                <label>
                                                    {diachi}<span>*</span></label>
                                                <label>
                                                    {dienthoai}<span>*</span></label>
                                                
                                                <label>
                                                    {email}<span>*</span></label>                                       


                                            </div>
                                            <div class="textBoxsColumn">
                                                <input name="tieude" type="text" id="tieude" class="RadInputMgr RadInputMgr_Default RadInput_Enabled_Default" >
                                                <textarea name="" rows="2" cols="20" id="noidung" class="textboxMultiline"></textarea>
                                                <input name="" type="text" id="nguoilienhe" class="textbox">
                                                
                                                <input name="" type="text" id="diachi" class="textbox">
                                                <input name="" type="text" id="dienthoai" class="textbox">
                                                
                                                <input name="" type="text" id="email" class="textbox">
                                            </div>
                                            <div class="btncontact">
                                                <input id="btnDKLT" class="loginLogin" type="button" value="{gui}" >
                                                <input type="hidden" name="lang" id="lang" value="<?php echo $lang; ?>" />
                                                <span id="thongbao"></span>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>                                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>