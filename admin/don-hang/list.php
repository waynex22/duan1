<div class="container">
  <div class="page-title">
    <h4 class="mt-5 br-12 bsd font-weight-bold text-center bg-primary p-3 text-white">Quản lý đơn hàng</h4>
  </div>
  <div class="card box box-primary br-12 bsd">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered text-center">
        <button type="submit" class="btn btn-danger mb-1" id="deleteAll" onclick="return checkDelete()">
                    Xóa mục đã chọn</button>
          <thead class="table-white bg-primary text-white">
                          <tr>
                          <th><input type="checkbox" id="select-all"></th>
                            <th>Mã đơn</th>
                            <th>Tên Khách Hàng</th>
                            <th>Số điện thoại</th>
                            <th>Ngày đặt hàng</th>
                            <th>Trạng thái</th>             
                            <th></th>
                            <th></th>
                            
                          </tr>
                        </thead>
                        <tbody>
                          <?php 
                            foreach ($items as $item) {
                              extract($item);
                             {
                          ?>
                                <tr>
                                <td><input type="checkbox" name="order_id[]" value="<?= $ma_hh ?>"></td>
                                  <td><?= $item['order_id'] ?></td>
                                  <td><?= $item['ho_ten'] ?></td>
                                  <td><?= $item['sdt'] ?></td>
                                  <td><?= $item['created_at'] ?></td>
                                  
                                  <td><?php
                                    if ($item['trang_thai'] == 0) {
                                        echo '<span class="badge badge-danger">Chưa tiếp nhận</span>';
                                    }
                                    if ($item['trang_thai'] == 1) {
                                        echo '<span class="badge badge-warning">Đã tiếp nhận</span>';
                                    }
                                    if ($item['trang_thai'] == 2) {
                                        echo '<span class="badge badge-warning">Đã rời kho</span>';
                                    }
                                    if ($item['trang_thai'] == 3) {
                                        echo '<span class="badge badge-danger">Đang vận chuyển</span>';
                                    }
                                    if ($item['trang_thai'] == 4) {
                                        echo '<span class="badge badge-warning">Đã đến nơi</span>';
                                    }
                                    if ($item['trang_thai'] == 5) {
                                        echo '<span class="badge badge-success">Đã nhận hàng</span>';
                                    }
                                    if ($item['trang_thai'] == 6) {
                                        echo '<span class="badge badge-dark">Đã hủy</span>';
                                    }
                                    ?></td>
                    <td class="text-end">
                            <a href="../don-hang/index.php?order_id=<?= $order_id ?>"
                                class="btn btn-outline-info btn-rounded">Chi tiết <i
                                    class="fas fa-info-circle"></i></i></a>
                        </td>
                        <td class="text-end">
                                <a href="index.php?btn_delete&ma_bl=<?= $order_id ?>&order_id=<?= $order_id ?>"
                                    class="btn btn-outline-danger btn-rounded" onclick="return checkDelete()"><i
                                        class="fas fa-trash"></i></a>
                            </td>
                        
                  </tr>
            <?php
                }
              }
             
            ?>
              
            <?php  ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
