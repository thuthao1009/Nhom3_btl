<!DOCTYPE html>
<html lang="en">

<head>
    <title>LazaBA - Quy trình giao dịch </title>
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
            <h1 class="h1">Quy trình giao dịch   </h1>
            <p>
                
            </p>
        </div>
    </div>

 
    <h2>1.Quy trình dành cho người bán hàng (“Người Bán”) </h2>
    <ul>
        <li> Chuẩn bị tin bài bằng chữ và hình ảnh: </li>

        <ol>
        <li> Các tin bài cần đăng phải được chia thành 2 phần được phân theo định dạng bằng chữ và hình ảnh.
Các nội dung bằng chữ nên được đánh máy sẵn trên một chương trình soạn thảo văn bản (MS Word, OpenOffice).
Các nội dung bằng hình ảnh được định dạng theo dạng ảnh jpg, bmp hoặc có thể chụp trực tiếp sản phẩm khi đăng bán.</li></ol>
        
        <li>
            Đưa nội dung lên Website:
        </li>
        <ol>
            <li>Bước 1: Đăng ký tài khoản nếu chưa có tài khoản trên LazaBA</li>
            <li>Bước 2: Đăng nhập</li>
            <li>Bước 3: Tiến hành đăng tin mua bán:
 Viết bài liên quan đến sản phẩm (mô tả chi tiết sản phẩm, hình ảnh, giá và thông tin liên hệ của người bán) theo đúng cấu trúc mà người bán muốn đăng. Ban quản trị sẽ tiến hành kiểm duyệt nội dung tin đăng trong thời gian 24h kể từ khi người bán đăng tin. Những tin nào sai quy định đăng tin sẽ được phản hồi yêu cầu chỉnh sửa qua email cho thành viên. Khi nào thành viên sửa lại tin đăng theo đúng quy định ban quản trị mới cho hiển thị lên LazaBA.</li>
        </ol>
    


    </ul>

    <h2> 2. Quy trình dành cho người mua hàng (“Người Mua”)</h2>
    <ul>
        
        <li>Tìm kiếm, tham khảo thông tin sản phẩm, dịch vụ và các người bán mà người mua đang quan tâm;  </li>
        <li>ham khảo thông tin giá và chính sách hỗ trợ của bên bán sản phẩm, dịch vụ mà người mua đang có nhu cầu mua. Có thể tham khảo mặt hàng tương tự của những người bán khác trên website LazaBA (để đưa ra quyết định mua sản phẩm, dịch vụ đó); </li>
        <li>Dựa trên thông tin tham khảo được từ người bán sản phẩm, dịch vụ người mua liên hệ với người bán qua thông tin liên hệ đăng tải trong nội dung tin bán hàng hóa để hỏi thêm về thông tin sản phẩm, dịch vụ hoặc đến gặp trực tiếp người bán hoặc tiếp xúc trực tiếp để xem và mua sản phẩm, dịch vụ;</li>
        <li>Sau khi đã trao đổi được với người bán, người mua có thể quyết định đặt hàng;</li>
        <li>Người mua lựa chọn cách thức giao dịch (tùy vào thỏa thuận của người mua và người bán)</li>
        <li>Người mua nhận sản phẩm, dịch vụ.</li>
<li> Người mua thắc mắc, khiếu nại người bán .</li>
    </ul>

<h2>3.Quy trình giao nhận vận chuyển </h2>
<ul>
    
        <li> Người mua toàn quyền thỏa thuận với người bán về phương thức giao hàng với món hàng mình đã đặt mua, có thể giao trực tiếp, có thể gửi qua bưu điện, thuê bên thứ ba chuyển phát tùy thuộc vào 2 bên thỏa thuận với nhau về việc giao nhận. </li>
        <li>LazaBA yêu cầu người bán khi đăng tin bài rao bán sản phẩm phải đưa đầy đủ thông tin về chính sách vận chuyển, thanh toán.</li>
    <li>Người mua cần đọc kỹ những chính sách vận chuyển của người bán.</li>

</ul>
<h2>4.Quy trình xác nhận/hủy đơn hàng</h2>
<li>Người Mua và Người Bán tự liên lạc với nhau qua thông tin được Người Bán cung cấp khi rao tin để xác nhận việc mua hàng hay hủy mua hàng.</li>
<h2>5. Quy định khác</h2>
<ul> <li>Quy trình giải quyết tranh chấp, khiếu nại: </li> 
<ol>
    <li>Mọi tranh chấp, khiếu nại liên quan đến các giao dịch trên LazaBA giữa Người mua và Người bán sẽ được hai bên phải tự giải quyết với nhau.</li>
    <li>Về phía LazaBA có cơ chế thông báo tin quảng cáo sai sự thật. Nếu xác định được Người bán có hành vi vi phạm, LazaBA có quyền xử lý theo Quy chế này.</li>
</ol>
</ul>
 

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