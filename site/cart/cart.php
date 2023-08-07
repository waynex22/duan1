
<h5 class="alert-info mb-3 pt-3 pb-3 pl-sm-4 shadow-sm text-center bg-primary text-white text-uppercase" style="margin-top: 5rem; margin-bottom: 0rem">Giỏ
    hàng</h5>

<div class="container">

    <?php
    if (isset($_SESSION['cart'])) {
    ?>
    <div class="row m-1 pb-5">
        <table class="table table-responsive-md">
            <thead class="thead text-center">
                <tr>
                    <th>Mã SP</th>
                    <th>Ảnh</th>
                    <th>Tên SP</th>
                    <th>Đơn giá</th>
                    <th>Giảm giá</th>
                    <th style="width:6rem">Số lượng</th>
                    <th>Thành tiền</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody class="text-center" id="giohang">

                <?php $total = 0;
                foreach ($_SESSION['cart'] as $index => $item) :
                    $totalitem = ($item['don_gia'] - $item['giam_gia' ]) * $item['sl'];
                    $total += $totalitem;
                    ?>
                <tr>
                    <td><?= $index ?></td>
                    <td>
                    <?php
                    $product = hang_hoa_select_by_id($index);
                    if ($product) {
                            $image_url = $UPLOAD_URL . "/products/" . $product['hinh'];
                            echo '<img src="' . $image_url . '" alt="' . $product['ten_hh'] . '" style="width: 80px; height: 90px;">';
                        }
                    ?>
                    </td>
                    <td><?= $item['ten_hh'] ?></td>
                    <td><span><?= number_format($item['don_gia'], 0, ".") ?></span> đ <input type="hidden"
                            class="don_gia_an" name="don_gia" value="<?= $item['don_gia'] ?>"></td>
                    <td><span><?= number_format($item['giam_gia'], 0, ".") ?></span> đ <input type="hidden"
                            class="giam_gia_an" name="giam_gia" value="<?= $item['giam_gia'] ?>"></td>
                    <td class="pt-1 m-auto">
                        <form action="delete-cart.php?act=update_sl" method="post">
                        <input type="number" class="form-control sl" name="update_sl" onchange="this.form.submit()"
                                value="<?= $item['sl'] ?>" min="1" max="10">
                            <input type="hidden" class="form-control" name="ma_hh" value="<?= $index ?>">
                        </form>                          
                    </td>
                    <td> <span><?= number_format($totalitem, 0, ".") ?></span>  <input type="hidden"></span> đ</td>
                    <td class="pt-1 m-auto">
                        
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">
                            <i class="fas fa-trash-alt "></i>
</button>


<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Xóa sản phẩm</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Bạn có chắc chắn muốn xóa sản phẩm này không?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success " data-dismiss="modal">Không</button>
        <button type="button" class=" btn btn-link btn-outline-none" >
        <a href="<?= $SITE_URL . "/cart/delete-cart.php?act=delete&id=" . $index ?>" class="btn btn-danger">Có</a>
        </button>
        
      </div>
    </div>
  </div>
</div>                  
                    </td>
                </tr>
                
                <?php endforeach ?>
            </tbody>
            
            <tfoot id="tongdonhang">
                <tr class="text-center">
                    <th colspan="5">Tổng thành tiền: </th>
                    <td class="  text-danger font-weight-bold"><span id="tong_thanh_tien"><?= number_format($total, 0, ".") ?></span> đ</td>
                    <td></td>
                </tr>
                <tr class="text-right">
                    <th colspan="7">
                        <a href="<?= $SITE_URL . "/cart/list-cart.php?form_invoice" ?>" class="btn btn-success">Thanh
                            toán</a>
                        <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#confirmDeleteModal">Xóa tất cả</a>
                        <div class="modal fade" id="confirmDeleteModal">
                        <div class="modal-dialog  modal-dialog-centered">
                        <div class="modal-content">
                        <div class="modal-header">
                             <h5 class="modal-title">Xác nhận xóa tất cả</h5>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                        <p>Bạn có chắc chắn muốn xóa tất cả giỏ hàng?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success" data-dismiss="modal">Không</button>
                            <a href="<?= $SITE_URL . "/cart/delete-cart.php?act=deleteAll" ?>" class="btn btn-danger">Xóa tất cả</a>
                        </div>
                        </div>
                        </div>
                        </div>
                    </th>
                </tr>
            </tfoot>
        </table>
    </div>
    <?php } else { ?>
    <div class="row  m-1 pb-5">
        <h6 class="col-12">Không tồn tại sản phẩm nào trong giỏ hàng </h6>
        <a class="btn  text-white bg-primary col-12" href="<?= $ROOT_URL ?>"> Về trang chủ</a>
    </div>
    <?php } ?>
</div>



