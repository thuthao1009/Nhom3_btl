<?php  
	session_start();
	require('config.php');
	//thêm
	// trừ 
	//xóa
	//thêm sản phẩm
	// nếu tồn tại 
	if(isset($_POST['them_gio_hang'])){
		$id=$_GET['id_sp'];
		$soluong=1;
		$sql="SELECT * FROM sanpham WHERE sp_id='".$id."' LIMIT 1";
		$query=mysqli_query($con,$sql);
		$row=mysqli_fetch_array($query);
		if($row){
			$new_product=array(array())
		}

	}

echo $_GET['id_sp'];

?>