<?php
  include("config.php");
  
  $email = $_POST["txtEmail"];
  $ho_ten = $_POST["txtHoten"];
  $dia_chi = $_POST["txtDiachi"];
  $sdt = $_POST["txtsdt"];
  $id = $_POST["user_id"];
  
  $sql1 ="
          SELECT * FROM user WHERE email = '".$email."'
         ";

  $sql2 = "
          UPDATE `user` SET `user_hoten` = '".$ho_ten."',  `sdt` = '".$sdt."', `dia_chi` = '".$dia_chi."' WHERE `user`.`user_id` = '".$id."';         
          ";
  $user = mysqli_query($con, $sql1);
 
  $so_luong = mysqli_num_rows($user);

  $row = mysqli_fetch_array($user);  
  
  if ($so_luong==1) {    
    
    echo "
        <script type='text/javascript'>
            window.alert('Thay đổi thông tin thành công');
            window.location.href='thong_tin_tai_khoan.php';
        </script>";
        $user_1 = mysqli_query($con, $sql2);
  }
  
;?>
