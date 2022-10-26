<!--  thanh menu
 -->


 <!-- Start Top Nav -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="templatemo_nav_top">
        <div class="container text-light">
            <div class="w-100 d-flex justify-content-between">
                <div>
                    <i class="fa fa-envelope mx-2"></i>
                    <!-- email -->
                    <a class="navbar-sm-brand text-light text-decoration-none" href="mailto:info@company.com">webba.web00@gmail.com</a>
                    <i class="fa fa-phone mx-2"></i>
                    <!-- số điện thoại -->
                    <a class="navbar-sm-brand text-light text-decoration-none" href="tel:010-020-0340">000-000-0000</a>
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
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">

            <a class="navbar-brand text-success logo h5 align-self-center" href="index.php">
                BAbook
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Trang chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="tin_tuc.php">Tin tức</a>
                        </li>                       
                        <li class="nav-item">
                            <a class="nav-link" href="shop.php">Sản phẩm</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cau_hoi_thuong_gap.php">Thông tin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Liên hệ</a>
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
                    <a class="nav-icon nav-item d-none d-lg-inline" href="#" data-bs-toggle="modal" data-bs-target="#templatemo_search">
                        <i class="fa fa-fw fa-search text-dark mr-2"></i>
                    </a>
                    <a class="nav-icon nav-item position-relative text-decoration-none" href="gio_hang.php">
                        <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"></i>
                        
                    </a>
                    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <?php  
                            if(!isset($_SESSION['da_dang_nhap'])) {
                                echo'<li><a class="dropdown-item" href="admin/dang_nhap.php">Đăng nhập</a></li>
                                    <li><a class="dropdown-item" href="admin/dang_ky.php">Đăng kí</a></li>
                                ';        
                            }
                            else{
                                echo'<li><a class="dropdown-item" href="them_moi_sp.php">Đăng bán tài liệu</a></li>';
                                echo'<li><a class="dropdown-item" href="admin/dang_xuat.php">Đăng xuất</a></li>';
                            }

                        ?>



                        <!-- <li><a class="dropdown-item" href="admin/dang_nhap.php">Đăng nhập</a></li>
                        <li><a class="dropdown-item" href="admin/dang_ky.php">Đăng kí</a></li>
                        <li><a class="dropdown-item" href="dangxuat.php">Đăng xuất</a></li> -->
                       
                    </ul>
                </li>
            </ul>
                   
                </div>
            </div>

        </div>
    </nav>
    <!-- Close Header -->

    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="shop.php" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="keyword" placeholder="Tìm kiếm tài liệu">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>

