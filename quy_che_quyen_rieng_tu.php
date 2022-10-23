<!DOCTYPE html>
<html lang="en">

<head>
    <title>LazaBA - Quy chế quyền riêng tư   </title>
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
    <!-- Start Top Nav -->
    <!-- không phải viết -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="templatemo_nav_top">
        <div class="container text-light">
            <div class="w-100 d-flex justify-content-between">
                <div>
                    <i class="fa fa-envelope mx-2"></i>
                    <!-- email -->
                    <a class="navbar-sm-brand text-light text-decoration-none" href="mailto:info@company.com">bav.com</a>
                    <i class="fa fa-phone mx-2"></i>
                    <!-- số điện thoại -->
                    <a class="navbar-sm-brand text-light text-decoration-none" href="tel:010-020-0340">010-020-0340</a>
                </div>
                <div>
                    <a class="text-light" href="https://fb.com/templatemo" target="_blank" rel="sponsored"><i class="fab fa-facebook-f fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin fa-sm fa-fw"></i></a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Close Top Nav -->


    <!-- Header -->
    <!-- không phải viết -->
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">

            <a class="navbar-brand text-success logo h5 align-self-center" href="index.html">
                LazaBA
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Trang chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="tin_tuc.html">Tin tức</a>
                        </li>                       
                        <li class="nav-item">
                            <a class="nav-link" href="shop.html">Sản phẩm</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">Thông tin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Liên hệ</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar align-self-center d-flex">
                    <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                        <div class="input-group">
                            <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                            <div class="input-group-text">
                                <i class="fa fa-fw fa-search"></i>
                            </div>
                        </div>
                    </div>
                    <a class="nav-icon d-none d-lg-inline" href="#" data-bs-toggle="modal" data-bs-target="#templatemo_search">
                        <i class="fa fa-fw fa-search text-dark mr-2"></i>
                    </a>
                    <a class="nav-icon position-relative text-decoration-none" href="gio_hang.html">
                        <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"></i>
                        <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">7</span>
                    </a>
                    <a class="nav-icon position-relative text-decoration-none" href="#">
                        <i class="fa fa-fw fa-user text-dark mr-3"></i>
                        <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">+99</span>
                    </a>
                </div>
            </div>

        </div>
    </nav>
    <!-- Close Header -->

    <!-- Modal -->
    <!-- không phải viết -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>


    <!-- Start Content Page -->
    <div class="container-fluid bg-light py-5">
        <div class="col-md-6 m-auto text-center">
            <h1 class="h1">Quy chế quyền riêng tư     </h1>
            
        </div>
    </div>

 
    
    <ul> <h3>
        LazaBA tôn trọng và cam kết bảo vệ dữ liệu cá nhân của người dùng. Chúng tôi cam kết sẽ thực hiện các biện pháp liên quan để bảo vệ dữ liệu cá nhân của người dùng. Quy chế Quyền riêng tư này (“Quy chế”) được lập nhằm quy định cách thức chúng tôi thu thập, sử dụng, tiết lộ, lưu trữ và/hoặc xử lý dữ liệu khi bạn truy cập vào trang LazaBA.</h3>
       <h3>Bằng việc sử dụng các Dịch vụ, đăng ký Tài khoản với chúng tôi hoặc truy cập Nền tảng của chúng tôi, bạn xác nhận và đồng ý cho phép chúng tôi thu thập, sử dụng, tiết lộ và/hoặc xử lý dữ liệu cá nhân của bạn như quy định trong Quy chế này. NẾU BẠN KHÔNG ĐỒNG Ý CHO PHÉP XỬ LÝ DỮ LIỆU CỦA BẠN NHƯ QUY ĐỊNH TRONG QUY CHẾ NÀY, VUI LÒNG KHÔNG SỬ DỤNG CÁC DỊCH VỤ CỦA CHÚNG TÔI HOẶC TRUY CẬP NỀN TẢNG CỦA CHÚNG TÔI.</h3>
        <h3>
            Chúng tôi có toàn quyền sửa đổi, bổ sung, cập nhật Quy chế này tại từng thời điểm. Vui lòng thường xuyên kiểm tra lại Quy chế quyền riêng tư này để theo dõi bất kỳ cập nhật hoặc thay đổi nào đối với Quy chế này.
        </h3>
    
    </ul>

    <h2> 1.  Chúng tôi sẽ thu thập những thông tin cá nhân nào?</h2>
    <ul>
        
        <li> Thông tin tài khoản như họ và tên, địa chỉ email, địa chỉ, giới tính, ngày sinh, ảnh hồ sơ, số điện thoại di động; </li>
        <li> Dữ liệu khi bạn truy cập và/hoặc sử dụng Nền tảng của chúng tôi như địa chỉ IP, các thông tin về trình duyệt, các địa chỉ bạn đã truy cập trên Nền tảng, thời gian bạn hoạt động trên Nền tảng của chúng tôi;</li>
        <li>Dữ liệu về lịch sử, nội dung hội thoại giữa bạn và (các) người dùng khác trên Nền tảng của chúng tôi khi trao đổi thông qua chức năng chat với người bán, bao gồm nhưng không giới hạn các thông tin dưới dạng văn bản, âm thanh, hình ảnh.</li>
        <li> Bất kỳ dữ liệu, thông tin tổng hợp khác về nội dung người dùng sử dụng.</li>
        
    </ul>

<h2>2.Mục đích thu thập thông tin cá nhân </h2>
<ul>
    <li>Chúng tôi có thể thu thập, sử dụng, tiết lộ và/hoặc xử lý thông tin cá nhân của bạn vì một hoặc nhiều mục đích sau đây:</li>

<ol>
        <li>Để xác minh danh tính người dùng;</li>

<li>Để liên hệ cho mục đích hỗ trợ cung cấp Dịch vụ của chúng tôi;</li>
<li>Để cung cấp thông tin chính thức cho người mua liên hệ với bạn khi bán hàng;</li>
<li>Để nhận diện người dùng và quản lý thông tin tài khoản;</li>
<li>Để phát hiện và ngăn chặn hoạt động gian lận;</li>
<li>Để kiểm tra và đánh giá dữ liệu trên Nền tảng của chúng tôi;</li>
<li>Để gửi các thông báo mà chúng tôi cho rằng cần thiết hoặc bạn sẽ quan tâm, trừ khi bạn từ chối nhận những thông báo này;
</li>
<li>Việc lưu trữ lịch sử hội thoại được chúng tôi thực hiện trong một khoảng thời gian nhất định phù hợp với quy định pháp luật tùy từng thời điểm để phục vụ cho việc quản lý nội dung và cải thiện trải nghiệm của người dùng;</li>
<li>Và bất kỳ mục đích nào mà chúng tôi thông báo cho bạn tại thời điểm xin sự cho phép của bạn.</li></ol>
</ul>
<h2>3. Các trường hợp chia sẻ thông tin cá nhân </h2>
<ul>
    <li>Ngoài các thông tin khác được mô tả trong Quy chế này, chúng tôi có thể thu thập và chia sẻ các thông tin của bạn cho bên thứ ba dưới dạng ẩn danh. Các bên thứ ba sẽ chỉ được sử dụng để thu thập, cung cấp thông tin của bạn cho chúng tôi, và sử dụng dữ liệu của bạn dưới sự cho phép của chúng tôi trong phạm vi cần thiết.</li>
    <ol>
        <li>Các đối tác cung cấp các dịch vụ liên quan đến việc gửi nhận thông báo (bằng SMS, email, cuộc gọi) đến bạn</li>
        <li>Các đối tác trong hoạt động marketing</li>
        <li>Các đơn vị được chỉ định bởi cơ quan pháp luật Việt Nam</li>
        <li>Và/hoặc các đối tác khác mà chúng tôi tiết lộ vì một trong Mục đích thu thập thông tin cá nhân và các bên thứ ba đó ngược lại họ sẽ thu thập và xử lý thông tin cá nhân của bạn vì một hoặc nhiều mục đích được đề cập trong Quy chế này.</li>
    </ol>
    
</ul>


          
           
        </div>
       
            
    </div>

    


    <!-- Start Footer -->
    <!-- không phải viết -->
    <footer class="bg-dark" id="tempaltemo_footer">
        <div class="container">
            <div class="row">

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-success border-bottom pb-3 border-light logo">LazaBA</h2>
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
                            | Designed by <a rel="sponsored" href="https://LazaBA.com" target="_blank">LazaBA</a>
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