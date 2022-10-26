
<!DOCTYPE html>
<html lang="en">
<?php 

    // kiểm tra xem người dùng đã đăng nhập chưa
     session_start();
     ob_start();
    
    

;?> 
<head>
    <title>LazaBA - Contact </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

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
    require('menu.php'); ?>

    <!-- Start Content Page -->
    <div class="container-fluid bg-light py-5">
        <div class="col-md-6 m-auto text-center">
            <h1 class="h1">Liên Hệ Với Chúng Tôi</h1>
            <p>
                
            </p>
        </div>
    </div>

    <!-- Start Map -->
    <h2> Địa chỉ liên hệ </h2>
    
    <iframe  src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14898.353965999968!2d105.82005846977539!3d21.009126400000014!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x419a49bcd94b693a!2zSOG7jWMgdmnhu4duIE5nw6JuIGjDoG5n!5e0!3m2!1svi!2s!4v1666346295883!5m2!1svi!2s" width="100% " height=" 300px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" ></iframe>
    
    
    <!-- Ena Map -->
    

    <!-- Start Contact -->
    <div class="container py-5">
        <div class="row py-5">
            <form class="col-md-9 m-auto" method="post" role="form">
                <div class="row">
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputname">Name</label>
                        <input type="text" class="form-control mt-1" id="name" name="name" placeholder="Họ và tên ">
                    </div>
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputemail">Email</label>
                        <input type="email" class="form-control mt-1" id="email" name="email" placeholder="Email">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="inputsubject">Subject</label>
                    <input type="text" class="form-control mt-1" id="subject" name="subject" placeholder="Chủ đề ">
                </div>
                <div class="mb-3">
                    <label for="inputmessage">Message</label>
                    <textarea class="form-control mt-1" id="message" name="message" placeholder="Tin nhắn" rows="8"></textarea>
                </div>
                <div class="row">
                    <div class="col text-end mt-2">
                        <button type="submit" class="btn btn-success btn-lg px-3">Trò chuyện ngay </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- End Contact -->


    <?php require('footer.php') ?>

    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->

</body>


</html>