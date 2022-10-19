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
		require('../Database/config.php');

		// Truy vấn đến bảng dữ liệu
		$sql="SELECT * FROM tintuc ORDER BY tt_id DESC";

		// Thực hiện truy vấn đến bảng dữ liệu
		$tin_tuc=mysqli_query($con, $sql);
	;?>
	
	<p style="text-align: right;"><a href="../admin/them_moi_tin_tuc_1.php"><img src= ".../mis.jpg" style="width: 30px; height: auto;"></a></p>
	<table>
		<tr>
			<td style="width: 50px; text-align: center; font-weight: bold;">STT</td>
			<td style="width: 600px; text-align: center; font-weight: bold;">Tiêu đề bài viết</td>
			<td style="width: 90px; text-align: center; font-weight: bold;">Ngày đăng</td>
			<td style="width: 50px; text-align: center; font-weight: bold;">Sửa</td>
			<td style="width: 50px; text-align: center; font-weight: bold;">Xoá</td>
		</tr>
		<?php 
		// In kết quả truy vấn ra màn hình
		$i=0;
		while ($row = mysqli_fetch_array($tin_tuc)) {
			$i++;
		;?>
		<tr>
			<td style="text-align: center;"><?php echo $i;?></td>
			<td><?php echo $row["tt_tieu_de"];?></td>
			<td style="text-align: center;"><?php echo $row["tt_created_at"];?></td>
			<td style="text-align: center;"><a href="../admin/sua_tin_tuc.php?id=<?php echo $row["tt_id"];?>"><img src= "../Image/mis.jpg"style="width: 30px; height: auto;"></a></td>
			<td style="text-align: center;"><a href="../admin/xoa_tin_tuc.php?id=<?php echo $row["tt_id"];?>"><img src= ".../mis.jpg" style="width: 30px; height: auto;"></a></td>
		</tr>
		<?php 
		}
		;?>
	</table>
</body>
</html>