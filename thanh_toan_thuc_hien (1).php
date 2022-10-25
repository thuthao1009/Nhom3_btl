<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Thanh toán </title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">

        
       

        <?php 
            // 1. kết nối với máy chủ
            include '../public/connect.php';

            // 2. Viết câu lệnh truy vấn để thêm mới dữ liệu vào bảng TIN TỨC trong CSDL
            $email = $_POST['txtEmail'];
            $ten = $_POST['txtHovaten'];
            $sdt = $_POST['txtSDT'];
            $dia_chi = $_POST['txtDiachi'];
           
           
        
        $so_luong_sp = $_POST['txtSoluong'];
        $tong_tien = $_POST['txtTongtien'];
        // 4.2. Câu lệnh INSERT
        
        
        $sql=" INSERT INTO `tbl_khach_hang` (`id_khach_hang`, `email`, `ten`, `sdt`, `dia_chi`,`so_luong`, `tong_tien`, `trang_thai`) VALUES (NULL, '".$email."', '".$ten."', '".$sdt."', '".$dia_chi."', '".$so_luong_sp."', '".$tong_tien."', 0)"; 

            // 3. Thực thi câu lệnh lấy dữ liệu mong muốn
            $noi_dung_tin_tuc = mysqli_query($ket_noi, $sql);
            

            // 4. Thông báo chèn dữ liệu thành công và đẩy các bạn về trang Quản trị tin tức
            echo "
                <script type='text/javascript'>
                    window.alert('Bạn đã đặt hàng thành công  thành công');
                    window.location.href='index.php';
                </script>
            ";

            session_start();
            unset($_SESSION['gio_hang']);

        ;?>

    </body>
</html>
