<?php

function getprohot(){
	global $con;
	$sql= "SELECT sp_id,sp_tensp, sp_gia, sp_anh_minh_hoa FROM sanpham";
	$san_pham=mysqli_query($con,$sql);
	$result=array();
	while($row=mysqli_fetch_array($san_pham)){
		$result[]=$row;
	}
	return $result;

}
	// lấy ra thông tin sản phẩm khách hàng muốn mua
	function getsp_id($id){
	global $con;
	$sql= "SELECT * FROM sanpham where sp_id=$id";
	$san_pham=mysqli_query($con,$sql);
	// chỉ hiện 1 sản phẩm không cần phải duyệt
	//$result=array();
	$result=mysqli_fetch_array($san_pham);
		
	
	return $result;
}




;?>