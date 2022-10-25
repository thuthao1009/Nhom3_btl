<?php
    $rsHot= getprohot();
    echo "<pre>";
    print_r($rsHot);
    echo "</pre>";

    if(isset($_SESSION['notice_cart']) && $_SESSION['notice_cart']==1){
 ?>
 <div class="alert-alert-success">
    <button type="button" class="Close" data-dimiss="aleart" aria-hidden="true">&times; </button>
    <strong>Thông báo </strong> sản phẩm đã được thêm vào giỏ hàng
    <a href="#"><button class="btn btn-danger">Xem chi tiết</button></a>
</div>

 <?php   
   // unset($_SESSION['notice_cart']);
    }
?>

            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Featured Product</h1>
                    <p>
                        Reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        Excepteur sint occaecat cupidatat non proident.
                    </p>
                </div>
            </div>
            <div class="row">
                    <?php
                    foreach ($rsHot as $keyHot => $valueHot) {
                    ?>
                    <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                    <a href="shop-single.html">
                    <img src="img/<?php echo $valueHot['sp_anh_minh_hoa'] ?>" class="card-img-top" alt="...">
                    </a>
                             <div class="card-body">
                                <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                </li>
                                <li class="text-muted text-right"><?php echo $valueHot['sp_gia'];?></li>
                            </ul>
                            <a href="shop-single.html" class="productname"><?php echo $valueHot['sp_tensp'];?></a>
                       
                          <a href="shop_test.php?page=order_detail1&id=<?php echo $valueHot['sp_id']?>
                          "class="btn btn-danger">Mua</a>
                           <!-- <button type="submit" class="btn btn-danger">Mua</button>-->
                        </div>
                    </div>
                </div>
              <?php
              }
              ?> 
            </div>
                    


                
            