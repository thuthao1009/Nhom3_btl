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
    
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    
</head>
<body>

    <?php 
    require('config.php');
    require('menu.php');

;?>

    <div class="page-breadcrumb">
        
    </div> <!-- ::::::  End  Breadcrumb Section  ::::::  -->

    <div class="container">
            
            </div>
        </div>
    </main> <!-- ::::::  End  Main Container Section  ::::::  -->

    <?php
                  include("config.php");
                  
                  $id = $_SESSION['id'];
                  $sql = "
                          SELECT * 
                          from user 
                          where user_id = '".$id."'
                          ";
                       // echo ($sql); exit();
                  $thong_tin = mysqli_query($con, $sql);
                  $row = mysqli_fetch_array($thong_tin);
                  // echo $row["email"]; exit();

                 // var_dump($row);exit();
                 // while ($row = mysqli_fetch_array($thông_tin)) {
            ;?>

    <div class="container"> 
        <br>
    <h1 class="text-center">Thông tin tài khoản</h1> <br>
        <div class="container"> 
            <div class="row profile">        
                <div class="col-md-3">          
                    <div class="profile-sidebar">   
                    
                    <div> 
                    <p style="text-align:center; font-weight: bold;">Tên đăng nhập</p>
                    <p style="text-align:center;"><?php echo $row["email"];?></p> 
                    </div>   
                    <div class="profile-userbuttons">  
                    <a href="index.php" class="btn btn-success" style="font-family: tahoma; ">Trang chủ</a> 
                    <a href="admin/dang_xuat.php" class="btn btn-success" style="font-family: tahoma; ">Đăng xuất</a>                   
                    </div>                                              
                </div>     
            </div>      
    
                <div class="col-md-9"> 
                <div class="profile-content">
                <form action="thuc_hien_thay_doi_thong_tin.php" method="post" enctype="multipart/form-data">

                <label style="font-weight: bold;">Họ và tên </label>
                <p><input type="text" name="txtHoten" value="<?php echo $row["user_hoten"] ;?>" style=" width:95%;"></p>

                <label style="font-weight: bold;">Email </label>
                <p><input type="text" name="txtEmail" value="<?php echo $row["email"] ;?>" style=" width:95%;"></p>

                <lable >SĐT</label>
                <p><input type="text" name="txtsdt" value="<?php echo $row["sdt"] ;?>" style=" width:95%;"></p>

                <label style="font-weight: bold;">Địa chỉ</label>
                <p><input type="text" name="txtDiachi" value="<?php echo $row["dia_chi"] ;?>" style=" width:95%;"></p>

                <p style="text-align: center;"><button class="btn btn-success" name="user_id"
                value="<?php echo $row["user_id"];?>" type="submit" >Thay đổi thông tin</button></p>

                </form>

                <h5>Đổi mật khẩu</h5>
                <form action="thay_doi_mat_khau.php" method="post" enctype="multipart/form-data">

                <label style="font-weight: bold;">Mật khẩu hiện tại </label>
                <p><input type="password" name="oldpass" style=" width:95%;"></p>

                <label style="font-weight: bold;">Mật khẩu mới </label>
                <p><input type="password" name="newpass" style=" width:95%;"></p>

                <label style="font-weight: bold;">Xác nhận mật khẩu</label>
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