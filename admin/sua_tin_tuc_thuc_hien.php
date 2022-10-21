<?php
//Lấy các dữ liệu được chuyển sang
$id =$_POST['txtID'];
$tieu_de=$_POST['txtTieuDe'];
$mo_ta=$_POST['txtMoTa'];
$noi_dung=$_POST['txtNoiDung'];
//Đẩy file lêm server
$noi_dat_file_anh_minh_hoa ="../assets/img/".basename($_FILES['txtAnhMinhHoa']['name']);
$file_du_lieu_anh = $_FILES['txtAnhMinhHoa']['tmp_name'];
$tai_anh_len_he_thong = move_uploaded_file($file_du_lieu_anh, $noi_dat_file_anh_minh_hoa);
if (!$tai_anh_len_he_thong) {
	$anh_minh_hoa=NULL;
	//$sql="UPDATE `tbl_tin_tuc` SET `tt_tieu_de` = '".$tieu_de."', `tt_noi_dung` = '".$noi_dung."', `tt_mo_ta` = '".$mo_ta."' WHERE `tbl_tin_tuc`.`tt_id` = '".$id."';

	$sql="UPDATE `tintuc` SET `tt_tieu_de`='".$tieu_de."',`tt_mo_ta`='".$mo_ta."',`tt_noi_dung`='".$noi_dung."' WHERE `tintuc`.`tt_id` = '".$id."'
	";
}
    
 	else {
	$anh_minh_hoa= $_FILES['txtAnhMinhHoa']['name'];
	$sql="UPDATE `tintuc` SET `tt_tieu_de`='".$tieu_de."', `anh_minh_hoa` = '".$anh_minh_hoa."', `tt_mo_ta` = '".$mo_ta." ,`tt_noi_dung`='".$noi_dung."' WHERE `tintuc`.`tt_id` = '".$id."';
	";
     }

     //echo $sql;exit();

	//echo $tieu_de; exit();

	// Kết nối đến CSDL
	require('../config.php');

	
		//echo $sql; exit();

	// Thực hiện xoá dữ liệu
	mysqli_query($con, $sql);

	// Thực hiện thông báo cho mọi người biết các bạn xoá thành công
;?>
<script type="text/javascript">
	window.alert("Cập nhật dữ liệu thành công!");
	window.location.href = "../admin/Quan_tri_tin_tuc.php";
</script>