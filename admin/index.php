<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>web trao đổi tài liệu cho sinh viên ngân hàng học viện| Trang chủ</title>
    
    <!-- Font awesome -->
    <link href="../assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">   
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link href="../assets/css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
    <!-- Product view slider -->
    <link rel="stylesheet" type="text/css" href="../assets/css/jquery.simpleLens.css">    
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="../assets/css/slick.css">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="../assets/css/nouislider.css">
    <!-- Theme color -->
    <link id="switcher" href="../assets/css/theme-color/dark-red-theme.css" rel="stylesheet">
    <!-- <link id="switcher" href="css/theme-color/bridge-theme.css" rel="stylesheet"> -->
    <!-- Top Slider CSS -->
    <link href="../assets/css/sequence-theme.modern-slide-in.css" rel="stylesheet" media="all">

    <!-- Main style sheet -->
    <link href="../assets/css/style.css" rel="stylesheet">    

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  

  </head>
  <body> 
  <?php
      session_start();
      include('../components/header.php');
  ?>

  <!-- / menu -->
  <?php
  include('../components/banner.php');
    ?>
  <!-- Start slider -->
  
  <!-- Them cho FIIN--> 
  <!-- Products section -->
      <h3 style="text-align: center;" >#MADEBYFIIN</h3>
  <section id="aa-product">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="aa-product-area">
              <div class="aa-product-inner">
                <!-- start prduct navigation -->
                 <ul class="nav nav-tabs aa-products-tab">
                    <li class="active"><a href="#best-sellers" data-toggle="tab">Best Sellers</a></li>
                    <li><a a href="#new-arrivals" data-toggle="tab">New Arrivals</a></li>
                  </ul>
                  <!-- Tab panes -->
                  <div class="tab-content">
                    <!-- Start men product category -->
                    <div class="tab-pane fade in active" id="best-sellers">
                      <ul class="aa-product-catg">
                        <!-- start single product item -->
                      <?php
                                // 1. Load file cấu hình để kết nối đến máy chủ CSDL, CSDL
                        include '../public/connect.php';
          // 2. Viết câu lệnh truy vấn để lấy ra dữ liệu mong muốn (TIN TỨC đã lưu trong CSDL)
          $sql = "
                    SELECT * 
                    FROM tbl_san_pham
                    WHERE so_luong < 15 
                    LIMIT 12   
          ";

          // 3. Thực thi câu lệnh lấy dữ liệu mong muốn
          $noi_dung_san_pham = mysqli_query($ket_noi, $sql);

          // 4. Hiển thị ra dữ liệu mà các bạn vừa lấy
          while($row = mysqli_fetch_array($noi_dung_san_pham)){
       ;?>    
       <li>
                  <figure>
                    <a class="aa-add-card-btn" href="gio_hang.php?id=<?php echo $row["id_san_pham"];?>"><span class="fa fa-shopping-cart"></span>Thêm vào giỏ</a>
                    <figcaption>
                    <a class="aa-product-img" href="san_pham_chi_tiet.php?id=<?php echo $row["id_san_pham"];?>"><img src="<?= '../assets/img/product/'.$row["ten_anh"] ?>" alt="" width="175" height="200"></a>
                      <h4 class="aa-product-title"><a href="#"><?php echo $row["ten_san_pham"];?></a></h4>
                      <span class="aa-product-price" href="san_pham_chi_tiet.php?id=<?php echo $row["id_san_pham"];?>"><?php echo $row["gia_tien"];?></span>
                    </figcaption>
                  </figure>                         
                  <div class="aa-product-hvr-content">
                    <div class="aa-product-hvr-content">
                      <a href="yeu_thich.php?id=<?php echo $row["id_san_pham"]; ?>" data-toggle="tooltip" data-placement="top" title="Thêm vào danh sách yêu thích"><span class="fa fa-heart-o"></span></a>
                    </div>                           
                  </div>
                  <!-- product badge -->
                </li>

                  <?php
                  }
               ;?>
                    </div>
                    <!-- / men product category -->
                    <!-- start women product category -->
                    <div class="tab-pane fade" id="new-arrivals">
                      <ul class="aa-product-catg">
                        <!-- start single product item -->
                        <?php 
          // 1. Load file cấu hình để kết nối đến máy chủ CSDL, CSDL
                    include '../public/connect.php';
  //2, Lấy ra dữ liệu mong muốn ( TIN TỨC lưu trong csdl )

          // 2. Viết câu lệnh truy vấn để lấy ra dữ liệu mong muốn (TIN TỨC đã lưu trong CSDL)
          $sql = "
                    SELECT * 
                    FROM tbl_san_pham
                    WHERE mo_ta LIKE 'New arrival%'
                    LIMIT 12 
          ";

          // 3. Thực thi câu lệnh lấy dữ liệu mong muốn
          $noi_dung_san_pham = mysqli_query($ket_noi, $sql);

          // 4. Hiển thị ra dữ liệu mà các bạn vừa lấy
          while($row = mysqli_fetch_array($noi_dung_san_pham)){
       ;?>    
       <li>
                  <figure>
                    <a class="aa-add-card-btn" href=gio_hang.php?id=<?php echo $row["id_san_pham"];?>""><span class="fa fa-shopping-cart"></span>Thêm vào giỏ</a>
                    <figcaption>
                    <a class="aa-product-img" href="san_pham_chi_tiet.php?id=<?php echo $row["id_san_pham"];?>"><img src="<?= '../assets/img/product/'.$row["ten_anh"] ?>" alt="" width="175" height="200"></a>
                      <h4 class="aa-product-title"><a href="#"><?php echo $row["ten_san_pham"];?></a></h4>
                      <span class="aa-product-price" href="san_pham_chi_tiet.php?id=<?php echo $row["id_san_pham"];?>"><?php echo $row["gia_tien"];?></span>
                    </figcaption>
                  </figure>                         
                    <div class="aa-product-hvr-content">
                      <div class="aa-product-hvr-content">
                      <a href="yeu_thich.php?id=<?php echo $row["id_san_pham"]; ?>" data-toggle="tooltip" data-placement="top" title="Thêm vào danh sách yêu thích"><span class="fa fa-heart-o"></span></a>
                    </div>
                    </div>
                  <!-- product badge -->
                </li>

                  <?php
                  }
               ;?>
    </div>
  </section>                
                
  <!-- / popular section -->
  <!-- Support section -->
  <section id="aa-support">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-support-area">
            <!-- single support -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single">
                <span class="fa fa-truck"></span>
                <h4>FREE SHIPPING</h4>
                <P>ĐƠN TRÊN 149K</P>
              </div>
            </div>
            <!-- single support -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single">
                <span class="fa fa-gift"></span>
                <h4>QUÀ TẶNG</h4>
                <P>VÔ VÀN QUÀ TẶNG</P>
              </div>
            </div>
            <!-- single support -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single">
                <span class="fa fa-phone"></span>
                <h4>MUA Hàng NGAY</h4>
                <P>NHẬN QUÀ </P>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Support section -->
  <!-- Testimonial -->
  <section id="aa-testimonial">  
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-testimonial-area">
            <ul class="aa-testimonial-slider">
              <!-- single slide -->
              <li>
                <div class="aa-testimonial-single">
                <img class="aa-testimonial-img" src="../assets/img/testimonial-img-1.png" alt="testimonial img">
                  <span class="fa fa-quote-left aa-testimonial-quote"></span>
                  <p>“Bất cứ ai cũng có thể diện những bộ tài liệu hay nhất”.</p>
                  <div class="aa-testimonial-info">
                    <p>ALEXANDER WANG</p>
                    <span>Nhà xuất bản </span>
                    <!--<a href="#">Dribble.com</a>-->
                  </div>
                </div>
              </li>
              <!-- single slide -->
              <li>
                <div class="aa-testimonial-single">
                <img class="aa-testimonial-img" src="../assets/img/testimonial-img-2.png" alt="testimonial.img">
                  <span class="fa fa-quote-left aa-testimonial-quote"></span>
                  <p>“Sách hay”.</p>
                  <div class="aa-testimonial-info">
                    <p>GIORGIO ARMANI</p>
                    <span>Nhà xuất bản</span>
                    <!--<a href="#">Alphabet</a>-->
                  </div>
                </div>
              </li>
               <!-- single slide -->
              <li>
                <div class="aa-testimonial-single">
                <img class="aa-testimonial-img" src="../assets/img/testimonial-img-3.png" alt="testimonial.img">
                  <span class="fa fa-quote-left aa-testimonial-quote"></span>
                  <p>“Tài liệu hay giúp các bạn học tập tốt hơn”.</p>
                  <div class="aa-testimonial-info">
                    <p>JEAN COCTEAU</p>
                    <span>Nhà thơ</span>
                    <!--<a href="#">Kinatic Solution</a>-->
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Testimonial -->

<!-- Latest Blog -->
  <section id="aa-latest-blog">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-latest-blog-area">
            <h2>CÙNG zay Học tập hiệu quả</h2>
            <div class="row">
                <?php 
                //1. kết nối đến máy chủ CSDL
                $ket_noi=mysqli_connect("localhost","root","","qlqa");
                //2.viết câu lệnh truy vấn lấy ra được DL mong muốn 
                $sql=" SELECT * FROM tbl_tin_tuc  ORDER BY id_tin_tuc DESC" ;
                //3. thực hiện câu lệnh truy vấn 
                $noi_dung_tin_tuc= mysqli_query($ket_noi,$sql);
                //4. hiển trị ra dữ liệu mà bạn vừa lấy
                while($row=mysqli_fetch_array($noi_dung_tin_tuc))
                {
                ;?>
                
                <div class="col-md-4 col-sm-4">
                <div class="aa-latest-blog-single">
                  <figure class="aa-blog-img">                    
                    <a href="#"><img src="<?php echo $row['anh_minh_hoa'] ? '../assets/img/'.$row['anh_minh_hoa']:'../assets/img/promo-banner-4.jpg' ;?>" alt=""></a>
  
                      <figcaption class="aa-blog-img-caption">
                      <span href="#"><i class="fa fa-eye"></i><?php echo $row["so_lan_doc"];?></span>
                  
                      <span href="#"><i class="fa fa-clock-o"></i><?php echo date("d/M/Y", strtotime($row["ngay_dang"]));?> </span>
                    </figcaption>                          
                  </figure>
                  <div class="aa-blog-info">
                    <h4><?php echo $row["tieu_de"];?></h4>
                    <p><?php echo $row["mo_ta"];?></p> 
                    <a href= "blog.php?id=<?php echo $row["id_tin_tuc"];?>" class="aa-read-mor-btn">Đọc thêm <span class="fa fa-long-arrow-right"></span></a>
                  </div>
                </div>
              </div>
           
                  
             <?php
                }
                ;?>
                
            </div>
          </div>
        </div>    
      </div>
    </div>
  </section>
  <!-- / Latest Blog -->

  <!-- footer -->  
  <?php
      include('../components/footer.php');
  ?>

  </body>
</html>