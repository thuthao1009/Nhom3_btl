<?php
      session_start();
      // 1. load file cấu hình csdl 
      include("../config.php");
      //2. lấy ra dữ liệu tin tức mới nhất                                   
        if(isset($_SESSION['da_dang_nhap_ad']) && $_SESSION['da_dang_nhap_ad']!= NULL){
            unset($_SESSION['da_dang_nhap_ad']);
            echo  " 
            <script type = 'text/javascript'>
              window.alert(' Bạn đăng xuất thành công!');
              window.location.href='dangnhap.php';
            </script>
            ";
        }
      ;?>