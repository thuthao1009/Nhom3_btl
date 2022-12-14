<?php 

    // kiểm tra xem người dùng đã đăng nhập chưa
     session_start();
     ob_start();
    
    

;?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <title>BAbook - Làm thế nào để mua hàng trên LazaBA   </title>
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
            <h1 class="h1">Làm thế nào để mua hàng trên BAbook?   </h1>
            <p>
                
            </p>
        </div>
    </div>

  <div
       
            <h2> Bạn có thế thực hiện các bước dưới đây để mua hàng trên BAbook:</h2>
            <ul>
                <ol>
                    <li>Trước tiên bạn cần có tải khoản trên BAbook, nếu có thì bạn hãy đăng nhập tài khoản của mình vào, nếu chưa có hãy đăng kí một tài khoản mới.</li>
                    <li>Sau khi đăng nhập xong bạn hãy truy cập mục Sản phẩm hoặc nhấn tìm kiếm để tìm sản phẩm mình cần mua.</li>
                    <li>Sau khi tìm thấy sản phẩm mình cần mua bạn hãy đọc kĩ mô tả sản phẩm, nếu đúng là sản phẩm cần mua bạn có thể thêm sản phẩm vào giỏ hàng hoặc nhấn mua.</li>
                    <li>Bạn có thể trao đổi với người bán về phương thức thanh toán, phương thức vẩn chuyển qua email.</li>
                </ol>
            </ul>
        
    </div>

    


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