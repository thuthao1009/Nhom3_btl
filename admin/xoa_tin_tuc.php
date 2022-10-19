<?php
     $id= $_GET['id'];
     //kết nối đến csdl
     require('../config.php');
     //truy vấn đến bảng dữ liệu
     $sql= "DELETE FROM tbl_tin_tuc where tt_id=".$id;
     //thực hiện xóa dữ liệu
     mysqli_query($con,$sql);
     //thông báo đã xóa tin tức
;?>
<script type="text/javascript">
	window.alert("Xóa dữ liệu thành công!");
	window.location.href="../admin/quan_tri_tin_tuc.php";
</script>