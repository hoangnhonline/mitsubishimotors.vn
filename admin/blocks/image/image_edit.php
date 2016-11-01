<?php
$idHinh = (int) $_GET['idHinh'];
$rs_chitiet = $modelHome->getDetailImageHome($idHinh);
$row = mysql_fetch_assoc($rs_chitiet);
if (isset($_POST['btnSave'])) {
    $modelHome->updateImage($idHinh);
    header("location:?com=image_list");
}
?>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="ckfinder/ckfinder.js"></script>
<script type="text/javascript">
function BrowseServer( startupPath, functionData ){
	var finder = new CKFinder();
	finder.basePath = 'ckfinder/'; //Đường path nơi đặt ckfinder
	finder.startupPath = startupPath; //Đường path hiện sẵn cho user chọn file
	finder.selectActionFunction = SetFileField; // hàm sẽ được gọi khi 1 file được chọn
	finder.selectActionData = functionData; //id của text field cần hiện địa chỉ hình
	//finder.selectThumbnailActionFunction = ShowThumbnails; //hàm sẽ được gọi khi 1 file thumnail được chọn
	finder.popup(); // Bật cửa sổ CKFinder
} //BrowseServer

function SetFileField( fileUrl, data ){
	document.getElementById( data["selectActionData"] ).value = fileUrl;
}
</script>
<script type="text/javascript">
    function validate(){
        var flg = true;
        if($('#category_id').val()==0){
            alert('Chưa chọn category!');
            return false;
        }
		if($('#image_name').val()==''){
			alert('Chưa nhập tiêu đề!');
			return false;
		}
    }
</script>

<form action="" method="post" name="form_add_dm_ks">
  <div>
    <div>
      <h3>Ds hình ảnh : <?php echo (isset($_GET['idHinh']) ? "Cập nhật" : "Thêm mới") ?></h3>
    </div>
    <div class="clr"></div>
  </div>
  <div id="main_admin">
  <div id="main_left">
    <table>
          
      <tr class="left">
        <td>Đường dẩn hình</td>
        <td><input type="text" name="url_images" id="url_images" class="tf" style="width:300px;height:25px" value="<?php echo $row['Url']; ?>"/>

          <input type="button" name="btnChonFile" value="Chọn" onclick="BrowseServer('Images:/','url_images')"  /></td>
      </tr>
      
      
      <tr class="left">
        <td>&nbsp;</td>
        <td>
        	<input type="submit" name="btnSave" value="  Save  " onclick="return validate();" />
        	<input type="reset" name="btnReset" value="  Reset  "/>
        </td>
      </tr>
    </table>
  </div>
</form>
</div>

