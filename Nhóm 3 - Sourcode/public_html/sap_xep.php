<div class="col-md-6 pb-4">
                        <div class="d-flex">
                            <select name="select-sort" class="select-sort" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
                                <option value="shop.php?id_tl=<?php echo $tl;?>&id_dm=<?php echo $dm ?>&sort=&trang=1"<?php if($sapxep=='') echo "selected"; ?>>Liên quan</option>
                                <option value="shop.php?id_tl=<?php echo $tl;?>&id_dm=<?php echo $dm ?>&sort=sp_tensp &trang=1"<?php if($sapxep=='sp_tensp ') echo "selected"; ?>>A tới Z</option>
                                <option value="shop.php?id_tl=<?php echo $tl;?>&id_dm=<?php echo $dm ?>&sort=sp_tensp DESC &trang=1"<?php if($sapxep=='sp_tensp DESC ') echo "selected"; ?>>Z tới A</option>
                                <option value="shop.php?id_tl=<?php echo $tl;?>&id_dm=<?php echo $dm ?>&sort=sp_gia &trang=1"<?php if($sapxep=='sp_gia ') echo "selected"; ?>>Giá, thấp đến cao</option>
                                <option value="shop.php?id_tl=<?php echo $tl;?>&id_dm=<?php echo $dm ?>&sort=sp_gia DESC &trang=1"<?php if($sapxep=='sp_gia DESC ') echo "selected"; ?>>Giá, cao đến thấp</option>
                                <option value="shop.php?id_tl=<?php echo $tl;?>&id_dm=<?php echo $dm ?>&sort=sp_id &trang=1"<?php if($sapxep=='sp_id ') echo "selected"; ?>>Bán chạy</option>
                            </select>
                        </div>
                    </div>