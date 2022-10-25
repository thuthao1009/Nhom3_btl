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
    ?>


    <!-- Start Content Page -->
    <div class="container-fluid bg-light py-5">
        <div class="col-md-6 m-auto text-center">
            <h1 class="h1">Tin tức liên quan  </h1>
            <p>
                
            </p>
        </div>
    </div>

  <div class="row">
                    <div class="col-12">
                        <div class="header-menu-vertical pos-relative m-t-30">
                            

                            <h4 class="menu-title link--icon-left"><i class="far fa-align-left"></i>1 số tin nổi bật </h4>
                               

                                <ul class="menu-content pos-absolute">
                                <p style ="text-align: left ;"><img src="phuyen.jpg" style="width:300px; height: 300px ;"></p>
                                <li class="menu-item"><a class= "text-decoration-none" href="https://www.facebook.com/ACCCovanhoctap/posts/pfbid0dd4eqPwpZ5ujBwqXHGgifXhyyuGNU2Vz6mezZUCW5KhcEtPB55ym4whYHKRiGyC8l"> Đăng ký tham gia chương trình trao đổi sinh viên tại Học viện Ngân hàng - Phân viện Phú Yên</a></li>
                                
                                <p style ="text-align: left ;"><img src="khaigiang.jfif" style="width:300px; height: 300px ;"></p>
                                <li class="menu-item"><a class= "text-decoration-none" href="https://www.hvnh.edu.vn/hvnh/vi/ban-tin-hoc-vien-ngan-hang/an-tuong-le-khai-giang-nam-hoc-moi-hoc-vien-ngan-hang-20222023-doan-ket-doi-moi-ky-cuong-2001.html">Ấn tượng lễ khai giảng năm học mới của Học viện Ngân hàng</a></li>
                                <p style ="text-align: left ;"><img src="shcd.jfif" style="width:300px; height: 300px ;"></p>
                                <li class="menu-item"><a class= "text-decoration-none" href="https://l.facebook.com/l.php?u=https%3A%2F%2Fbit.ly%2F3SmerNd%3Ffbclid%3DIwAR0HTn6ZeBfSkQWxBHg3zMHcb2GcyIwgz1-HKW7N9RhScccCvdIlg8B1gAs&h=AT3f9sK1BQJ46Ap9Vvtj_j48k9JEeDM6yyVQP2-_w3aVG2oISMxfw1yc4gUcBCx5WklzrrAwbBXZS-ab8o7h-7HBAON1Zj1isLv9oxXIMJ9Q_JjhVq6FTAEsCmJP_FrOddgA&__tn__=-UK-R&c[0]=AT2yuoR6I58Oc89agkGoxwllPqgr1eqjoG3a0ZLKk2no9ALwLrJynoMjBP1DDZicL20xRmuILA-MSKNLRIav40M8vkVe61hUOhKywTsOQryL83jBcIWbgH8Xu0fp6iaTNlHTsDNeQxw6BpQDL1gF530Dset66K6y-qDoY0_HgiBmsnIHKf8ITTHqwITy93L3MsCvbzgQ1lmOTQ">THÔNG BÁO thực hiện bài thu hoạch “Tuần sinh hoạt công dân sinh viên” năm học 2022 - 2023</a></li>
                                <p style ="text-align: left ;"><img src="nxb.png" style="width:300px; height: 300px ;"></p>
                                <li class="menu-item"><a class= "text-decoration-none" href="https://www.hvnh.edu.vn/hvnh/vi/thong-tin-tuyen-sinh/hoc-vien-ngan-hang-cong-bo-nguong-diem-trung-tuyen-he-dai-hoc-chinh-quy-nam-2022-tai-ha-noi-1966.html">Học viện Ngân hàng công bố điểm trúng tuyển đại học chính quy năm 2022</a></li>

                                    
                                </ul>
                        </div>
                    </div>
                </div>
            </div>  

    


    <!-- Start Footer -->
    <!-- không phải viết -->
    <footer class="bg-dark" id="tempaltemo_footer">
        <div class="container">
            <div class="row">

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-success border-bottom pb-3 border-light logo">BAbook</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li>
                            <i class="fas fa-map-marker-alt fa-fw"></i>
                            12 P.Chùa Bộc, Quang Trung, Đống Đa, Hà Nội
                        </li>
                        <li>
                            <i class="fa fa-phone fa-fw"></i>
                            <a class="text-decoration-none" href="tel:010-020-0340">010-020-0340</a>
                        </li>
                        <li>
                            <i class="fa fa-envelope fa-fw"></i>
                            <a class="text-decoration-none" href="mailto:bav@gmail.com"> bav.com</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Sản phẩm  </h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="#">Luxury</a></li>
                        <li><a class="text-decoration-none" href="#">Sport Wear</a></li>
                        <li><a class="text-decoration-none" href="#">Men's Shoes</a></li>
                        <li><a class="text-decoration-none" href="#">Women's Shoes</a></li>
                        <li><a class="text-decoration-none" href="#">Popular Dress</a></li>
                        <li><a class="text-decoration-none" href="#">Gym Accessories</a></li>
                        <li><a class="text-decoration-none" href="#">Sport Shoes</a></li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Thông tin cần thiết </h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="#">Trang chủ </a></li>
                        <li><a class="text-decoration-none" href="#">Giới thiệu </a></li>
                        <li><a class="text-decoration-none" href="#">Địa chỉ </a></li>
                        <li><a class="text-decoration-none" href="#">Câu hỏi thường gặp </a></li>
                        <li><a class="text-decoration-none" href="#">Liên hệ </a></li>
                    </ul>
                </div>

            </div>

            <div class="row text-light mb-4">
                <div class="col-12 mb-3">
                    <div class="w-100 my-3 border-top border-light"></div>
                </div>
                <div class="col-auto me-auto">
                    <ul class="list-inline text-left footer-icons">
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="http://facebook.com/"><i class="fab fa-facebook-f fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.instagram.com/"><i class="fab fa-instagram fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://twitter.com/"><i class="fab fa-twitter fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.linkedin.com/"><i class="fab fa-linkedin fa-lg fa-fw"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-auto">
                    <label class="sr-only" for="subscribeEmail">Địa chỉ Email </label>
                    <div class="input-group mb-2">
                        <input type="text" class="form-control bg-dark border-light" id="subscribeEmail" placeholder="Địa chỉ Email ">
                        <div class="input-group-text btn-success text-light">Đăng kí </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-100 bg-black py-3">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-12">
                        <p class="text-left text-light">
                            Copyright &copy; 2022  Company Name 
                            | Designed by <a rel="sponsored" href="https://BAbook.com" target="_blank">BAbook</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </footer>
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