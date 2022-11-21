<?php 
    // kiểm tra xem người dùng đã đăng nhập chưa
     session_start();
     ob_start();
;?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <title>BAbook - Tin tức liên quan  </title>
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
    $sql="SELECT * FROM tintuc ORDER BY `tintuc`.`tt_created_at` DESC";
    $tin_tuc=mysqli_query($con,$sql);
    ?>


    <!-- Start Content Page -->
    <div class="container-fluid bg-light py-5">
        <div class="col-md-6 m-auto text-center">
            <h1 class="h1">Tin tức liên quan  </h1>
            <p>
                
            </p>
        </div>
    </div>
<!--o tin tuc-->
  <div class="row">
    <?php  
        while ($row=mysqli_fetch_array($tin_tuc)) {
            ?>

            <div class="col-md-4">
                        <div class="card mb-4 product-wap rounded-0">
                            <div class="card rounded-0">
                                <img class="card-img rounded-0 img-fluid" src="assets/img/<?php echo $row['anh_minh_hoa'] ?>" style="width:600px; height: 400px";>
                                <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                    
                                </div>
                            </div>
                            <div class="card-body">
                                <a href="<?php echo $row['tt_noi_dung'] ?>" class="h3 text-decoration-none" style=" height: 100px;"><?php echo $row['tt_mo_ta'] ?></a>
                                </a>
                              
                               <div class="show-more"> 
                             <a href="<?php echo $row['tt_noi_dung'] ?>" class="h3 text-decoration-none">Xem thêm</a>
                            </div>

                        
                            </div>
                        </div>
                    </div>

            <?php
        }
    ?>
 
    <!-- Start Footer -->
    
    <?php require('footer.php');?>
    <!-- End Footer -->

    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->

</body>


</html>