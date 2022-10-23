<!DOCTYPE html>
<html lang="en">

<head>
    <title>LazaBA - Quy chế tài khoản  </title>
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
            <h1 class="h1">Quy chế tài khoản    </h1>
            <p>
                
            </p>
        </div>
    </div>

 
    <h2>1.Đăng ký tài khoản trên website LazaBA  </h2>
    <ul>
        <li> Để sử dụng một số tính năng của LazaBA, bạn phải tạo Tài khoản trên website (Đăng ký tài khoản)

        <ol>
        <li> Khi tạo Tài khoản bạn phải đồng ý cung cấp một cách chính xác và đầy đủ thông tin được yêu cầu (Dữ liệu tài khoản).</li>
        <li> Nếu bạn cung cấp thông tin của bất kỳ bên thứ ba nào cho LazaBA, chúng tôi có quyền tin rằng bạn đã đạt được sự thỏa thuận cần thiết từ bên thứ ba đó để chia sẻ và chuyển giao thông tin của họ cho chúng tôi.</li>
    </ol>


    </ul>

    <h2> 2.Bảo vệ tài khoản </h2>
    <ul>
        
        <li> Để sử dụng và bảo vệ Tài khoản, bạn phải cung cấp một số điện thoại và Mật khẩu (Dữ liệu đăng ký) để bảo vệ tài khoản. </li>
        <li> Bạn phải có trách nhiệm bảo vệ và giữ bí mật Mật khẩu này, LazaBA không có bất kỳ trách nhiệm liên quan đến và/hoặc phát sinh từ việc Mật khẩu của bạn bị mất mát và/hoặc bên thứ ba nào khác biết đến Mật khẩu của bạn.</li>
        <li>Hành vi sử dụng dữ liệu đăng ký của người khác mà không được thực hiện dưới sự đồng ý hoặc khi có sự quan sát của người sở hữu Tài khoản được coi là trái phép.</li>
        <li>Nếu bạn chia sẻ tài khoản của mình đối với bất kỳ bên nào khác thì bạn sẽ tự chịu mọi trách nhiệm về tất cả các hành động được thực hiện và hậu quả dưới tên Tài khoản của Bạn, chúng tôi sẽ không chịu bất kỳ trách nhiệm nào phát sinh từ hành động của bạn.</li>
        <li>Chợ Tốt sẽ không chịu trách nhiệm về thiệt hại bạn gây ra do việc sử dụng trái phép tài khoản của người khác, bạn có thể phải chịu trách nhiệm cho những thiệt hại của Chợ Tốt hoặc của những người khác nếu sử dụng trái phép Tài khoản.</li>
        <li>Bạn sẽ thông báo ngay lập tức cho Chợ Tốt nếu phát hiện hoặc nghi ngờ việc có người truy cập trái phép, lạm dụng, vi phạm bảo mật vào Dữ liệu tài khoản hoặc Dữ liệu đăng ký của bạn.</li>
    </ul>

<h2>3. Chấm dứt hoạt động của tài khoản</h2>
<ul>
    <li>Trường hợp LazaBA chấm dứt Tài khoản của bạn</li>

<ol>
        <li>LazaBA bảo lưu quyền chấm dứt vĩnh viễn hoặc chấm dứt tạm thời hoạt động của Tài khoản nếu bạn được xác định đã vi phạm Quy chế hoặc có những hành vi ảnh hưởng đến hoạt động của LazaBA, bạn sẽ được thông báo trước 05 (năm) ngày về việc Tài khoản bị chấm dứt hoặc tạm ngưng theo quy định của LazaBA.  </li>
        <li>LazaBA có quyền quyết định Tài khoản đó có vi phạm Quy chế hoặc có hành vi ảnh hưởng đến hoạt động của LazaBA hay không dựa trên những quy định mà chúng tôi đã công khai website hoặc khi có căn cứ cho rằng Tài khoản đó có hành vi vi phạm pháp luật. Thời điểm chấm dứt Tài khoản là khi LazaBA gửi email cho bạn về việc chấm dứt Tài khoản. </li> </ol>
    <li>Trường hợp bạn muốn chấm dứt Tài khoản: Bạn có thể yêu cầu chấm dứt Tài khoản bằng cách sử dụng công cụ trực tuyến </li>

</ul>
<h2>3. Quy định khác</h2>
<ul>
    <li>Bạn có thể thay đổi Dữ liệu tài khoản bất kỳ lúc nào bằng cách truy cập trang Thông tin cá nhân.</li>
    <li>Việc yêu cầu, sử dụng, bảo vệ dữ liệu được quy định cụ thể trong Quy chế riêng tư.</li>

</ul>
 <h2>4. Riêng tư và bảo vệ thông tin cá nhân</h2>
 <ul>
    <li>Thông tin cá nhân của bạn sẽ được bảo vệ theo các điều khoản của Quy chế riêng tư.</li></ul>
          
            </p>
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