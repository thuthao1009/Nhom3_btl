
<?php
	// Lấy các dữ liệu được chuyển sang
	$id = $_POST['txtID'];
	
	?>

	<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Quản trị tin tức</title>
</head> 

<body>
	<h3>Tất cả tin tức</h3>
	<?php 
		// Kết nối đến CSDL
		require('../config.php');

		// Truy vấn đến bảng dữ liệu
		$sql="SELECT sp_id,cthd_soluong from hoadonchitiet where hd_id= '".$id."' ";

		// Thực hiện truy vấn đến bảng dữ liệu
		$san_pham=mysqli_query($con, $sql);
	;?>
	<p style="text-align: right;"><a href="../admins/them_moi_san_pham.php"><img src= "../mis.jpg" style="width: 30px; height: auto;"></a></p>
	
	<table>
		<tr>
			<td style="width: 50px; text-align: center; font-weight: bold;">STT</td>
			<td style="width: 600px; text-align: center; font-weight: bold;">Tên sản phẩm</td>
			<td style="width: 90px; text-align: center; font-weight: bold;">Mô tả</td>
			<td style="width: 90px; text-align: center; font-weight: bold;">Giá bán</td>
			<td style="width: 90px; text-align: center; font-weight: bold;">Số lượng sản phẩm</td>
			<td style="width: 50px; text-align: center; font-weight: bold;">Sửa</td>
			<td style="width: 50px; text-align: center; font-weight: bold;">Xoá</td>
		</tr>
		<?php 
		// In kết quả truy vấn ra màn hình
		$i=0;
		while ($row = mysqli_fetch_array($san_pham)) {
			$i++;
		;?>
		<tr>
			<td style="text-align: center;"><?php echo $i;?></td>
			<td><?php echo $row["sp_id"];?></td>
			<td style="text-align: center;"><?php echo $row["cthd_soluong"];?></td>
			
		</tr>
		<?php 
		}
		;?>
	</table>
</body>
</html>	






	// Thực hiện thông báo cho mọi người biết các bạn thêm mới thành công
;?>
<!--<script type="text/javascript">
	window.alert("Cập nhật dữ liệu thành công!");
	window.location.href = "../admins/quan_tri_san_pham.php";
</script>