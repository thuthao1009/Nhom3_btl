<?php
  include("config.php");
  

  $old_pass = md5($_POST["oldpass"]);
 // echo ($old_pass);exit();
  $new_pass = $_POST["newpass"];
  $new_pass_cf = $_POST["cfpass"];
  $id = $_POST["user_id"];
  
  $sql1 = "
          SELECT * FROM user WHERE user_id = '".$id."';         
          ";
  
  $sql2 = "
          UPDATE `user` SET `password` = '".$new_pass."' WHERE `user`.`user_id` = '".$id."';
          ";
  
  $user = mysqli_query($con, $sql1);

  $row = mysqli_fetch_array($user);  

  if ($old_pass!=$row["password"]) {
      echo "
            <script type='text/javascript'>
                window.alert('Bạn nhập sai mật khẩu');
                window.location.href='thong_tin_tai_khoan.php';
            </script>
           ";
  } else {
      if (($new_pass_cf)==($new_pass)) {
        echo "
              <script type='text/javascript'>
                  window.alert('Thay đổi mật khẩu thành công');
                  window.location.href='thong_tin_tai_khoan.php';
              </script>
             ";
        $user1 = mysqli_query($ket_noi, $sql2);
      } else {
        echo "
              <script type='text/javascript'>
                  window.alert('Mật khẩu mới không khớp');
                  window.location.href='thong_tin_tai_khoan.php';
              </script>
             ";
      }
  }
  
;?>