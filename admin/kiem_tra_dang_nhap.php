<?php
	// Lấy các dữ liệu được chuyển sang
	$user_hoten=$_POST['txtUserHoten'];
	$password=md5($_POST['txtPassword']);

	// Kiểm tra xem Username & Password có khớp với thông tin lưu trong CSDL hay không?
	$sql="
		SELECT *
		FROM user
		WHERE user_hoten='".$user_hoten."' AND password='".$password."'
	";
	// echo $sql; exit();

	
	// Kết nối đến CSDL
	require('../config.php');

	// Truy vấn đến bảng dữ liệu
	$user = mysqli_query($con, $sql)->num_rows;

	if ($user==1) {
		session_start();
		$_SESSION['da_dang_nhap']=1;
;?>
	<script type="text/javascript">
		window.alert("Bạn đã đăng nhập thành công!");
		window.location.href = "../admin/index.php";
	</script>
<?php
	} else {
;?>
	<script type="text/javascript">
		window.alert("Bạn chưa nhập đúng thông tin! Vui lòng nhập lại!");
		window.location.href = "../admin/dang_nhap.php";
	</script>
<?php
	}
;?>