<?php 

    // kiểm tra xem người dùng đã đăng nhập chưa
     session_start();
     ob_start();
    
    

;?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <title>BAbook - Mua bán tài liệu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/headicon.ico">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    //<link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">

    
</head>
<body>

    <?php 
    require('config.php');
    require('menu.php');

;?>
    <div class="page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="page-breadcrumb__menu">
                        <li class="page-breadcrumb__nav"><a href="index.php">Trang chủ</a></li>
                        <li class="page-breadcrumb__nav active">Tài khoản</li>
                    </ul>
                </div>
            </div>
        </div>
    </div> <!-- ::::::  End  Breadcrumb Section  ::::::  -->

    <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- :::::::::: Start My Account Section :::::::::: -->
                    <div class="my-account-area">
                        <div class="row">
                            <div class="col-xl-3 col-md-4">
                                <div class="my-account-menu">
                                    <ul class="nav account-menu-list flex-column nav-pills" id="pills-tab" role="tablist">
                                        
                                        <li>
                                            <a ><i class="fas fa-user"></i>
                                                Thông tin tài khoản </a>
                                        </li>
                                        <li>
                                            <a class="link--icon-left" href="logout.php"><i class="fas fa-sign-out-alt"></i> Đăng xuất</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-8 col-md-8">
                                <div class="tab-content my-account-tab" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-dashboard" role="tabpanel"
                                        aria-labelledby="pills-dashboard-tab">
                                        <div class="my-account-dashboard account-wrapper">
                  
                  <?php
                /*  include("config.php");
                  
                  $id = $_SESSION['id'];
                  $sql = "
                          SELECT * 
                          from khachhang
                          where makhachhang = '".$id."'
                          ";
                  $khachhang = mysqli_query($ket_noi, $sql);
                  
                  while ($row = mysqli_fetch_array($khachhang)) {
                  ;?>
                                            <h4 class="account-title">Thông tin tài khoản </h4>
                                            <form action="alter-info.php" method="post">
                                            <div class="account-details">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-box__single-group">
                                                            <span>Họ tên</span>
                                                            <input type="text" placeholder="Họ tên" name="Hoten" value="<?php echo $row["tenkhachhang"] ;?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-box__single-group">
                                                            <span>Email</span>
                                                            <input type="text" placeholder="Email" name="Email" value="<?php echo $row["emailkhachhang"] ;?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-box__single-group">
                                                            <span>Địa chỉ</span>
                                                            <input type="text" placeholder="Địa chỉ" name="Diachi" value="<?php echo $row["diachikhachhang"] ;?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-box__single-group">
                                                            <span>Số điện thoại</span>
                                                            <input type="text" placeholder="Số điện thoại" name="Sdt" value="<?php echo $row["sodienthoaikhachhang"] ;?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-box__single-group">
                                                            <button class="btn btn--box btn--radius btn--small btn--black btn--black-hover-green btn--uppercase font--bold" name="Makhachhang"
                                                            value="<?php echo $row["makhachhang"];?>">Thay đổi thông tin</button>
                                                    </div>
                                                    </div>
                                                    </form>
                        
                                                    <form action="alter-password.php" method="post">
                                                    <div class="col-md-12">
                                                        <div class="form-box__single-group">
                                                            <h4 class="title">Đổi mật khẩu</h4>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-box__single-group">
                                                            <input type="password" placeholder="Mật khẩu hiện tại" name="Matkhaucu">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-box__single-group">
                                                            <input type="password" placeholder="Mật khẩu mới" name="Matkhaumoi">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-box__single-group">
                                                            <input type="password" placeholder="Xác nhận mật khẩu mới" name="Matkhaumoixacnhan">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-box__single-group">
                                                            <button class="btn btn--box btn--radius btn--small btn--black btn--black-hover-green btn--uppercase font--bold" name="Makhachhang"
                                                            value="<?php echo $row["makhachhang"];?>">Lưu thay đổi</button>
                                                        </div>
                                                    </div>
                                                    </form>
                        <?php } */;?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- :::::::::: End My Account Section :::::::::: -->
                </div>
            </div>
        </div>
    </main> <!-- ::::::  End  Main Container Section  ::::::  -->

    <div class="container"> 
 <h1 class="text-center">Thông tin tài khoản</h1> 
 <div class="container"> 
  <div class="row profile">        
   <div class="col-md-3">          
    <div class="profile-sidebar">                          
     <div class="profile-userpic"><img src="https://hocwebgiare.com/thiet_ke_web_chuan_demo/bootstrap_user_profile/images/profile_user.jpg" class="img-responsive" alt="Thông tin cá nhân">               
     </div>                                            
     <div class="profile-usertitle">                   
      <div ><a class="link--icon-left" href="logout.php"><i class="fas fa-sign-out-alt"></i> Đăng xuất</a></div>                  
      <div class="profile-usertitle-job"> Thông tin tài khoản </div>              
     </div>                                                
     <div class="profile-userbuttons">                 
      <button type="button" class="btn btn-success btn-sm">Trang chủ</button>                  
      <button type="button" class="btn btn-danger btn-sm">Thoát ra</button>                
     </div>       

     <div class="profile-usermenu">                    
      <ul class="nav"><div class="logo_menuchinh" style="float:left; padding-top:5px; padding-left:10px; color:#fff; margin-left:auto; margin-right:auto; text-align=center; line-height:40px; font-size:16px;font-weight:bold;font-family:Arial">HOCWEBGIARE.COM
     </div>

                              
       </li>                   
      </ul>                
     </div>                            
    </div>     
   </div>      
    <?php
                  include("./config.php");
                  
                  $id = $_SESSION['id'];
                  $sql = "
                          SELECT * 
                          from user 
                          where user_id = '".$id."'
                          ";
                      //  echo ($sql); exit();
                  $thong_tin = mysqli_query($con, $sql);
                  $row = mysqli_fetch_array($thong_tin);
                 // var_dump($row);exit();
                 // while ($row = mysqli_fetch_array($thông_tin)) {
            ;?>
   <div class="col-md-9"> 
    <div class="profile-content">
<form action="thuc_hien_thay_doi_thong_tin.php" method="post" enctype="multipart/form-data">

    <p style="font-weight: bold;">Họ và tên </p>
    <p><input type="text" name="txtHoten" value="<?php echo $row["user_hoten"] ;?>" style=" width:95%;"></p>

    <p style="font-weight: bold;">Email </p>
    <p><input type="text" name="txtEmail" value="<?php echo $row["email"] ;?>" style=" width:95%;"></p>

    <p style="font-weight: bold;">SĐT</p>
    <p><input type="text" name="txtsdt" value="<?php echo $row["sdt"] ;?>" style=" width:95%;"></p>
    <p style="font-weight: bold;">Địa chỉ</p>
    <p><input type="text" name="txtDiachi" value="<?php echo $row["dia_chi"] ;?>" style=" width:95%;"></p>

    <p style="text-align: center;"><button class="btn btn-success" name="user_id"
    value="<?php echo $row["user_id"];?>" type="submit" >Thay đổi thông tin</button></p>

    </form>

    <h4>Đổi mật khẩu</h4>
    <form action="thay_doi_mat_khau.php" method="post" enctype="multipart/form-data">

    <p style="font-weight: bold;">Mật khẩu hiện tại </p>
    <p><input type="password" name="oldpass" style=" width:95%;"></p>

    <p style="font-weight: bold;">Mật khẩu mới </p>
    <p><input type="password" name="newpass" style=" width:95%;"></p>

    <p style="font-weight: bold;">Xác nhận mật khẩu</p>
    <p><input type="password" name="cfpass"  style=" width:95%;"></p>


    <p style="text-align: center;"><button class="btn btn-success" name="user_id"
    value="<?php echo $row["user_id"];?>" type="submit" >Thay đổi mật khẩu</button></p>

    </form>


     </div>     
   </div>  
  </div>
 </div> 
</div>

    <?php require('footer.php');?>


    <!-- Start Script -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    
    <!-- End Script -->
    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->

    <!-- Start Slider Script -->
    <script src="assets/js/slick.min.js"></script>
    <script>
        $('#carousel-related-product').slick({
            infinite: true,
            arrows: false,
            slidesToShow: 4,
            slidesToScroll: 3,
            dots: true,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3
                    }
                }
            ]
        });
    </script>
    <!-- End Slider Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
        <script src="js/jquery-1.11.1.min.js"></script>
</body>

</html>