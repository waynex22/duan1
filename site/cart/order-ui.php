<div class="container">
  <div class="page-title">
    <h4 class="mt-5 card font-weight-bold text-center bg-primary p-3 text-white">Lịch Sử Mua Hàng</h4>
  </div>
  <div class="card">
    <div class="card-body ">
      <div class="table-responsive">
        <table class="table table-bordered text-center">
          <thead class="table-white bg-primary text-white">
                          <tr>
                            <th>Mã đơn</th>
                            <th>Tên Khách Hàng</th>
                            <th>Số điện thoại</th>
                            <th>Trạng thái</th>             
                            <th></th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php if (!empty($orders)) {
                            foreach ($orders as $order) {
                              if ($order['ma_kh'] == $ma_kh) {
                          ?>
                                <tr>
                                  <td><?= $order['order_id'] ?></td>
                                  <td><?= $order['ho_ten'] ?></td>
                                  <td><?= $order['sdt'] ?></td>
                                  
                                  <td><?php
                                    if ($order['trang_thai'] == 0) {
                                        echo '<span class="badge badge-danger">Chưa tiếp nhận</span>';
                                    }
                                    if ($order['trang_thai'] == 1) {
                                        echo '<span class="badge badge-warning">Đã tiếp nhận</span>';
                                    }
                                    if ($order['trang_thai'] == 2) {
                                        echo '<span class="badge badge-warning">Đã rời kho</span>';
                                    }
                                    if ($order['trang_thai'] == 3) {
                                        echo '<span class="badge badge-danger">Đang vận chuyển</span>';
                                    }
                                    if ($order['trang_thai'] == 4) {
                                        echo '<span class="badge badge-warning">Đã đến nơi</span>';
                                    }
                                    if ($order['trang_thai'] == 5) {
                                        echo '<span class="badge badge-success">Đã nhận hàng</span>';
                                    }
                                    if ($order['trang_thai'] == 6) {
                                        echo '<span class="badge badge-dark">Đã hủy</span>';
                                    }
                                    ?></td>
                    <td class="text-end">
                            <a href="../cart/order.php?order_id=<?= $order['order_id']?>"
                                class="btn btn-outline-info btn-rounded">Chi tiết <i
                                    class="fas fa-info-circle"></i></i></a>
                        </td>                   
                    <td class="text-end">
                      <a href="#" id="cancelOrderBtn" class="btn btn-outline-danger btn-rounded">Hủy Đơn <i></i></a>
                    </td>                 
                  </tr>
            <?php
                }
              }
            } else {
            ?>
              <tr>
                <td colspan="6">Bạn chưa có bất kì đơn hàng nào !!!</td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<div id="popupContainer" class="modal">
          <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
           <div class="modal-body">
           <p>Đã gửi yêu cầu hủy đơn hàng này</p>
          </div>
          </div>
           </div>
          </div>
<script>
  function showPopup() {
    document.getElementById("popupContainer").style.display = "block";
    setTimeout(function () {
      hidePopup();
    }, 2000);
  }

  function hidePopup() {
    document.getElementById("popupContainer").style.display = "none";
  }

  document.getElementById("cancelOrderBtn").addEventListener("click", function (event) {
    event.preventDefault();
    showPopup();
  });
</script>
