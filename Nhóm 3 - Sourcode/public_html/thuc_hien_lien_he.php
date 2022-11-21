<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>TRÒ CHUYỆN NGAY</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed" style = "background-color:#84b78c;">
<?php 
include("config.php"); 
	$lh_hoten=$_POST['name'];
	$lh_email=$_POST['email'];
	$lh_tieude=$_POST['subject'];
	$lh_noidung=$_POST['message'];
	
	$sql="INSERT INTO `lienhe` (`lh_id`, `lh_hoten`, `lh_email`, `lh_tieude`, `lh_noidung`, `lh_created_at`, `lh_trang_thai`) VALUES (NULL, '".$lh_hoten."', '".$lh_email."', '".$lh_tieude."', '".$lh_noidung."', current_timestamp(), '0');";
		// echo $sql; exit();
		 $lienhe= mysqli_query($con, $sql);

echo"
<script type='text/javascript'>;
	window.alert('Đã gửi tin nhắn thành công!');
	window.location.href='./contact.php';
	 </script> ";
;?>
</body>
</html>
