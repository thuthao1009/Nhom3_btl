<?php
  include("../config.php");
  

  $old_pass = md5($_POST["oldpass"]);
 // echo ($old_pass);exit();
  $new_pass = md5($_POST["newpass"]);
  $new_pass_cf = md5($_POST["cfpass"]);
  $id = $_POST["admin_id"];
  
  $sql1 = "
          SELECT * FROM admin WHERE ad_id = '".$id."';         
          ";
  
  $sql2 = "
          UPDATE `admin` SET `password` = '".$new_pass."' WHERE `admin`.`ad_id` = '".$id."';
          ";
 // echo ($sql2); exit();
  $user = mysqli_query($con, $sql1);

  $row = mysqli_fetch_array($user);  

  if ($old_pass!=$row["password"]) {
      echo "
            <script type='text/javascript'>
                window.alert('Bạn nhập sai mật khẩu');
                window.location.href='thong_tin_tk_ad.php';
            </script>
           ";
  } else {
      if (($new_pass_cf)==($new_pass)) {
        echo "
              <script type='text/javascript'>
                  window.alert('Thay đổi mật khẩu thành công');
                  window.location.href='thong_tin_tk_ad.php';
              </script>
             ";
        $user1 = mysqli_query($con, $sql2);
      } else {
        echo "
              <script type='text/javascript'>
                  window.alert('Mật khẩu mới không khớp');
                  window.location.href='thong_tin_tk_ad.php';
              </script>
             ";
      }
  }
  
;?>