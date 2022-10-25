<?php
	if (isset($_GET['id'])) {
		$id = (int)$_GET['id'];
		$row= getsp_id($id);//lấy ra sản pahamr khách hàng muốn mua
		//biến luuw sản phẩm khách hàng muốn mua
		
		if(!isset($_SESSION['giohang'])|| empty($_SESSION['giohang'])) {
			$_SESSION['giohang'][$id]=$row;
			$_SESSION['giohang'][$id]['qty']=1;

		} else
		{
			if (array_key_exists($id,$_SESSION['giohang'] )){
			$_SESSION['giohang'][$id]['qty']+=1;	
		}else
		{
			$_SESSION['giohang'][$id]=$row;
			$_SESSION['giohang'][$id]['qty']=1;
		}

		}
		$_SESSION['notice_cart']=1;
		echo "<pre";
		print_r($_SESSION['giohang']);
		echo "</pre>";
		}
		else{
			header("location:shop_test.php");
		}
		

	
?>