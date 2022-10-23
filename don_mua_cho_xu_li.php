<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Theo dõi đơn hàng</title>
</head>
<body>
	<a href="don_mua_cho_xu_li.php">Chờ xử lí</a>
	<a href="don_mua_dang_giao.php">Đang giao</a>
	<br>
<?php


	include("./config.php");

//	$sql= "SELECT * FROM sanpham ORDER BY SP_ID";
	

	//Thực thi câu lệnh lấy dữ liệu mong muốn
	$hoa_don= mysqli_query($con, $sql);

	//Hiển thị ra dữ liệu vừa lấy
	$i=0;
	while($row=mysqli_fetch_array($hoa_don)){
		$i++;

	//echo $i.". ".$row["hd_id"]."<br>";
	echo "Tên sản phẩm:".$row["sp_tensp"]." <br> " ;
	echo "<img src='./img/".$row["sp_anh_minh_hoa"]."'><br>"; 
	echo "Mô tả:".$row["sp_mo_ta"]."<br>";
	echo "Giá:".$row["sp_gia"]."<br>";
	echo "<hr>";

}
;?>



</body>
</html>