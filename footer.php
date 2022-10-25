  <!-- Start Footer -->
    <!-- không phải viết -->
    <footer class="bg-dark" id="tempaltemo_footer">
        <div class="container">
            <div class="row">

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-success border-bottom pb-3 border-light logo">BAbook<br><br></h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li>
                            <i class="fas fa-map-marker-alt fa-fw"></i>
                            Số 12 đường Chùa Bộc, phường Quang Trung, quận Đống Đa, thành phố Hà Nội
                        </li>
                        <li>
                            <i class="fa fa-phone fa-fw"></i>
                            <a class="text-decoration-none" href="tel:000-000-0000">000-000-0000</a>
                        </li>
                        <li>
                            <i class="fa fa-envelope fa-fw"></i>
                            <a class="text-decoration-none" href="mailto:webba.web00@gmail.com"> webba.web00@gmail.com </a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Danh mục sản phẩm <br><br> </h2>

                    <ul class="list-unstyled text-light footer-link-list">
                        <?php
                            $sql_dm="SELECT DISTINCT danhmucsp.dm_ten_danh_muc, danhmucsp.dm_id FROM danhmucsp ";
                            $danh_muc=mysqli_query($con,$sql_dm);  
                             $i=0;
                while ($row_dm=mysqli_fetch_array($danh_muc)) {
                     $i++;
                        ?>
                        <li><a class="text-decoration-none" href="shop.php?id_tl=&id_dm=<?php echo $row_dm['dm_id'] ?>&sort=&trang=1"><?php echo $row_dm['dm_ten_danh_muc'] ?></a></li>
                        <?php } ?>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Thông tin thêm<br><br></h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="#">Trang chủ</a></li>
                        <li><a class="text-decoration-none" href="#">Giới thiệu</a></li>
                        <li><a class="text-decoration-none" href="#">Địa chỉ</a></li>
                        <li><a class="text-decoration-none" href="#">FAQs</a></li>
                        <li><a class="text-decoration-none" href="#">Liên hệ</a></li>
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
                
            </div>
        </div>

        <div class="w-100 bg-black py-3">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-12">
                        <p class="text-left text-light">
                            Copyright &copy; BAbook 
                            | Designed by <a rel="sponsored" href="index.php">Nhóm 3</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- End Footer -->