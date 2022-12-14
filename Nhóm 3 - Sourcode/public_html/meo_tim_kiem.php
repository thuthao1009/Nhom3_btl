<?php 

    // kiểm tra xem người dùng đã đăng nhập chưa
     session_start();
     ob_start();
    
    

;?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <title>BAbook - Mẹo tìm kiếm hiệu quả     </title>
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
            <h1 class="h1">Mẹo tìm kiếm hiệu quả   </h1>
            <p>
                
            </p>
        </div>
    </div>

  <div
       
            <h2> Bạn có thế tìm kiếm dễ dàng hơn với một số mẹo sau đây: </h2>
            <ul>
                <ol>
                    <li>Viết đúng chính tả: Điền đúng chính tả và sử dụng đúng dấu chính tả tiếng Việt như "giáo trình Tin đại cương " hoặc đơn giản là "Tin đại cương" để kết quả tìm kiếm chính xác hơn và loại bỏ những tin rao không liên quan.</li>
                    <li>Tìm đúng danh mục:Từng danh mục lớn có thể có nhiều danh mục con. Chọn đúng chuyên mục sẽ giảm bớt thời gian tìm kiếm, lược bỏ những món hàng không cần thiết.</li>
                
                </ol>
            </ul>
        
    </div>

    


    <!-- Start Footer -->
    <br>
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