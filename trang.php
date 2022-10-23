<div div="row">
                    <ul class="pagination pagination-lg justify-content-center">

                    <?php 
                    #Lấy ID của page
                            $tl = isset($_GET['tl_id'])? $_GET['tl_id'] : '';
                            $dm = isset($_GET['dm_id'])? $_GET['dm_id'] : '';
                                
                            $tong="SELECT * FROM `sanpham` JOIN danhmucsp ON danhmucsp.dm_id=sanpham.dm_id JOIN theloai ON theloai.tl_id=sanpham.tl_id WHERE (1=1);";

                            $tong_sp = mysqli_query($con, $tong)->num_rows;
                                // echo $tong_sp; exit();
                            $so_trang= ceil($tong_sp/$so_sp_1_trang);
                                 // echo $so_trang; exit();
                            for ($t=1; $t <=$so_trang ; $t++) { ?>
                                    <li class="page-item ">
                                        <a class="page-link rounded-0 mr-3 shadow-sm border-top-0 border-left-0 text-dark" href="shop.php?trang=<?php echo $t?>" tabindex="-1"><?php echo "$t" ?></a>
                                   <!--  // echo " 
                                    // <a href='index.php?trang=$t'>$t</a> " ; -->
                    <?php } ?>   
                    </ul>
                </div>