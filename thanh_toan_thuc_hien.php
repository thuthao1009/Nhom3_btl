<?php 
        session_start();
            // 1. kết nối với máy chủ
            require('config.php');

            //lấy ra thông tin mua hàng từ form đặt hàng
            $email = $_POST['txtEmail'];
            $ten = $_POST['txtHovaten'];
            $sdt = $_POST['txtSDT'];
            $dia_chi = $_POST['txtDiachi'];
            $ghi_chu=$_POST['txtghichu'];

            // lấy ra id khách hàng
            $sql= "SELECT * FROM `user` WHERE email='".$email."'";
            $user_id=mysqli_query($con,$sql);
            $row=mysqli_fetch_array($user_id);
;?>

<?php  

            $tong_tien = $_POST['txtTongtien'];
        
            //Câu lệnh INSERT
    
             $sql=" INSERT INTO `hoadon` (`hd_id`, `user_id_m`, `hd_ghi_chu`, `hd_ngay_dat_hang`, `hd_status`, `dia_chi`) VALUES (NULL, '".$row['user_id']."', '".$ghi_chu."', current_timestamp(), '1', '".$dia_chi."');"; 
            // echo $sql; exit();
            // 3. Thực thi câu lệnh lấy dữ liệu mong muốn
            $dat_hang = mysqli_query($con, $sql);

            // lấy ra id đơn hàng mới nhất
            $sql="SELECT * FROM `hoadon` ORDER BY `hoadon`.`hd_id` DESC LIMIT 0,1; ";
            $dat_hang = mysqli_query($con, $sql);
            $row=mysqli_fetch_array($dat_hang);




            //insert vào chi tiết hóa đơn
            for ($i=0; $i < sizeof($_SESSION['giohang']); $i++) 
            { 
                //lấy ra thông tin từng sản phẩm từ sesion giỏ hàng
                $hinh=$_SESSION['giohang'][$i][0] ;
                $ten=$_SESSION['giohang'][$i][1] ;
                $gia=$_SESSION['giohang'][$i][2] ;
                $soluong=$_SESSION['giohang'][$i][3] ;
                $sp_id=$_SESSION['giohang'][$i][4] ;
                $thanh_tien=$gia*$soluong;

                $sql=" INSERT INTO `hoadonchitiet` (`hd_id`, `sp_id`, `gia`, `cthd_soluong`, `cthd_tongtien`) VALUES ('".$row['hd_id']."', '".$sp_id."', '".$gia."', '".$soluong."', '".$thanh_tien."');";
               $dat_hang_ct = mysqli_query($con, $sql);

                     
            }


            // 4. Thông báo chèn dữ liệu thành công và đẩy các bạn về trang Quản trị tin tức
            echo "
                <script type='text/javascript'>
                    window.alert('Bạn đã đặt hàng thành công');
                    window.location.href='index.php';
                </script>
            ";
            //xóa giỏ hàng sau khi thanh toán thành công     
            unset($_SESSION['giohang']);

            
            

        ;?>



