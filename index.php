<?php
    session_start();
    
    $lang_arr=array("vi","cn","en");
    if (isset($_GET['lang']) == true){
      if (in_array($_GET['lang'], $lang_arr)==true) $lang = $_GET['lang'];
    }
    elseif (isset($_SESSION['lang']) == true){ 
     if (in_array($_SESSION['lang'],$lang_arr) == true) $lang = $_SESSION['lang'];
    }else $lang= 'vi';
    $_SESSION['lang'] = $lang;
    setcookie('lang' , $lang , time()+60*60*24*30);
     ob_start();
       //echo $lang; die;
        require_once "lang/lang_$lang.php";       
      require_once "admin/Model/Product.php";
      require_once "admin/Model/Cate.php";
      require_once "admin/Model/Article.php";
      require_once "admin/Model/Block.php";
    $modelProduct = new Product;
    $modelCate = new Cate;
    $modelArticle = new Article;
    $modelBlock = new Block;
    require_once("blocks/seo.php");
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <base href="http://mitsubishimotors.vn/" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title><?php echo $title; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
                <meta name="description" content="Default Description"/>
                <meta name="keywords" content="Magento, Varien, E-commerce"/>
                <meta name="robots" content="INDEX,FOLLOW"/>
                <script type="text/javascript">
                //<![CDATA[
                    try {
                        if (!window.CloudFlare) {
                            var CloudFlare = [{verbose: 0, p: 0, byc: 0, owlid: "cf", bag2: 1, mirage2: 0, oracle: 0, paths: {cloudflare: "/cdn-cgi/nexp/dok2v=1613a3a185/"}, atok: "a081240051596fcde94df87fcee92041", petok: "1de987d68ac1dabe23945d88f39666d7b03bfff7-1418865793-86400", zone: "template-help.com", rocket: "0", apps: {"abetterbrowser": {"ie": "7"}, "ga_key": {"ua": "UA-7078796-5", "ga_bs": "2"}}}];
                            !function(a, b) {
                                a = document.createElement("script"), b = document.getElementsByTagName("script")[0], a.async = !0, a.src = "//ajax.cloudflare.com/cdn-cgi/nexp/dok2v=919620257c/cloudflare.min.js", b.parentNode.insertBefore(a, b)
                            }()
                        }
                    } catch (e) {
                    }
                    ;
                //]]>
                </script>
                
                <link rel="icon" href="skin/frontend/default/theme512/favicon.ico" type="image/x-icon"/>
                <link rel="shortcut icon" href="skin/frontend/default/theme512/favicon.ico" type="image/x-icon"/>
                <link href='//fonts.googleapis.com/css?family=Anton' rel='stylesheet' type='text/css'/>
                <script type="text/javascript" src="skin/frontend/default/theme512/js/jquery-1.7.min.js"></script>
                <script type="text/javascript" src="skin/frontend/default/theme512/js/superfish.js"></script>
                <script type="text/javascript" src="skin/frontend/default/theme512/js/jquery.easing.1.3.js"></script>
                <script type="text/javascript" src="skin/frontend/default/theme512/js/jquery.mobile.customized.min.js"></script>
                <script type="text/javascript" src="skin/frontend/default/theme512/js/scripts.js"></script>
                <script type="text/javascript" src="skin/frontend/default/theme512/js/jquery.jcarousel.min.js"></script>
                 <script type="text/javascript" src="js/slide/jquery.flexslider.js"></script>
                 <script type="text/javascript">
                    
                    $(window).load(function(){
                      $('.flexslider').flexslider({
                        animation: "slide",
                        start: function(slider){
                          $('body').removeClass('loading');
                        }
                      });
                    });
                    
                </script>
                <!--[if lt IE 7]>
                <script type="text/javascript">
                //<![CDATA[
                    var BLANK_URL = 'js/blank.html';
                    var BLANK_IMG = 'js/spacer.gif';
                //]]>
                </script>
                <![endif]-->
                <!--[if lt IE 9]>
                <div style=' clear: both; text-align:center; position: relative;'>
                 <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></a>
                </div>
                <![endif]-->
                <!--[if lt IE 9]>
                        <style>
                        body {
                                min-width: 960px !important;
                        }
                        </style>
                <![endif]-->
                <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
                <link rel="stylesheet" type="text/css" href="skin/frontend/default/theme512/css/font-awesome.min.css" media="all"/>
                <link rel="stylesheet" type="text/css" href="skin/frontend/default/theme512/css/extra_style.css" media="all"/>
                <link rel="stylesheet" type="text/css" href="skin/frontend/default/theme512/css/grid_1170.css" media="all"/>
                <link rel="stylesheet" type="text/css" href="skin/frontend/default/theme512/css/styles.css" media="all"/>
                <link rel="stylesheet" type="text/css" href="skin/frontend/default/theme512/css/responsive.css" media="all"/>
                <link rel="stylesheet" type="text/css" href="skin/frontend/default/theme512/css/superfish.css" media="all"/>
                <link rel="stylesheet" type="text/css" href="skin/frontend/default/theme512/css/camera.css" media="all"/>
                <link rel="stylesheet" type="text/css" href="skin/frontend/base/default/css/widgets.css" media="all"/>
                <link rel="stylesheet" type="text/css" href="skin/frontend/default/theme512/css/ecommerceteam/cloud-zoom.css" media="all"/>
                <link rel="stylesheet" type="text/css" href="skin/frontend/default/theme512/css/print.css" media="print"/>
                
                
                <script type="text/javascript" src="js/prototype/validation.js"></script>
                <script type="text/javascript" src="js/scriptaculous/builder.js"></script>
                <script type="text/javascript" src="js/scriptaculous/effects.js"></script>
                <script type="text/javascript" src="js/scriptaculous/dragdrop.js"></script>
                <script type="text/javascript" src="js/scriptaculous/controls.js"></script>
                
                <script type="text/javascript" src="js/scriptaculous/slider.js"></script>
                <script type="text/javascript" src="js/varien/js.js"></script>
                <script type="text/javascript" src="js/varien/form.js"></script>
                <script type="text/javascript" src="js/mage/translate.js"></script>
                <script type="text/javascript" src="js/mage/cookies.js"></script>
                <script type="text/javascript" src="js/ecommerceteam/cloud-zoom.1.0.2.min.js"></script>
                <script type="text/javascript" src="skin/frontend/default/theme512/js/bootstrap.js"></script>
                <script type="text/javascript" src="skin/frontend/default/theme512/js/msrp.js"></script>
                
                <!--<script type='text/javascript' src='js/menu/jquery.hoverIntent.minified.js'></script>
                <script type='text/javascript' src='js/menu/jquery.dcverticalmegamenu.1.1.js'></script>
                <link rel="stylesheet" href="css/vertical_menu.css" rel="stylesheet" type="text/css" />
                
                <script type="text/javascript">
                    $(document).ready(function($){
                            $('#menu').menu();
                            $('#mega-1').dcVerticalMegaMenu({
                                    rowItems: '3',
                                    speed: 'fast',
                                    effect: 'slide',
                                    direction: 'right'
                            });
                    });
                </script>-->
                <link rel="stylesheet" type="text/css" href="css/jquery-sliding-menu.css">
                <script type="text/javascript" src="js/menu/jquery-sliding-menu.js"></script>
                <script type="text/javascript">
                    $(document).ready(function($){
                            $('#menu').menu(); 
                            
                            //------------------------KT Dử liệu Đăng ký lái thử------------------------
                                $("#btnDKLT").click(function(){		

                                        var tieude=$("#tieude").val();
                                        var noidung=$("#noidung").val(); 
                                        var email=$("#email").val();
                                        var nguoilienhe=$("#nguoilienhe").val();
                                        var address=$("#diachi").val();
                                        var phone=$("#dienthoai").val();
                                        var lang=$("#lang").val();

                                        if(tieude=="" ||noidung=="" ||nguoilienhe==""  || address=="" ||phone=="" || email=="" )
                                        {			
                                                if(lang=='vi'){
                                                    alert("Bạn chưa nhập đầy đủ thông tin !");
                                                }if(lang=='cn'){
                                                    alert("您 沒 有 輸 入 足 夠 的 信 息！");
                                                }if(lang=='en'){
                                                    alert("You have not entered enough information !");
                                                }
                                                if(tieude==""){
                                                        $("#tieude").addClass("false");
                                                }else{
                                                        $("#tieude").removeClass("false");
                                                }
                                                

                                                if(email==""){
                                                        $("#email").addClass("false");
                                                }else{
                                                        $("#email").removeClass("false");
                                                }
                                                if(address==""){
                                                        $("#diachi").addClass("false");
                                                }else{
                                                        $("#diachi").removeClass("false");
                                                }
                                                if(phone==""){
                                                        $("#dienthoai").addClass("false");
                                                }else{
                                                        $("#dienthoai").removeClass("false");
                                                }                                                
                                                if(noidung==""){
                                                        $("#noidung").addClass("false");
                                                }else{
                                                        $("#noidung").removeClass("false");
                                                }
                                                if(nguoilienhe==""){
                                                        $("#nguoilienhe").addClass("false");
                                                }else{
                                                        $("#nguoilienhe").removeClass("false");
                                                }

                                                return false;
                                        }
                                        else
                                        {	
                                                $("#thongbao").html('<div align="center"><img src="img/loading.gif" /> {vuilongdoi}</div>');
                                                $.post('ajax/xuly_dklt.php',{tieude:tieude,noidung:noidung,email:email,address:address,phone:phone,nguoilienhe:nguoilienhe,lang:lang},function(data){												
                                                    if(lang=='vi'){
                                                        alert("Xử lý thành công,chúng tôi sẽ liên hệ cho quý khách trong thời gian sớm nhất !");
                                                    }if(lang=='cn'){
                                                        alert("已送出, 您的訊息我們會盡快處理及回覆！");
                                                    }if(lang=='en'){
                                                        alert("Handling success !");
                                                    }
                                                    $("#thongbao").html('');
                                                   setTimeout(function(){window.location.href='dang-ky-lai-thu.html';},1000);		
                                                });
                                                //alert("Chúc mừng bạn đã đã đăng ký thành viên thành công. !!! ");
                                                //return true;
                                        }	
                                });
                                
                                //------------------------KT Dử liệu Liên hệ------------------------
                                $("#btnLienHe").click(function(){		

                                        
                                        var noidung=$("#noidung").val(); 
                                        var email=$("#email").val();
                                        var nguoilienhe=$("#nguoilienhe").val();                                        
                                        var phone=$("#dienthoai").val();
                                        var lang=$("#lang").val();

                                        if(noidung=="" ||nguoilienhe==""  || phone=="" || email=="" )
                                        {			
                                                if(lang=='vi'){
                                                    alert("Bạn chưa nhập đầy đủ thông tin !");
                                                }if(lang=='cn'){
                                                    alert("您 沒 有 輸 入 足 夠 的 信 息！");
                                                }if(lang=='en'){
                                                    alert("You have not entered enough information !");
                                                }                                                                                              

                                                if(email==""){
                                                        $("#email").addClass("false");
                                                }else{
                                                        $("#email").removeClass("false");
                                                }
                                                
                                                if(phone==""){
                                                        $("#dienthoai").addClass("false");
                                                }else{
                                                        $("#dienthoai").removeClass("false");
                                                }                                                
                                                if(noidung==""){
                                                        $("#noidung").addClass("false");
                                                }else{
                                                        $("#noidung").removeClass("false");
                                                }
                                                if(nguoilienhe==""){
                                                        $("#nguoilienhe").addClass("false");
                                                }else{
                                                        $("#nguoilienhe").removeClass("false");
                                                }

                                                return false;
                                        }
                                        else
                                        {	
                                                $("#thongbao").html('<div align="center"><img src="img/loading.gif" /> {vuilongdoi}</div>');
                                                $.post('ajax/xuly_lienhe.php',{noidung:noidung,email:email,phone:phone,nguoilienhe:nguoilienhe,lang:lang},function(data){												
                                                    if(lang=='vi'){
                                                        alert("Xử lý thành công,chúng tôi sẽ liên hệ cho quý khách trong thời gian sớm nhất !");
                                                    }if(lang=='cn'){
                                                        alert("已送出, 您的訊息我們會盡快處理及回覆！");
                                                    }if(lang=='en'){
                                                        alert("Handling success !");
                                                    }
                                                    $("#thongbao").html('');
                                                   //setTimeout(function(){window.location.href='lien-he.html';},1000);		
                                                });
                                                //alert("Chúc mừng bạn đã đã đăng ký thành viên thành công. !!! ");
                                                //return true;
                                        }	
                                });
                    });
                </script>
                
                </head>
                <body class=" cms-index-index cms-home">
                    <div class="wrapper en-lang-class">
                        <noscript>
                            <div class="global-site-notice noscript">
                                <div class="notice-inner">
                                    <p>
                                        <strong>JavaScript seems to be disabled in your browser.</strong><br/>
                                        You must have JavaScript enabled in your browser to utilize the functionality of this website. </p>
                                </div>
                            </div>
                        </noscript>
                        <div class="page">
                            <div class="header-container-top">

                            </div>
                            <div style="position: fix;">
                                <?php include 'blocks/header.php'; ?>
                                <?php include 'blocks/menu.php'; ?>
                            </div>
                            <div style="clear: both;"></div>
                            <div class="main-container col1-layout">
                                <?php 
                                    switch($com){                
                                            
                                            case "loai" : include "page/loai-sp.php";break;                                            
                                            case "ctsp" : include "page/ctsp.php";break;
                                            case "contact" : include "page/lien-he.php";break; 
                                            case "tim-kiem" : include "page/tim-kiem.php";break;
                                            case "all-cate" : include "page/all-cate.php";break;
                                            case "product" : include "page/san-pham.php";break;
                                            case "danhmuc" : include "page/san-pham.php";break;
                                            case "dongxe" : include "page/dong-xe.php";break;
                                            case "dich-vu" : include "page/dich-vu.php";break;                                             
                                            case "du-an" : include "page/danh-sach-cong-ty.php";break; 
                                            case "dmduan" : include "page/du-an.php";break;
                                            case "ctduan" : include "page/chi-tiet-du-an.php";break; 
                                            case "news" : include "page/tin-tuc.php";break;
                                            case "detail_news" : include "page/chi-tiet-tin.php";break;
                                            case "about-us" : include "page/gioi-thieu.php";break;
                                            case "khuyen-mai" : include "page/khuyen-mai.php";break;
                                            case "tvbh" : include "page/tu-van-bao-hiem.php";break;
                                            case "dklt" : include "page/dang-ky-lai-thu.php";break;
                                            
                                            default : include "page/content-home.php";break;
                                               
                                    }
                                            
                                ?>
                            </div>
                            
                            <div class="footer-container-bottom">
                                <div class="container">
                                    <div class="row">
                                        <div class="span12">
                                            <div class="footer">
                                                <address>&copy; Mitsubishi ISAMCO.</address>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                     <?php
            $str=ob_get_clean();
            $str = str_replace("{gioithieu}" , gioithieu , $str);
            $str = str_replace("{about}" , about , $str);
            $str = str_replace("{faqs}" , faqs , $str);
            
            $str = str_replace("{trangchu}" , trangchu , $str);
            $str = str_replace("{lienhe}" , lienhe , $str);	
            $str = str_replace("{danhmucsp}" , danhmucsp , $str);
            $str = str_replace("{sanpham}" , sanpham , $str);
             $str = str_replace("{ctsanpham}" , ctsanpham , $str); 
            $str = str_replace("{dathang}" , dathang , $str);
            $str = str_replace("{httt}" , httt , $str);
            $str = str_replace("{doitac}" , doitac , $str);
            $str = str_replace("{menu}" , menu , $str);
            $str = str_replace("{chinhanh}" , chinhanh , $str);
           $str = str_replace("{duandalam}" , duandalam , $str);
            
            $str = str_replace("{thongke}" , thongke , $str);
            $str = str_replace("{hoatdongcty}" , hoatdongcty , $str);
            $str = str_replace("{hinhanhsx}" , hinhanhsx , $str);
            $str = str_replace("{sanphammoi}" , sanphammoi , $str);
            $str = str_replace("{spcungloai}" , spcungloai , $str);
            $str = str_replace("{dichvu}" , dichvu , $str);
            $str = str_replace("{kinhdoanh}" , kinhdoanh , $str);

            $str = str_replace("{tintuc}" , tintuc , $str);	
            $str = str_replace("{tuyendung}" , tuyendung , $str);	
            $str = str_replace("{diachi}" , diachi , $str);
            $str = str_replace("{footer}" , footer , $str);

            $str = str_replace("{gioithieucty}" , gioithieucty , $str);
           
            
            $str = str_replace("{chitiet}" , chitiet , $str);
            $str = str_replace("{tintuctonghop}" , tintuctonghop , $str);	
            $str = str_replace("{tinchuyennganh}" , tinchuyennganh , $str);

            $str = str_replace("{coppyright}" , coppyright , $str);

            $str = str_replace("{thuvienanh}" , thuvienanh , $str);
            $str = str_replace("{sanphamchinh}" , sanphamchinh , $str);
            $str = str_replace("{tinlienquan}" , tinlienquan , $str);
            $str = str_replace("{trove}" , trove , $str);
            $str = str_replace("{them}" , them , $str);
            
            $str = str_replace("{chonloaitra}" , chonloaitra , $str);
            $str = str_replace("{dsdathang}" , dsdathang , $str);
            $str = str_replace("{chuachonsp}" , chuachonsp , $str);
            $str = str_replace("{chonsptheobuoc}" , chonsptheobuoc , $str);
            $str = str_replace("{xinquykhach}" , xinquykhach , $str);

            $str = str_replace("{xembando}" , xembando , $str);
            $str = str_replace("{tencty}" , tencty , $str);
            $str = str_replace("{diachilienhe}" , diachilienhe , $str);
            $str = str_replace("{email}" , email , $str);
            $str = str_replace("{noidung}" , noidung , $str);
            $str = str_replace("{tieude}" , tieude , $str);
            $str = str_replace("{dienthoai}" , dienthoai , $str);
            $str = str_replace("{gui}" , gui , $str);
            $str = str_replace("{hoten}" , hoten , $str);
            $str = str_replace("{gia}" , gia , $str);
            $str = str_replace("{xoa}" , xoa , $str);
            $str = str_replace("{thaydoi}" , thaydoi , $str);
            
            $str = str_replace("{giohang}" , giohang , $str);
            $str = str_replace("{hinh}" , hinh , $str);
            
            $str = str_replace("{ttkhachhang}" , ttkhachhang , $str);
            $str = str_replace("{tensp}" , tensp , $str);
            $str = str_replace("{soluong}" , soluong , $str);
            $str = str_replace("{tong}" , tong , $str);
            $str = str_replace("{thanhtien}" , thanhtien , $str);
            $str = str_replace("{tieptucmua}" , tieptucmua , $str);
            $str = str_replace("{thanhtoan}" , thanhtoan , $str);
            $str = str_replace("{xacnhantt}" , xacnhantt , $str);
            $str = str_replace("{hoantat}" , hoantat , $str);
            $str = str_replace("{vetrangchu}" , vetrangchu , $str);
            $str = str_replace("{vuilongdoi}" , vuilongdoi , $str);
            //echo $lang;
            echo $str;
        ?>
                   <?php include 'blocks/back-to-top.php'; ?> 
                </body>
                </html>
