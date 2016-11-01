<?php
require_once("lib/classQuanTri.php");
$qt = new quantri;	

$loai = $_GET['loai'];
$id = (int) $_GET['id'];

if($loai == "baiviet") {
    $qt->xoabaiviet($id);	
}
if($loai == "menu") {
    mysql_query("DELETE FROM menu WHERE menu_id = $id");
}
if($loai=="product"){
	$sql = "DELETE FROM product WHERE product_id = $id";
        $rs = mysql_query($sql) or die(mysql_error());
}
if($loai=="danhmuc"){
	$sql = "DELETE FROM category WHERE cate_id = $id";
        $rs = mysql_query($sql) or die(mysql_error());
}
if($loai=="theloai"){
	$sql = "DELETE FROM theloai WHERE idTL = $id";
        $rs = mysql_query($sql) or die(mysql_error());
        $sql1 = "DELETE FROM category WHERE idTL = $id";
        $rs1 = mysql_query($sql1) or die(mysql_error());
}
if($loai=="duan"){
	$sql = "DELETE FROM duan WHERE idDuAn = $id";
        $rs = mysql_query($sql) or die(mysql_error());
}
if($loai=="image"){
	$sql = "DELETE FROM hinhanh_home WHERE idHinh = $id";
        $rs = mysql_query($sql) or die(mysql_error());
}
if($loai=="donhang"){
	$sql = "DELETE FROM donhang WHERE idDH = $id "; 
        $rs1 = mysql_query($sql) or die(mysql_error());
        $sql2="DELETE FROM donhangct WHERE idDH = $id ";
        $rs2 = mysql_query($sql2) or die(mysql_error());
}
?>