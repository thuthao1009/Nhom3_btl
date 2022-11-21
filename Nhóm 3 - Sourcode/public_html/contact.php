
<!DOCTYPE html>
<html lang="en">

<head>
    <title>BAbook - Liên hệ </title>
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

</head>

<body>
    <?php 
    require('config.php');
    require('menu.php');
    ?>



    <!-- Start Content Page -->
    <div class="container-fluid bg-light py-5">
        <div class="col-md-6 m-auto text-center">
            <h1 style="font-family: arial; font-size: 30pt; color: black; font-weight: bold;">Liên Hệ Với Chúng Tôi</h1>
            <p>
                
            </p>
        </div>
    </div>

    <!-- Start Map -->
    <h2 style="font-family: arial; font-size: 20pt; color: orange; font-style: italic;; font-weight: bold;"> Địa chỉ liên hệ </h2>
    
    <iframe  src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14898.353965999968!2d105.82005846977539!3d21.009126400000014!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x419a49bcd94b693a!2zSOG7jWMgdmnhu4duIE5nw6JuIGjDoG5n!5e0!3m2!1svi!2s!4v1666346295883!5m2!1svi!2s" width="100% " height=" 300px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" ></iframe>
    
    
    <!-- Ena Map -->
    
<h2 style="font-size:20pt; color: orange; font-style: italic; font-weight: bold; font-family: arial;">Nếu có bất kì vấn đề gì bạn có thể liên hệ với chúng tôi qua một số cách thức dưới đây:  </h2>

    
    <!--o lien he-->
  <div class="row">
  <div class="col-md-4">
                        <div class="card mb-4 product-wap rounded-0">
                            <div class="card rounded-0">
                                <img class="card-img rounded-0 img-fluid" src="assets/img/messenger.png" style="width:600px; height: 400px";>
                                <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                    
                                </div>
                            </div>
                            <div class="card-body">
                                <a  href="https://www.facebook.com/profile.php?id=100087253236628" class="h3 text-decoration-none"  style=" color: orange; font-family: arial;" >Truy cập trang Facebook của BAbook - Để lại lời nhắn qua Messenger </a></li>
                                </a>
                              
                               <div class="show-more"> 
                             <a href="https://www.facebook.com/profile.php?id=100087253236628 " class="h3 text-decoration-none" class="h3 text-decoration-none"  style=" color: blue; font-style: italic; font-weight: bold; font-family: arial;" >Truy cập ngay
                        </a>
                            </div>

                        
                            </div>
                        </div>
                    </div>

  <div class="col-md-4">
                        <div class="card mb-4 product-wap rounded-0">
                            <div class="card rounded-0">
                                <img class="card-img rounded-0 img-fluid" src="assets/img/gmail.png" style="width:600px; height: 400px";>
                                <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                    
                                </div>
                            </div>
                            <div class="card-body">
                                <a  href="https://www.google.com/intl/vi/gmail/about/" class="h3 text-decoration-none"  style=" color: orange; font-family: arial;" >Truy cập Gmail - Và để lại lời nhắn  </a></li>
                                </a>
                              
                               <div class="show-more"> 
                             <a style=" color: blue; font-style: italic; font-weight: bold; font-family: arial;" >BAbookweb@gmail.com
                        </a>
                            </div>

                        
                            </div>
                        </div>
                    </div>
</div>
<div class="card-body">
<form action="thuc_hien_lien_he.php" method="POST" enctype="multipart.form-data">
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
    </div></div>

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