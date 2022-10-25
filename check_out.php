<?php

ob_start();
    session_start();
;?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Check out</title>
	<title>Zay Shop eCommerce HTML CSS Template</title>
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
</head>
<body>
	
	<?php
	include_once 'menu.php';
	;?>

	<?php  if() {?>
	<div class="container">
	 	<div class=""row>
      <div class="col-lg-8">
        <form>
        <div class="form-group">
        <label for="exampleInputEmail1">Họ và tên</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">    
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Email</label>
          <input type="Email" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">SĐT</label>
          <input type="text" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Địa chỉ</label>
          <input type="text" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Ghi chú</label>
          <input type="text" class="form-control" id="exampleInputPassword1">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      </div>


	 		<div class="col-lg-4">

	 			<h4>Thông tin đơn hàng</h4>
	 			 <table style="width: 100%;" class="table table-bordered table-inverse table-hover">
        	<thead>
            <tr>
                <th>STT</th>
                <th>Sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Số lượng</th>
                <th>Đơn giá</th>
                <th>Thành tiền ($)</th>                            
            </tr>
       		</thead>
        	<tbody>
            <?php      
             $i = 1;
            $_SESSION['sum_price']=0;
            if(isset($_SESSION['giohang'])&& !empty($_SESSION['giohang'])){
            foreach ($_SESSION['giohang'] as $key => $value) {
            ;?>
            <tr>
            <td><?php echo (int)$i++;?></td>
            <td><img src="img/<?php echo $value['sp_anh_minh_hoa'] ?>"></td>
            <td><?php echo $value['sp_tensp'];?></td>
            <td><?php echo $value['qty'];?></td>
            <td><?php echo $value['sp_gia'];?></td>
             <td><?php
             $item_sum=$value['sp_gia']*$value['qty'];
             $_SESSION['sum_price']+=  $item_sum;
             echo $item_sum;            
             ?>
               <?php        		
        	   }
              }
   			     ?>
            </td>
            </tr>
          </tbody>
            <tr>
                <th colspan="5">Tổng đơn hàng</th>
                <th><div><?php echo  $_SESSION['sum_price']  ?></div>
                </th>
             </tr>	 		
	 		</table>	
      <a href="#" class="btn btn-danger">Chueck out</a> 			 	
	 </div> 
</div>	
</div>
</div>
<?php } else { ?>
<?php } ?>




 <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->

</body>
</html>