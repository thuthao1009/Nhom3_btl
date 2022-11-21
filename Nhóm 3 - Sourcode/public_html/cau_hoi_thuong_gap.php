<?php 

    // kiểm tra xem người dùng đã đăng nhập chưa
     session_start();
     ob_start();
    
    

;?> 


<!DOCTYPE html>
<html lang="en">

<head>
    <title>BAbook - Thông tin  </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/headicon.ico">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">

    <!-- Load map styles -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
<!--
    
TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

-->
</head>

<body>
     <?php 
    require('config.php');
    require('menu.php');
    ?>
    
    <!-- Start Content Page -->
    <div class="container-fluid bg-light py-5">
        <div class="col-md-6 m-auto text-center">
            <h1 class="h1">Câu hỏi thường gặp  </h1>
            <p>
                
            </p>
        </div>
    </div>

  <div class="row">
                    <div class="col-12">
                        <div class="header-menu-vertical pos-relative m-t-30">
                            <h4 class="menu-title link--icon-left"><i class="far fa-align-left"></i>DANH MỤC</h4>
                                <ul class="menu-content pos-absolute">
                                
                                    <li class="menu-item"><a class= "text-decoration-none" href="shop.php">Gian hàng</a></li>
                                    <li class="menu-item"><a class= "text-decoration-none" href="giao_hang_va_van_chuyen.php"> Giao hàng và vận chuyển</a></li>
                                    <li class="menu-item"><a class= "text-decoration-none" href="kiem_tra_san_pham_truoc_khi_nhan.php">Kiểm tra sản phẩm trước khi nhận </a></li>
                                    <li class="menu-item"><a class= "text-decoration-none" href="quy_che_tai_khoan.php">Quy chế tài khoản</a></li>
                                    <li class="menu-item"><a class= "text-decoration-none" href="quy_che_quyen_rieng_tu.php">Quy chế quyền riêng tư</a></li>
                                    <li class="menu-item"><a class= "text-decoration-none" href="quy_trinh_giao_dich.php">Quy trình giao dịch</a></li>
                                    <li class="menu-item"><a class= "text-decoration-none" href="meo_tim_kiem.php">Mẹo tìm kiếm hiệu quả</a></li>
                                <li class="menu-item"><a class= "text-decoration-none" href="cau_hoi_1.php">Làm thế nào để mua hàng trên BAbook?</a></li>
                                    <li class="menu-item"><a class= "text-decoration-none" href="cau_hoi_2.php">Làm thế nào để đăng sản phẩm lên BAbook?</a></li>
                                    <li class="menu-item"><a class= "text-decoration-none" href="cau_hoi_3.php">Làm thế nào để liên lạc với người bán?</a></li>
                                </ul>
                        </div>
                    </div>
                </div>
            </div>  

    


    
    <?php require('footer.php');?>
    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->

</body>


</html>