<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php
	include("./config.php");
	if(isset($_GET['action'])){

		echo "action";
	}
	
;?>
	<h1>Trang giỏ hàng</h1>
	<a href="shop_test.php">Trang chủ</a>
	<form action="cart.php?action=submit" method="POST ">
	<table>
		<tr>
			<th>STT</th>
			<th>Tên sản phẩm</th>
			<th>Giá</th>
			<th>Số lượng</th>
			<th>Thành tiền</th>
		</tr>
		<tr>
			<td>STT</td>
			<td>Tên sản phẩm</td>
			<td>Giá</td>
			<td>Số lượng</td>
			<td>Thành tiền</td>
		</tr>
		<tr>
			<td>Tổng tiền</td>
		</tr>
	</table>
	<div >
		<input type="submit" name="update_click" value="Cập nhật"> 
	</div>
	<div><label>Người nhận:</label><input type="text" value="" name="name"></div>

	<div><label>Người nhận:</label><input type="text" value="" name="phone"></div>
	<div>
	<input type="submit" name="order_click" value="Đặt hàng">
</div>
</form>

</body>
</html>