<?php
  include("../config.php");
  $id = $_POST["admin_id"];
  $email = $_POST["txtEmail"];
  $ho_ten = $_POST["txtHoten"];
  
  
  $sql1 ="
          SELECT * FROM admin WHERE email = '".$email."'
         ";

  $sql2 = "
          UPDATE `admin` SET `ad_hoten` = '".$ho_ten."', `email` = '".$email."' WHERE `admin`.`ad_id` = '".$id."';         
          ";
       //   echo ($sql2); exit();
  $user = mysqli_query($con, $sql1);
 
  $so_luong = mysqli_num_rows($user);

  $row = mysqli_fetch_array($user);  
  
  if ($so_luong==1) {    
   
    echo "
        <script type='text/javascript'>
            window.alert('Thay đổi thông tin thành công');
            window.location.href='thong_tin_tk_ad.php';
        </script>";
        $user_1 = mysqli_query($con, $sql2);
  }
  
;?>
