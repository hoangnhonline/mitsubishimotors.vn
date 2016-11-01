<?php
require_once "../Model/Db.php";
$db = new db;

echo $idTL = (int) $_POST['idTL'];
$rs = mysql_query('SELECT * FROM khuvucduan WHERE idQuocGia = '.$idTL);
while($row = mysql_fetch_assoc($rs)){
?>   
<option value="<?php echo $row['idKhuVuc'];?>"><?php echo $row['TenKhuVuc_'.$lang];?></option>
<?php    
}
?>
