<?php 

    // kiểm tra xem người dùng đã đăng nhập chưa
     session_start();
     ob_start();

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
                    include("config.php");

            //2. Lấy ra dữ liệu mà trang SẢN PHẨM THÊM MỚI (khi click nút ĐĂNG BÀI) chuyển sang
            $id=$_SESSION['id'];
            $ten_san_pham = $_POST["txtTenSanPham"];
            $so_luong = $_POST["txtSoLuong"];
            $gia_tien = $_POST["txtGia"];
            $danh_muc=$_POST['txtTenDanhMuc'];
            $the_loai=$_POST['txtTenTheLoai'];
            $mo_ta = $_POST["txtMoTa"];
            $tinh_trang=$_POST['txttinhtrang'];
            $nam=$_POST['txtnam'];
            // echo '<pre>';
            // print_r($_FILES);exit();
             
             if(isset($_FILES['txtAnhMT'])){
                $files= $_FILES['txtAnhMT'];
                $files_name=$files['name'];
                // var_dump($files['tmp_name']);exit();
                foreach ($files_name as $key => $value) {
                   move_uploaded_file($files['tmp_name'][$key], 'assets/img//'.$value);
                }
                // var_dump($files_name);exit();
             }



            // 3. Viết câu lệnh truy vấn để thêm mới dữ liệu vào bảng TIN TỨC trong CSDL
            //lấy ra thông tin liên quan đến ẢNH MINH HỌA đc SUBMIT  từ form TIN TỨC THÊM MỚI
           $noi_dat_file_anh_minh_hoa ="assets/img/".basename($_FILES['txtAnhMinhHoa']['name']);
                $file_du_lieu_anh = $_FILES['txtAnhMinhHoa']['tmp_name'];
                $tai_anh_len_he_thong = move_uploaded_file($file_du_lieu_anh, $noi_dat_file_anh_minh_hoa);
                if (!$tai_anh_len_he_thong) {
                    $anh_minh_hoa=NULL;
                }
    
                else {
                $anh_minh_hoa= $_FILES['txtAnhMinhHoa']['name'];
                 }

            // 3. Viết câu lệnh truy vấn để thêm mới dữ liệu vào bảng TIN TỨC trong CSDL
            $sql = "INSERT INTO `sanpham` (`sp_id`, `dm_id`, `tl_id`, `sp_tensp`, `sp_anh_minh_hoa`, `sp_gia`, `sp_mo_ta`, `sp_tinh_trang`, `sp_namxb`, `sp_soluong`, `so_luot_xem`, `user_id_b`, `created_at`) VALUES (NULL, '".$danh_muc."', '".$the_loai."', '". $ten_san_pham."', '".$anh_minh_hoa."', '".$gia_tien."', '".$mo_ta."', '".$tinh_trang."', '".$nam."', '".$so_luong."', '0', '".$id."', current_timestamp());";
// echo $sql; exit();


            // 4. Thực thi câu lệnh truy vấn (mục đích trả về dữ liệu các bạn cần)
            $noi_dung_san_pham = mysqli_query($con, $sql);
            $id_pro=mysqli_insert_id($con);
             foreach ($files_name as $key => $value) {
                 $sql_a="INSERT INTO `thumucanh` (`tma_id`, `sp_id`, `anhminhhoa`) VALUES (NULL, '".$id_pro."', '".$value."'); ";
                    $anhmt=mysqli_query($con,$sql_a);
             }

            //5. Hiển thị ra thông báo các bạn đã thêm mới tin tức thành công và đẩy các bạn về trang QUẢN TRỊ TIN TỨC
            echo "
                <script type='text/javascript'>
                    window.alert('Bạn đã thêm mới sản phẩm thành công');
                    window.location.href='index.php';
                </script>
            ";
        ;?>
    </body>
</html>