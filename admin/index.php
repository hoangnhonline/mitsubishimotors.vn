<?php
require_once "lib/defined.php";
?>
<?php
ob_start();
session_start();
$lang_arr=array("vi","cn");
    if (isset($_GET['lang']) == true){
      if (in_array($_GET['lang'], $lang_arr)==true) $lang = $_GET['lang'];
    }
    elseif (isset($_SESSION['lang']) == true){ 
     if (in_array($_SESSION['lang'],$lang_arr) == true) $lang = $_SESSION['lang'];
    }else $lang= 'vi';
    $_SESSION['lang'] = $lang;
    setcookie('lang' , $lang , time()+60*60*24*30);

       //echo $lang; die;
        require_once "lang/lang_$lang.php";
require_once "checkLogin.php";
require_once("Model/Menu.php");
require_once("Model/Cate.php");
require_once("Model/Block.php");
require_once("Model/Article.php");
require_once("Model/Product.php");
require_once("Model/Home.php");
require_once("Model/DonHang.php");
require_once("lib/class.user.php");

$modelMenu = new Menu;
$modelArticle = new Article;
$modelBlock = new Block;
$modelProduct = new Product;
$modelHome = new Home;
$modelCate = new Cate;
$modelDonHang = new DonHang;
$modelUser = new user;

$com = (isset($_GET['com'])) ? $_GET['com'] : "";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        
        <base href="http://mitsubishimotors.vn/admin/"
        <title></title>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <!-- stylesheets -->
        <link rel="stylesheet" type="text/css" href="resources/css/reset.css" />
        <link rel="stylesheet" type="text/css" href="resources/css/style.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="resources/css/style_full.css" />
        <link id="color" rel="stylesheet" type="text/css" href="resources/css/colors/blue.css" />
        <!-- scripts (jquery) -->
        <script src="resources/scripts/jquery-1.4.2.min.js" type="text/javascript"></script>
        <!--[if IE]><script language="javascript" type="text/javascript" src="resources/scripts/excanvas.min.js"></script><![endif]-->
        <script src="resources/scripts/jquery-ui-1.8.custom.min.js" type="text/javascript"></script>

        <script src="resources/scripts/tiny_mce/jquery.tinymce.js" type="text/javascript"></script>
        <!-- scripts (custom) -->
        <script src="resources/scripts/smooth.js" type="text/javascript"></script>
        <script src="resources/scripts/smooth.menu.js" type="text/javascript"></script>
        <script src="resources/scripts/smooth.table.js" type="text/javascript"></script>
        <script src="resources/scripts/smooth.dialog.js" type="text/javascript"></script>
        <script src="resources/scripts/smooth.autocomplete.js" type="text/javascript"></script>

        <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
        <script type="text/javascript" src="ckfinder/ckfinder.js"></script>
        <script src="js/admin.js" type="text/javascript"></script>
        <script src="js/drag.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                style_path = "resources/css/colors";

                $("#date-picker").datepicker();

                $("#box-tabs, #box-left-tabs").tabs();
                $("#box_article_comments").dialog({modal: true, title: 'Bình luận trên bài viết', width: 900, draggable: false, resizable: false});
            });

            $(function() {

                $(".ngay").datepicker({
                    numberOfMonths: 1, dateFormat: 'dd-mm-yy',
                    monthNames: ['Một', 'Hai', 'Ba', 'Tư', 'Năm', 'Sáu', 'Bảy', 'Tám', 'Chín',
                        'Mười', 'Mười một', 'Mười hai'],
                    monthNamesShort: ['Tháng1', 'Tháng2', 'Tháng3', 'Tháng4', 'Tháng5',
                        'Tháng6', 'Tháng7', 'Tháng8', 'Tháng9', 'Tháng10', 'Tháng11', 'Tháng12'],
                    dayNames: ['Chủ nhật', 'Thứ hai', 'Thứ ba', 'Thứ tư', 'Thứ năm',
                        'Thứ sáu', 'Thứ bảy'],
                    dayNamesMin: ['CN', 'T2', 'T3', 'T4', 'T5', 'T6', 'T7'],
                    showWeek: true, showOn: 'both',
                    changeMonth: true, changeYear: true,
                    currentText: 'Hôm nay', weekHeader: 'Tuần'

                });

            })
            $("#reset").click(function() {
                $.post('reset.php', {}, function(data) {
                    alert(data);
                })
            })


        </script>
    </head>
    <body>
        <div id="colors-switcher" class="color">
            <a href="" class="blue" title="Blue"></a>
            <a href="" class="green" title="Green"></a>
            <a href="" class="brown" title="Brown"></a>
            <a href="" class="purple" title="Purple"></a>
            <a href="" class="red" title="Red"></a>
            <a href="" class="greyblue" title="GreyBlue"></a>
        </div>
        <!-- header -->
        <div id="header">
            <!-- logo -->
            <div id="logo">
                <h1><a href="" title="ISAMCO MITSUBISHI Admin"><img src="../img/header/ten-cty.png" alt="mitsubishimotors.vn"  /></a></h1>
            </div>
            <!-- end logo -->
            <!-- logan -->
            
            <!-- end logan -->
           
            <ul id="user">  
                <li><a href="thoat.php">Logout</a></li>
            </ul>
            <!-- end user -->
            <div id="header-inner">
                <div id="home">
                    <a target="_blank" href="http://mitsubishimotors.vn/"></a>
                </div>
                <?php include URL_LAYOUT . "menu.php"; ?>
                <!-- end quick -->
                <div class="corner tl"></div>
                <div class="corner tr"></div>
            </div>
        </div>
        <!-- end header -->
        <!-- content -->
        <div id="content">
            <!-- table -->
            <div class="box">
                <div style="clear:both"></div>
                <?php
                $tmpCom = explode('_', $com);

                if ($com == "")
                    include "blocks/product/product_list.php";
                else
                    include "blocks/" . $tmpCom[0] . '/' . $com . '.php';
                ?>
            </div>

            <!-- end table -->



        </div>
        <!-- end content -->
        <!-- footer -->
        <div id="footer">
            <p>Copyright &copy; 2000-2010 Your Company. All Rights Reserved.</p>
        </div>
        <!-- end footert -->
        
        <?php
            $str=ob_get_clean();
            $str = str_replace("{sanpham}" , sanpham , $str);
            $str = str_replace("{dssanpham}" , dssanpham , $str);
            $str = str_replace("{themsp}" , themsp , $str);
            $str = str_replace("{quanly}" , quanly , $str);
            $str = str_replace("{xemds}" , xemds , $str);
            $str = str_replace("{danhmuc}" , danhmuc , $str);
            $str = str_replace("{themdanhmuccha}" , themdanhmuccha , $str);
            $str = str_replace("{themdanhmuccon}" , themdanhmuccon , $str);
            $str = str_replace("{qldanhmuc}" , qldanhmuc , $str);
            $str = str_replace("{xem}" , xem , $str);
            $str = str_replace("{tendailoan}" , tendailoan , $str);
            $str = str_replace("{tenvietnam}" , tenvietnam , $str);
            $str = str_replace("{tentienganh}" , tentienganh , $str);
            $str = str_replace("{hinhanh}" , hinhanh , $str);
            $str = str_replace("{gia}" , gia , $str);
            $str = str_replace("{gianho}" , gianho , $str);
            $str = str_replace("{gialon}" , gialon , $str);
            $str = str_replace("{mota}" , mota , $str);
            $str = str_replace("{chonhinh}" , chonhinh , $str);
            $str = str_replace("{themmoi}" , themmoi , $str);
            $str = str_replace("{baiviet}" , baiviet , $str);
            $str = str_replace("{tintuc}" , tintuc , $str);
            $str = str_replace("{dsbaiviet}" , dsbaiviet , $str);
            $str = str_replace("{thembaiviet}" , thembaiviet , $str);
            $str = str_replace("{tieudedailoan}" , tieudedailoan , $str);
            $str = str_replace("{tieudevietnam}" , tieudevietnam , $str);
            $str = str_replace("{nddailoan}" , nddailoan , $str);
            $str = str_replace("{ndvietnam}" , ndvietnam , $str);
            $str = str_replace("{ndtienganh}" , ndtienganh , $str);
            $str = str_replace("{motacn}" , motacn , $str);
            $str = str_replace("{motavi}" , motavi , $str);
            $str = str_replace("{motaen}" , motaen , $str);
            $str = str_replace("{duandalam}" , duandalam , $str);
            $str = str_replace("{dsduan}" , dsduan , $str);
            $str = str_replace("{themduan}" , themduan , $str);
            
            $str = str_replace("{dsgiohang}" , dsgiohang , $str);
            $str = str_replace("{giohang}" , giohang , $str);
            $str = str_replace("{stt}" , stt , $str);
            $str = str_replace("{ten}" , ten , $str);
            $str = str_replace("{tensanpham}" , tensanpham , $str);
            $str = str_replace("{dienthoai}" , dienthoai , $str); 
            $str = str_replace("{diachi}" , diachi , $str); 
            $str = str_replace("{email}" , email , $str); 
            $str = str_replace("{ngaydathang}" , ngaydathang , $str);
            $str = str_replace("{xemdathang}" , xemdathang , $str);
            $str = str_replace("{tongtien}" , tongtien , $str);
            $str = str_replace("{tong}" , tong , $str);
            $str = str_replace("{donhangchitiet}" , donhangchitiet , $str);
            $str = str_replace("{tongsldathang}" , tongsldathang , $str);
            $str = str_replace("{soluong}" , soluong , $str);
            $str = str_replace("{dongia}" , dongia , $str);
            $str = str_replace("{thanhtien}" , thanhtien , $str);
            $str = str_replace("{capnhattrangthai}" , capnhattrangthai , $str); 
            $str = str_replace("{dathanhtoan}" , dathanhtoan , $str); 
            $str = str_replace("{choxuly}" , choxuly , $str);
            $str = str_replace("{trangthai}" , trangthai , $str);
            
            $str = str_replace("{nguoidung}" , nguoidung , $str);
            $str = str_replace("{thaymk}" , thaymk , $str);
            $str = str_replace("{mkcu}" , mkcu , $str); 
            $str = str_replace("{mkmoi}" , mkmoi , $str);
            $str = str_replace("{nhaplaimkmoi}" , nhaplaimkmoi , $str);
            
            
            echo $str;
        ?>
    </body>
</html>