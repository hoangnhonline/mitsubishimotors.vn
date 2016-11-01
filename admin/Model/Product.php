<?php

require_once "Db.php";
class Product extends Db {

    function getDetailProduct($product_id) {
        $sql = "SELECT * FROM product WHERE product_id = $product_id";
        $rs = mysql_query($sql) or die(mysql_error());
        return $rs;
    }
    function getProduct($offset = -1, $limit = -1) {
        
         $sql = "SELECT * FROM product Order by product_id DESC";
        if ($limit > 0 && $offset >= 0)
            echo $sql .= " LIMIT $offset,$limit";
        $rs = mysql_query($sql) or die(mysql_error());
        return $rs;
    }
    function getProductHome() {
        
         $sql = "SELECT * FROM product ORDER BY RAND()  DESC LIMIT 0,12";        
        $rs = mysql_query($sql) or die(mysql_error());
        return $rs;
    }
    
     function getProductNews() {
        $sql = "SELECT * FROM product Order by product_id DESC Limit 0,20";
        $rs = mysql_query($sql) or die(mysql_error());
        return $rs;
    }
    
    function getListProductByCategory( $offset = -1, $limit = -1) {
        $sql = "SELECT * FROM product ORDER BY product_id DESC";
        if ($limit > 0 && $offset >= 0)
            $sql .= " LIMIT $offset,$limit";
        $rs = mysql_query($sql) or die(mysql_error());
        return $rs;
    }
    function getListProductByTheLoai($idTL = -1, $offset = -1, $limit = -1) {
       $sql = "SELECT * FROM product WHERE idTL = $idTL    ";  
        if ($limit > 0 && $offset >= 0)
            $sql .= " LIMIT $offset,$limit";
        $rs = mysql_query($sql) or die(mysql_error());
        return $rs;
    }
    
    function SanPham_List_TheoLoai($idLoai = -1 , $tukhoa = '') {
        $sql = "SELECT product_id,product_name_cn,product_name_vi,product_alias,price,url_images FROM product 
					WHERE category_id = $idLoai";        

        $rs = mysql_query($sql) or die(mysql_error());
        return $rs;
    }
    
    function SanPham_List_TheoTheLoai($idTL = -1 ,$tukhoa = '') {
        $sql = "SELECT product_id,product_name_cn,product_name_vi,product_alias,url_images,price_small,mota_vi FROM product 
					WHERE idTL = $idTL ";        

        $rs = mysql_query($sql) or die(mysql_error());
        return $rs;
    }
    
    function SanPham_List_TheoTheLoai_IDSP($idTL = -1 , $idsp, $tukhoa = '') {
       $sql = "SELECT product_id,product_name_cn,product_name_vi,product_alias,url_images,price_small,mota_vi FROM product 
					WHERE idTL = $idTL AND product_id <> $idsp ORDER BY rand( )";        

        $rs = mysql_query($sql) or die(mysql_error());
        return $rs;
    }
    function SanPham_Khac($idTL = -1 ,  $tukhoa = '') {
       $sql = "SELECT product_id,product_name_cn,product_name_vi,product_alias,url_images,price_small,mota_vi FROM product 
					WHERE idTL != $idTL  ORDER BY rand( ) LIMIT 0,10";        

        $rs = mysql_query($sql) or die(mysql_error());
        return $rs;
    }
    
    function getIDProductByTenKD($Ten_KD) {
        $sql = "SELECT cate_id FROM category WHERE cate_alias='$Ten_KD'";       
        $rs = mysql_query($sql) or die(mysql_error());
        return $rs;
    }

    function getDetailCate($cate_id){
        $sql = "SELECT * FROM category WHERE cate_id = $cate_id";
        $rs = mysql_query($sql) or die(mysql_error());
        return $rs;
    }
    function getIDTL($category_id){
        $sql1="SELECT idTL from category Where cate_id=$category_id";
        $rs = mysql_query($sql1) or die(mysql_error());
        return $rs;
    }
    function insertProduct() {
        $category_id = (int) $_POST['category_id'];
        $a=  $this->getIDTL($category_id);
        $row=  mysql_fetch_assoc($a);
        $idTL=$row['idTL'];
        $product_name_cn = $this->processData($_POST['product_name_cn']);
        $product_name_vi = $this->processData($_POST['product_name_vi']);
        $product_name_en = $this->processData($_POST['product_name_en']);
        $price_small = $_POST['price'];
        $price_big = $_POST['price_big'];
        $url_images = $this->processData($_POST['url_images']);
        $mota_cn = $this->processData($_POST['mota_cn']);
        $mota_vi = $this->processData($_POST['mota_vi']);
        $mota_en = $this->processData($_POST['mota_en']);
        $content_cn = $_POST['content_cn'];
        $content_vi = $_POST['content_vi'];
        $content_en = $_POST['content_en'];
        $product_name_alias = $this->changeTitle($product_name_vi);
       

       $sql = "INSERT INTO product	VALUES(NULL,'$product_name_cn','$product_name_vi','$product_name_en','$product_name_alias','$price_small','$price_big','$url_images','$mota_cn','$mota_vi','$mota_en','$content_cn','$content_vi','$content_en','$category_id','$idTL')";
        mysql_query($sql) or die(mysql_error() . $sql);
    }

    function updateProduct($product_id) {
        $category_id = (int) $_POST['category_id'];
        $a=  $this->getIDTL($category_id);
        $row=  mysql_fetch_assoc($a);
        $idTL=$row['idTL'];
       $product_name_cn = $this->processData($_POST['product_name_cn']);
        $product_name_vi = $this->processData($_POST['product_name_vi']);
        $product_name_en = $this->processData($_POST['product_name_en']);
        $price_small = $_POST['price'];
        $price_big = $_POST['price_big'];
        $url_images = $this->processData($_POST['url_images']);
        $mota_cn = $this->processData($_POST['mota_cn']);
        $mota_vi = $this->processData($_POST['mota_vi']);
        $mota_en = $this->processData($_POST['mota_en']);
        $content_cn = $_POST['content_cn'];
        $content_vi = $_POST['content_vi'];
        $content_en = $_POST['content_en'];
        $product_name_alias = $this->changeTitle($product_name_vi);

       echo $sql = "UPDATE product
					SET product_name_cn = '$product_name_cn',product_name_vi = '$product_name_vi',product_name_en = '$product_name_en',product_alias = '$product_name_alias',
                                            price_small = '$price_small',price_big ='$price_big',MoTa_cn = '$mota_cn',MoTa_vi = '$mota_vi',MoTa_en = '$mota_en',content_cn = '$content_cn',content_vi = '$content_vi',content_en = '$content_en',url_images = '$url_images',
					category_id = '$category_id',idTL='$idTL'
					WHERE product_id = $product_id ";
        mysql_query($sql) or die(mysql_error() . $sql);
    }

}

?>