<?php 

    // kiểm tra xem người dùng đã đăng nhập chưa
     session_start();
     ob_start();
    
    

;?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <title>BAbook - Mua bán tài liệu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/headicon.ico">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
</head>
<body>

    <?php 
    require('config.php');
    require('menu.php');
    $sql_dm="SELECT DISTINCT danhmucsp.dm_ten_danh_muc, danhmucsp.dm_id FROM danhmucsp ";
    $danh_muc=mysqli_query($con,$sql_dm);
    $sql_tl="SELECT DISTINCT tl_ten_tl, tl_id FROM theloai ";
    $the_loai=mysqli_query($con,$sql_tl);
    ?>


    <h1>ĐĂNG BÁN SẢN PHẨM</h1>

    <form action="them_moi_san_pham_thuc_hien.php" method="POST" enctype="multipart/form-data">
        <p style="font-weight: bold;">Tên sản phẩm:</p>
        <p><input type="text" name="txtTenSanPham" value="" style="width:95%"></p>
        <p style="font-weight: bold;">Mô tả :</p>
        <p><textarea name="txtMoTa" style="width:95%"></textarea></p>
        <p style="font-weight: bold;">Ảnh minh hoạ:</p>
        <p><input type="file" name="txtAnhMinhHoa"></p>

        <p>Chọn danh mục tài liệu:</p>
        <select name="txdanhmuc">
        <option value="">-- Danh mục--</option>
        <?php while ( $row=mysqli_fetch_array($danh_muc)) { ?>
            <option value="<?php echo $row['dm_id'] ?>"><?php echo $row['dm_ten_danh_muc'] ?></option>
        <?php } ?>
        </select>

        <p>Chọn môn học:</p>
        <select name="txttheloai">
        <option value="">-- Môn học--</option>
        <?php while ( $row=mysqli_fetch_array($the_loai)) { ?>
            <option value="<?php echo $row['tl_id'] ?>"><?php echo $row['tl_ten_tl'] ?></option>
        <?php } ?>
        </select>



        
        </p>










        <p style="font-weight: bold;">Giá bán:</p>
        <p><input type="text" name="txtGiaBan" value="" style="width:95%"></p>
        <p style="font-weight: bold;">Số lượng:</p>
        <p><input type="text" name="txtSoLuong" value="" style="width:95%"></p>
        <p style="text-align: center;"><button type="submit">Thêm mới</button></p>
    </form>



    <?php require('footer.php');?>


    <!-- Start Script -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    
    <!-- End Script -->
    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->

    <!-- Start Slider Script -->
    <script src="assets/js/slick.min.js"></script>
    <script>
        $('#carousel-related-product').slick({
            infinite: true,
            arrows: false,
            slidesToShow: 4,
            slidesToScroll: 3,
            dots: true,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3
                    }
                }
            ]
        });
    </script>
    <!-- End Slider Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
</body>

</html>