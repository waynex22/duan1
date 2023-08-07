
<div class="container">
    <div class="page-title">
        <h4 class="mt-5 br-12 bsd card font-weight-bold text-center bg-primary p-3 text-white">Danh sách hàng trong kho</h4>
        <?php
        if (isset($MESSAGE) && (strlen($MESSAGE) > 0)) {
            echo '<h5 class="alert alert-warning">' . $MESSAGE . '</h5>';
        }
        ?>
    </div>
    <div class="box card box-primary br-12 bsd">
        <div class="box-body">
            <form action="?btn_delete_all" method="post" class="table-responsive">
                <button type="submit" class="btn btn-danger mb-1" id="deleteAll" onclick="return checkDelete()">
                    Xóa mục đã chọn</button>
                <table width="100%" class="table table-hover table-bordered text-center">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th>Mã HH</th>
                            <th>Tên hàng hóa</th>
                            <th>Ảnh</th>
                            <th>Só lượng</th>
                            <th>Bruhhh</th>
                    </thead>
                    <tbody>
                        <?php
                         $items = hang_hoa_select_page('ma_hh', 10);
                        foreach ($items as $item) {
                            extract($item);
                            $suasize = "index.php?btn_edit_sl&ma_hh=" . $ma_hh;
                            $xoasize = "index.php?btn_delete&ma_hh=" . $ma_hh;
                            $img_path = $UPLOAD_URL . '/products/' . $hinh;
                            if (is_file($img_path)) {
                                $img = "<img src='$img_path' height='60' width='60' class='object-fit-contain'>";
                            } else {
                                $img = "no photo";
                            }
                            
                            $variants = hang_hoa_variants_get_by_ma_hh($ma_hh);
                            $total = 0;
                            foreach($variants as $variant){                             
                                    $total += $variant['quantity_in_stock'];                                   
                            }
                        ?>
                        <tr>
                            <td><?= $ma_hh ?></td>
                            <td><?= $ten_hh ?></td>
                            <td><?= $img ?></td>
                            <td><?= $total ?></td>
                            
                            <td class="text-end">
                                <a href="<?= $suasize ?>" class="btn btn-outline-info btn-rounded"><i
                                        class="fas fa-pen"></i></a>
                                <a href="<?= $xoasize ?>" class="btn btn-outline-danger btn-rounded"
                                    onclick="return checkDelete()"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        
                        <?php
                        
                        } 
                        ?>
                    </tbody>

                </table>

                <div class="mt-3" width="100%">
                    <ul class="pagination justify-content-center">
                        <?php for ($i = 1; $i <= $_SESSION['total_page']; $i++) { ?>

                        <li class="page-item <?= $_SESSION['page'] == $i ? 'active' : '' ?>">
                            <a class="page-link" href="?btn_kho&page=<?= $i ?>"><?= $i ?></a>
                        </li>

                        <?php } ?>

                    </ul>
                </div>
            </form>
        </div>
    </div>
</div>