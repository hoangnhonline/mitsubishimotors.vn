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
                            <strong><a href="lien-he.html">Liên hệ</a></strong>
                        </li>
                    </ul>
                </div>
                <div class="col-main">
                    <div class="padding-s">
                        <div class="std">
                            <div class="page-title">
                                <h1>Liên hệ</h1>
                            </div>

                            <div class="map-content">
                                <figure><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3919.7671517568524!2d106.68145890000001!3d10.7524206!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f03fdd93d63%3A0xad5bfde24c202f90!2zNjY0IFbDtSBWxINuIEtp4buHdCwgcGjGsOG7nW5nIDEsIFF14bqtbiA1LCBI4buTIENow60gTWluaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1420442437774"  height="250" frameborder="0" style="border:0"></iframe></figure>
                            </div>
                            <div class="contact-block">
                                <?php 
                                    $gt=$modelBlock->getDetailBlock(5);
                                    $row_gt=  mysql_fetch_assoc($gt);
                                    echo $row_gt['block_content_'.$lang];
                                ?>
                                <form action="#" id="contactForm" method="post">
                                    <div class="fieldset">
                                        <h2>Form liên hệ</h2>
                                        <ul class="form-list">  
                                            <li class="fields">
                                                <div class="field">
                                                    <label for="name" class="required"><em>*</em>Họ và Tên</label>
                                                    <div class="input-box">
                                                        <input name="nguoilienhe" id="nguoilienhe" title="Name" value="" class="input-text required-entry" type="text"/>
                                                    </div>
                                                </div>
                                                <div class="field">
                                                    <label for="email" class="required"><em>*</em>Email</label>
                                                    <div class="input-box">
                                                        <input name="email" id="email" title="Email" value="" class="input-text required-entry validate-email" type="text"/>
                                                    </div>
                                                </div>
                                                <div class="field last">
                                                    <label for="telephone">Điện thoại</label>
                                                    <div class="input-box">
                                                        <input name="dienthoai" id="dienthoai" title="Telephone" value="" class="input-text" type="text"/>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="wide">
                                                <label for="comment" class="required"><em>*</em>Nội dung</label>
                                                <div class="input-box">
                                                    <textarea name="noidung" id="noidung" title="Comment" class="required-entry input-text" cols="5" rows="3"></textarea>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="buttons-set">
                                        <input type="text" name="hideit" id="hideit" value="" style="display:none !important;"/>
                                        <button id="btnLienHe" type="button" title="Submit" class="button"><span><span>Gửi đi</span></span></button>
                                       
                                                <input type="hidden" name="lang" id="lang" value="<?php echo $lang; ?>" />
                                                <span id="thongbao"></span>
                                    </div>
                                </form>
                            </div>
                            <?php
                            //$gt=$modelBlock->getDetailBlock(3);
                            // $row_gt=  mysql_fetch_assoc($gt);
                            //echo $row_gt['block_content_'.$lang];
                            ?>
                        </div>                                    </div>
                </div>
            </div>
        </div>
    </div>
</div>