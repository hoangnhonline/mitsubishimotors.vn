<?php
if (isset($_POST['btnSave'])) {
    $modelCate->insertCate();
    header("location:?com=danhmuc_list");
}
?>
<script type="text/javascript">
    function validate(){
        var flg = true;
        if($('#cate_name').val()==''){
                alert('Chưa nhập tên menu!');
                flg = false;
        }
        return flg;
    }
</script>

<form action="" method="post" name="form_add_dm_ks">
  <div>
    <div>
      <h3>{danhmuc} : <?php echo (isset($_GET['cate_id']) ? "Cập nhật" : "{themmoi}") ?></h3>
    </div>
    <div class="clr"></div>
  </div>
  <div id="main_admin">
  <div id="main_left">
    <table>
      <tr class="left">
        <td width="100px">{danhmuc}</td>
        <td><select name='parent_id' id="parent_id">
            <option value='0'>--Chọn--</option>
            <?php $rs_cha = $modelCate->getAllTL();
            while($row_cha = mysql_fetch_assoc($rs_cha)){ ?>
            <option value='<?php echo $row_cha['idTL'];?>'><?php echo $row_cha['TenTL_vi'];?></option>
            <?php } ?>
          </select></td>
      </tr>
      <?php /*<tr class="left">
        <td>{tendailoan}</td>
        <td><input type="text" name="cate_name_cn" id="cate_name_cn" style="width:500px;height:25px" /></td>
      </tr>*/?>
      <tr class="left">
        <td>{tenvietnam}</td>
        <td><input type="text" name="cate_name_en" id="cate_name_en" style="width:500px;height:25px" /></td>
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

