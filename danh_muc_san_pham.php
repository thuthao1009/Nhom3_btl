<div class="col-lg-3">
                <h1 class="h2 pb-4">Danh mục</h1>
                <?php  
                    $sql_dm= "SELECT DISTINCT dm_ten_danh_muc ,danhmucsp.dm_id FROM sanpham JOIN danhmucsp ON sanpham.dm_id=danhmucsp.dm_id ";
                    $danh_muc=mysqli_query($con,$sql_dm);
                ?>
                <ul class="list-unstyled templatemo-accordion"  >
                    <?php
                        $i=0;
                        while ($row_dm=mysqli_fetch_array($danh_muc)) {
                            $i++;
                    ?>
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none"  href="#">
                            <?php echo $row_dm['dm_ten_danh_muc'] ?>
                            <i class="fa fa-fw fa-chevron-circle-down mt-1" ></i>
                        </a>
                        <ul class="collapse show list-unstyled pl-3">
                            <?php 
                                $sql_tl="SELECT DISTINCT theloai.tl_id, theloai.tl_ten_tl FROM sanpham JOIN danhmucsp ON sanpham.dm_id=danhmucsp.dm_id JOIN theloai ON theloai.tl_id=sanpham.tl_id WHERE danhmucsp.dm_id='".$row_dm['dm_id']."'";
                                $the_loai=mysqli_query($con,$sql_tl);
                                $t=0;
                                    while ($row_tl=mysqli_fetch_array($the_loai)) {
                                                    $t++;
                             ?>
                            <li><a class="text-decoration-none" href="shop.php?id_tl=<?php echo $row_tl['tl_id'] ?>&id_dm=<?php echo $row_dm['dm_id'] ?>&sort=&trang=1"><?php echo $row_tl['tl_ten_tl'] ?></a></li>
                            <?php } ?>
                        </ul>
                    </li>
                <?php } ?>
                </ul>
            </div>