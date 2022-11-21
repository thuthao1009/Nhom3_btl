<?php 
    // Mục đích: kiểm tra xem bạn có quyền truy cập trang này hay không thông qua biến $_SESSION['da_dang_nhap'] = 1 --> được phép truy cập; và ngược lại.
    session_start();

    if(!isset($_SESSION['da_dang_nhap_ad'])) {
        echo "
            <script type='text/javascript'>
                window.alert('Bạn không được phép truy cập');
                window.location.href='dangnhap.php';
            </script>
        ";
    }
;?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Sửa danh mục</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
    <?php
            
            // Viết câu lệnh truy vấn để thêm mới dữ liệu vào bảng TIN TỨC trong CSDL
            $id = $_POST['txtID'];
            $ten_dm= $_POST['txtTenDanhMuc'];
            
           /// Đẩy FILE lên SERVER
            $noi_dat_file_anh_minh_hoa = "../img/".basename($_FILES['txtAnhMinhHoa']['name']);
            $file_du_lieu_anh = $_FILES['txtAnhMinhHoa']['tmp_name'];
            $tai_anh_len_he_thong = move_uploaded_file($file_du_lieu_anh, $noi_dat_file_anh_minh_hoa);
            if (!$tai_anh_len_he_thong) {
                $anh_minh_hoa=NULL;
                $sql="
                    UPDATE `danhmucsp` SET `dm_ten_danh_muc` = '".$ten_dm."'  WHERE `danhmucsp`.`dm_id` = '".$id."'
                ";
            } else {
                $anh_minh_hoa=$_FILES['txtAnhMinhHoa']['name'];
                $sql="UPDATE `danhmucsp` SET `dm_ten_danh_muc` = '".$ten_dm."', `dm_anh_minh_hoa`='".$anh_minh_hoa."'  WHERE `danhmucsp`.`dm_id` = '".$id."'
                    
                ";
            }
            // echo $sql; exit();

           require('../config.php');
            // Truy vấn đến bảng dữ liệu

            // Thực hiện thêm mới dữ liệu
            mysqli_query($con, $sql);

            // Thực hiện thông báo cho mọi người biết các bạn thêm mới thành công
 
        ;?>
        <script type="text/javascript">
            window.alert("Cập nhật dữ liệu thành công!");
            window.location.href = "../admin/quan_tri_danh_muc.php";
        </script>