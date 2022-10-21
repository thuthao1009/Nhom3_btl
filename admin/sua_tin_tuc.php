<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sửa tin tức</title>
</head>
<body>
     <h1>TRANG SỬA TIN TỨC</h1>
     <?php
     $id=$_GET["id"];
     //kết nối đến csdl
     require('../config.php');
     //truy vấn đến bảng dữ liệu
     $sql= "SELECT * FROM `tintuc` where tt_id=".$id;
     //thực hiện xóa dữ liệu
     //thực hiện truy vấn
     $tin_tuc=mysqli_query($con,$sql);
     $row=mysqli_fetch_array($tin_tuc);
     //thông báo đã xóa tin tức
     //echo $sql;exit();
;?>


     <form action="../admin/sua_tin_tuc_thuc_hien.php" method="post" enctype="multipart/form-data">
     <p style="font-weight:bold;">Tiêu đề bài viết</p>
     <p><input type="text" name="txtTieuDe" value="<?php echo $row["tt_tieu_de"];?>" style=" width:95%" ></p>

     <p style="font-weight: bold;">Mô tả bài viết:</p>
     <p><textarea name="txtMoTa" style="width:95%"><?php echo $row["tt_mo_ta"];?></textarea></p>

     <p style="font-weight: bold;">Ảnh minh họa:</p>
     <p><input type="file" name="txtAnhMinhHoa">(<b> Ảnh đã lưu:<?php echo $row["anh_minh_hoa"];?></b>)</p>

     <p style="font-weight: bold;">Nội dung:</p>
     <p><textarea name="txtNoiDung" style="width:95%"><?php echo $row["tt_noi_dung"];?></textarea></p>

    <p style="text-align: center;"><input type="hidden" name="txtID" value="<?php echo $row["tt_id"];?>"><button type="submit">Cập nhật</button></p>
    </form>
</body>
</html>