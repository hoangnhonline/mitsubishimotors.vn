<?php 
session_start();
require_once('../admin/Model/Db.php'); 
$d = new db;

$email=$d->processData($_POST['email']);
$phone = $d->processData($_POST['phone']);
$noidung = $d->processData($_POST['noidung']);
$lang=$d->processData($_POST['lang']);

$nguoilienhe= $d->processData($_POST['nguoilienhe']);
/*
if($d->checkEmailExist($email)==false){
	$d -> insertCustomer($dien_thoai,$dia_chi,$ho_ten);
	$idKH = mysql_insert_id();
	$idDH = $d->insertDonHang($idKH);	
}else{
	$idKH = $d->getIDKH($email);
	$d->updateInfoCustomer($idKH,$email);
	$idDH = $d->insertDonHang($idKH);
}*/
        //$d -> insertCongTy($tencty,$nguoidaidien,$address,$phone,$fax,$website,$email);
	//$congty_id = mysql_insert_id();
	//$user = $d->insertUser($congty_id,$user,$email,$pass);  
        //$id_user = mysql_insert_id();
        
        //$get_user=$d->getUser($id_user);
        //$row=  mysql_fetch_assoc($get_user);
        $emailnhan='hoangloc.isamco@gmail.com';
        //$emailnhan = "emailkhachmoidangky@gmail.com";
        if($lang=='vi'){
            $tieudethu="(Thông báo từ website mitsubishimotors.vn > Liên Hệ) : $tieude ";       
            $noidungthu = 'Thư được gửi từ: <strong>'.$nguoilienhe.'</trong> <br/>'
                    
                    .'<span><strong>Email:</strong> '.$email.'</span><br/>'                   
                    .'<span><strong>Điện thoại:</strong> '.$phone.'</span><br/>'                    
                    . 'Với nội dung như sau : <strong>'.$noidung.'</strong> '; 
          
            $d->smtpmailer($emailnhan, "hoangloc.isamco@gmail.com", 'MITSUBISHI ISAMCO',$tieudethu,$noidungthu);
        }elseif ($lang=='cn') {
            $tieudethu="$tieude";       
            $noidungthu = '郵件寄自: <strong>'.$nguoilienhe.'</trong> <br/>'
                    .'<span><strong>公司名稱: </strong> '.$tencty.'</span><br/>'
                    .'<span><strong>電 子 郵 件: </strong> '.$email.'</span><br/>'                   
                    .'<span><strong>電 話:</strong> '.$phone.'</span><br/>'
                    .'<span><strong>傳 真:</strong> '.$fax.'</span><br/>'
                    . '有了這樣的內容 : <strong>'.$noidung.'</strong> ';         
            $d->smtpmailer($emailnhan, "hoangloc.isamco@gmail.com", 'MITSUBISHI ISAMCO',$tieudethu,$noidungthu);
        }  else {
            $tieudethu="$tieude";       
            $noidungthu = 'Mail sent from: <strong>'.$nguoilienhe.'</trong> <br/>'
                   
                    .'<span><strong>Email:</strong> '.$email.'</span><br/>'
                    
                    .'<span><strong>Tel:</strong> '.$phone.'</span><br/>'
                    
                    . 'With content : <strong>'.$noidung.'</strong> ';
            $d->smtpmailer($emailnhan, "hoangloc.isamco@gmail.com", 'MITSUBISHI ISAMCO',$tieudethu,$noidungthu);
        }

?>