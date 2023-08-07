<?php $total = 0; ?>
<div class="container">
  <div class="page-title">
    <h4 class="mt-5 card font-weight-bold text-center bg-primary p-3 text-white">Lịch Sử Mua Hàng</h4>
  </div>
  <div class="card">
    <div class="card-body">
    <i class="ml-5 text-primary">Mã đơn hàng: <b><?= $order['order_id'] ?></b></i>
      <div class="table-responsive">
        <table class="table table-bordered text-center">
          <thead class="table-white bg-primary text-white">
                        <tr>
                            <th>Tên sản phẩm</th>
                            <th>Mô tả</th>
                            <th>Số lượng</th>
                            <th>Giá</th>
                            <th>Thanh toán</th>
                            <th>Địa chỉ nhận hàng</th>
                            <th>Ghi chú</th>
                            <th>Ngày đặt hàng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($detailOrder as $detailOrder) {
                            extract($detailOrder);
                           
                            $total += $don_gia;
                        ?>
                            <td><?= $ten_hh ?></td>
                            <td><img src="<?= $UPLOAD_URL . "/products/" . $detailOrder['hinh']; ?>"  alt="width="130" height="110"/></td>
                            <td><?= $so_luong ?></td>
                            <td><?= number_format($don_gia, 0, ".") ?></td>
                            <td><?php
                                    if ($order['thanh_toan'] == 1) {
                                        echo '<span class="badge badge-danger">Visa</span>';
                                    }
                                    if ($order['thanh_toan'] == 2) {
                                        echo '<span class="badge badge-warning">Trả tiền khi nhận hàng</span>';
                                    }
                                    if ($order['thanh_toan'] == 3) {
                                        echo '<span class="badge badge-warning">Ngân hàng liên kết</span>';
                                    }
                                    
                                    ?></td>
                            <td><?= $order['dia_chi'] ?></td>
                            <td><?= $order['ghi_chu'] ?></td>
                            <td><?= $order['created_at'] ?></td>
                        </tr>
                        <?php
                        }

                        ?>
                    </tbody>
                    <tr class="text-center">
                    <th colspan="5">Tổng thành tiền: </th>
                    <td class="  text-danger font-weight-bold"><span id="tong_thanh_tien"><?= number_format($total, 0, ".") ?></span> đ</td>
                    <td></td>
                </tr>
                </table>
                
                <a class="btn bg-primary text-white" href="order.php">Quay lại</a>
            </form>
        </div>
    </div>
</div>