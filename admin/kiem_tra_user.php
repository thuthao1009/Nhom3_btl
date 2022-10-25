<?php
	// Lấy các dữ liệu được chuyển sang
	$email=$_POST['txtEmail'];
	$password=md5($_POST['txtPassword']);

	// Kiểm tra xem Username & Password có khớp với thông tin lưu trong CSDL hay không?
	$sql="
		SELECT *
		FROM user
		WHERE email='".$email."' AND password='".$password."'
	";
	// echo $sql; exit();

	
	// Kết nối đến CSDL
	require('../config.php');

	// Truy vấn đến bảng dữ liệu
	$user = mysqli_query($con, $sql)->num_rows;
	$user1 = mysqli_query($con, $sql);
	$row=mysqli_fetch_array(user1);
	$user_id=echo $row['user_id'];

	if ($user==1) {
		session_start();
		$_SESSION['da_dang_nhap']=1;
;?>