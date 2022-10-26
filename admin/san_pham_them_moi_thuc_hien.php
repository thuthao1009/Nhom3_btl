<?php 
    include("check_dang_nhap.php");
;?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Sản phẩm thêm mới</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <?php
            // viết các câu lệnh thêm mới tin tức ở đây
            
                    // 1. Load file cấu hình để kết nối đến máy chủ CSDL
                    include("../config.php");

            //2. Lấy ra dữ liệu mà trang SẢN PHẨM THÊM MỚI (khi click nút ĐĂNG BÀI) chuyển sang
            $id_san_pham = $_POST["txtID"];
            $ten_san_pham = $_POST["txtTenSanPham"];
            $so_luong = $_POST["txtSoLuong"];
            $gia_tien = $_POST["txtGia"];
            $chat_lieu = $_POST["txtChatLieu"];
            $mo_ta = $_POST["txtMoTa"];
            
            

            // 3. Viết câu lệnh truy vấn để thêm mới dữ liệu vào bảng TIN TỨC trong CSDL
            //lấy ra thông tin liên quan đến ẢNH MINH HỌA đc SUBMIT  từ form TIN TỨC THÊM MỚI
            $noi_se_luu_buc_anh_tren_website = "../img".basename($_FILES["txtAnhMinhHoa"]["name"]);
            $luu_file_anh_tam = $_FILES["txtAnhMinhHoa"]["tmp_name"];

            //UPLOAD bức ảnh lên web
            $ket_qua_up_anh = move_uploaded_file($luu_file_anh_tam, $noi_se_luu_buc_anh_tren_website);

            //ghi nhận thông tin ẢNH MINH HỌA đc UPLOAD lên hệ thống hay chưa
            if(!$ket_qua_up_anh) {
                $ten_anh = NULL;
            }else {
                $ten_anh = basename($_FILES["txtAnhMinhHoa"]["name"]);
            }

            // 3. Viết câu lệnh truy vấn để thêm mới dữ liệu vào bảng TIN TỨC trong CSDL
            $sql = "
                    INSERT INTO `tbl_san_pham` (`id_san_pham`, `ten_san_pham`, `so_luong`, `gia_tien`, `chat_lieu`, `mo_ta`, `ten_anh`) 
                    VALUES ('".$id_san_pham."', '".$ten_san_pham."', '".$so_luong."', '".$gia_tien."', '".$chat_lieu."', '".$mo_ta."','".$ten_anh."')";
            

            // 4. Thực thi câu lệnh truy vấn (mục đích trả về dữ liệu các bạn cần)
            $noi_dung_san_pham = mysqli_query($ket_noi, $sql);

            //5. Hiển thị ra thông báo các bạn đã thêm mới tin tức thành công và đẩy các bạn về trang QUẢN TRỊ TIN TỨC
            echo "
                <script type='text/javascript'>
                    window.alert('Bạn đã thêm mới sản phẩm thành công');
                    window.location.href='san_pham.php';
                </script>
            ";
        ;?>
    </body>
</html>
