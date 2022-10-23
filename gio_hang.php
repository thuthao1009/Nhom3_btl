<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>BAbook - Mua bán tài liệu </title>
    
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
      include('../components/banner.php');
      require ('../cart/code.php');
    
  ?>
<?php 
    $tong_tien=0;
    $so_luong_sp=0;
    $gio_hang=(isset($_SESSION['gio_hang']))? $_SESSION['gio_hang'] : [];     
       ;?>
       <section id="cart-view">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="cart-view-area">
           <div class="cart-view-table">
             <form action="">
               <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Hủy bỏ</th>
                        <th>Ảnh</th>
                        <th>Tên sản phẩm</th>
                        <th>Số lượng muốn mua </th>
                        <th>Đơn giá</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($gio_hang as $key => $value):
                      $tong_tien += $value['gia_tien']*$value['quantity'];
                      $so_luong_sp+=$value['quantity'];
                      ?>
                      <tr>
                        <td><a href="gio_hang.php?id=<?php echo $value['id_san_pham']?>&action=delete" title="" class="btn btn-danger">Xóa</a></td>
                        <td><a class="aa-product-img" ><img src="../assets/img/product/<?php echo $value['ten_anh'] ?>" alt="" width="400" height="400"></a></td>
                        <td><?php echo $value['ten_san_pham'];?></td>
                        <td><?php echo $value['quantity'];?></td>
                        <td><?php echo $value['gia_tien'];?></td>
                      </tr>
                    <?php endforeach ?> 
                      <tr>
                          <td></td>
                          <th>Số sản phẩm</th>
                          <td></td>
                          <td></td>
                          <td><?php echo $so_luong_sp;?></td>
                      </tr>          
                       <tr>
                          <td></td>
                          <th>Tổng giá</th>
                          <td></td>
                          <td></td>
                          <td><?php echo $tong_tien;?></td>
                      </tr>      
                      <tr>
                      </tr>
                      </tbody>
                      </table>
                      </div>
                      </form>
                      </div>
                      </div>
                      <a href="thanh_toan.php?tong_tien=<?php echo $tong_tien?>&so_luong_sp=<?php echo $so_luong_sp?>" class="aa-cart-view-btn"> Thanh toán</a>
                      </div>

  </div>
  </form>
</section>
</section>


<!-- footer -->  
<?php 
        include('../components/footer.php');
    ;?>
  </body>
</html>