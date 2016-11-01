<?php 
require_once "Db.php";
class Home extends Db{	
	
	function getDetailImage($article_id){
		$sql = "SELECT * FROM product WHERE product_id = $article_id";
		$rs = mysql_query($sql) or die(mysql_error());
		return $rs;
	}
        function getDetailArticle($article_id){
		$sql = "SELECT * FROM article WHERE article_id = $article_id";
		$rs = mysql_query($sql) or die(mysql_error());
		return $rs;
	}
        function getListCate($parent_id = -1 ) {
            $sql = "SELECT * FROM category WHERE parent_id = $parent_id or $parent_id = -1 ORDER BY cate_id";
            $rs = mysql_query($sql) or die(mysql_error());
            return $rs;
        }
	function menu_list($type=-1){
		$sql = "SELECT * FROM menu WHERE type = $type OR $type=-1 ORDER BY menu_id ASC";
		$rs = mysql_query($sql) or die(mysql_error());
		return $rs;
	}	
	function getBlockContent($block_id){
		$sql = "SELECT block_content FROM blocks WHERE block_id = $block_id";
		$rs = mysql_query($sql) or die(mysql_error());
		$row = mysql_fetch_assoc($rs);
		return $row['block_content'];
	}
	function getMenuIdByAlias($menu_alias){
		$sql = "SELECT menu_id FROM menu WHERE menu_alias = '$menu_alias'";
		$rs = mysql_query($sql) or die(mysql_error());
		$row = mysql_fetch_assoc($rs);
		return $row['menu_id'];
	}
        function getDetailCateByAlias($cate_alias){
		$sql = "SELECT * FROM category WHERE cate_alias = '$cate_alias'";
		$rs = mysql_query($sql) or die(mysql_error());
		return $rs;
	}
	function getDetailMenuByAlias($menu_alias){
		$sql = "SELECT * FROM menu WHERE menu_alias = '$menu_alias'";
		$rs = mysql_query($sql) or die(mysql_error());
		return $rs;
	}
	function getListArticleByCategory($category_id=-1,$offset=-1,$limit=-1){
		$sql = "SELECT * FROM article WHERE category_id = $category_id OR $category_id = -1";
		if($limit > 0 && $offset >=0) $sql .= " LIMIT $offset,$limit";		
		$rs = mysql_query($sql) or die(mysql_error());
		return $rs;
	}
        function getListImageByCategoryNew($getby,$category_id=-1,$offset=-1,$limit=-1){
		$sql = "SELECT * FROM product WHERE $getby = $category_id OR $category_id = -1";
		if($limit > 0 && $offset >=0) $sql .= " LIMIT $offset,$limit";		  
		$rs = mysql_query($sql) or die(mysql_error());
		return $rs;
	}
        function getListImageSlider(){
		$sql = "SELECT * FROM product ORDER BY RAND() LIMIT 0,10";		  
		$rs = mysql_query($sql) or die(mysql_error());
		return $rs;
	}
        function getListImageHot(){
		$sql = "SELECT * FROM product WHERE is_hot = 1 ORDER BY product_id DESC LIMIT 0,12";		  
		$rs = mysql_query($sql) or die(mysql_error());
		return $rs;
	}
	function getListArticleByCategoryNew($category_id=-1,$offset=-1,$limit=-1){
		$sql = "SELECT * FROM article WHERE category_id = $category_id OR $category_id = -1 ORDER BY article_id DESC ";
		if($limit > 0 && $offset >=0) $sql .= " LIMIT $offset,$limit";		
		$rs = mysql_query($sql) or die(mysql_error());
		return $rs;
	}
	function getNewsRelated($article_id){
		$sql = "SELECT * FROM article WHERE category_id = 2 AND article_id <> $article_id ORDER BY article_id DESC LIMIT 0,5";
		$rs = mysql_query($sql);
		return $rs;
	}
	function getNewsHome(){
		$sql = "SELECT * FROM article WHERE category_id = 2 ORDER BY article_id DESC LIMIT 0,4";
		$rs = mysql_query($sql);
		return $rs;
	}
        function getHinhAnhHome(){
		$sql = "SELECT * FROM hinhanh_home ORDER BY RAND()";
		$rs = mysql_query($sql);
		return $rs;
	}
        function getDetailImageHome($idHinh) {
            $sql = "SELECT * FROM hinhanh_home WHERE idHinh = $idHinh";
            $rs = mysql_query($sql) or die(mysql_error());
            return $rs;
        }
        function insertImage() {           
            $url_images = $this->processData($_POST['url_images']);            

            $sql = "INSERT INTO hinhanh_home	VALUES(NULL,'$url_images')";
            mysql_query($sql) or die(mysql_error() . $sql);
        }

        function updateImage($idHinh) {
            $url_images = $this->processData($_POST['url_images']);
            
            $sql = "UPDATE hinhanh_home
                                            SET Url='$url_images'
                                            WHERE idHinh = $idHinh ";
            mysql_query($sql) or die(mysql_error() . $sql);
        }
		
}

?>