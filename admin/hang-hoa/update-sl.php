<div class="row">
    <div class="col-lg-12 ">
        <div class="card">
            <div class="card-header br-12 bsd text-center bg-primary text-white text-uppercase">Cập nhật số lượng</div>
            <div class="card-body br-12 bsd">
           
                <form action="index.php?btn_update-sl" method="POST" enctype="multipart/form-data" id="update_so_luong">
                    <div class="row">
                        <div class="form-group">
                            <label for="ma_hh" class="form-label">Mã hàng hóa</label>
                            <input type="text" name="ma_hh" id="ma_hh" readonly class="form-control"
                                value="<?= $ma_hh ?>">
                        </div>
                        
                        <?php 
                            $variants = hang_hoa_variants_get_by_ma_hh($ma_hh);
                            foreach ($variants as $index => $variant) {
                                extract($variant);
                                $size = size_select_by_id($size_id);
                            ?>
                            
                         <div class="form-group col-sm-3">
                            <div>
                                <label for="size_id_<?= $index ?>" class="form-label">size</label>
                                <input type="text" name="size_id[]" id="size_id_<?= $index ?>" readonly class="form-control"
                                    required value="<?= $size['size'] ?>">
                            </div>
                            <label for="quantity_in_stock_<?= $index ?>" class="form-label">Số Lượng</label>
                            <input type="text" name="quantity_in_stock[]" id="quantity_in_stock_<?= $index ?>" class="form-control"
                                required value="<?= $quantity_in_stock ?>">  
                        </div>
                        
                        <?php 
                            }
                        ?>   
                    </div>
                    <div class="mb-3 text-center">
                        <input type="reset" value="Nhập lại" class="btn btn-danger mr-3">
                        <input type="submit" name="btn_update-sl" value="Cập nhật" class="btn btn-primary mr-3">
                        <a href="index.php?btn_kho"><input type="button" class="btn btn-success" value="Danh sách"></a>
                    </div>
                </form>
                <a class="btn bg-primary text-white" href="index.php?btn_kho">Quay lại</a>
            </div>
        </div>
    </div>
</div>
