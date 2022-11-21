<?php 
    // Mục đích: kiểm tra xem bạn có quyền truy cập trang này hay không thông qua biến $_SESSION['da_dang_nhap'] = 1 --> được phép truy cập; và ngược lại.
 /*   session_start();

    if(!isset($_SESSION['da_dang_nhap'])) {
        echo "
            <script type='text/javascript'>
                window.alert('Bạn không được phép truy cập');
                window.location.href='dangnhap.php';
            </script>
        ";
    }*/
;?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Thêm mới danh mục</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
    <?php
            // 1. Load file cấu hình để kết nối đến máy chủ CSDL, CSDL
            include("../config.php");
            
             // 2. Viết câu lệnh truy vấn để thêm mới dữ liệu vào bảng TIN TỨC trong CSDL
            $ma_tl = $_POST['txtID'];
            $ten_the_loai= $_POST['txtTenTheLoai'];
            
            $sql =  "INSERT INTO `theloai` (`tl_id`, `tl_ten_tl`) 
            VALUES (NULL, '".$ten_the_loai."');";
//echo($sql); exit();
            // 3. Thực thi câu lệnh lấy dữ liệu mong muốn
             mysqli_query($con, $sql);
            //4. Thông báo chèn dữ liệu thành công và đẩy các bạn về trang Quản trị sp
            echo "
                <script type='text/javascript'>
                    window.alert('Bạn đã thêm mới thể loại thành công');
                    window.location.href='quan_tri_the_loai.php';
                </script>
            ";
 
        ;?>
 
    </body>
</html>