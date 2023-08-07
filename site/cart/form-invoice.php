<div class="container mt-4">
  <div class="row justify-content-center">
    <div class="col-lg-6">
      <div class="card shadow-sm">
        <div class="card-body">
          <h5 class="card-title text-center mb-4">Thông tin nhận hàng</h5>
          <form action="<?= $SITE_URL . '/cart/invoice.php' ?>" method="POST" id="invoice" enctype="multipart/form-data">
            <div class="mb-3">
              <label for="ho_ten" class="form-label">Họ và tên</label>
              <input type="text" name="ho_ten" id="ho_ten" class="form-control rounded-pill" value="<?= $ho_ten ?>" required>
            </div>
            <div class="mb-3">
              <input type="hidden" name="ma_kh" value="<?= $ma_kh ?>">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Địa chỉ email</label>
              <input type="email" name="email" id="email" class="form-control rounded-pill" value="<?= $email ?>" required>
            </div>
            <div class="mb-3">
              <label for="sdt" class="form-label">Số điện thoại</label>
              <input type="text" name="sdt" id="sdt" class="form-control rounded-pill" required>
            </div>
            <div class="mb-3">
              <label for="dia_chi" class="form-label">Địa chỉ nhận hàng</label>
              <input type="text" name="dia_chi" id="dia_chi" class="form-control rounded-pill" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Phương thức thanh toán</label>
              <br>
              <div class="form-check form-check-inline">
                <input class="form-check-input ml-2" type="radio" name="thanh_toan" id="thanh_toan_1" value="1" required>
                <label class="form-check-label ml-2" for="thanh_toan_1">Visa</label>
                <input class="form-check-input ml-2" type="radio" name="thanh_toan" id="thanh_toan_2" value="2" required>
                <label class="form-check-label ml-2" for="thanh_toan_1">Thanh toán khi nhận hàng</label>
                <input class="form-check-input ml-2" type="radio" name="thanh_toan" id="thanh_toan_3" value="3" required>
                <label class="form-check-label ml-2" for="thanh_toan_1">Ngân hàng liên kết</label>
              </div>
            </div>
            <input type="hidden" name="trang_thai" value="0">
            <div class="mb-3">
              <label for="ghi_chu" class="form-label">Ghi chú</label>
              <textarea name="ghi_chu" id="ghi_chu" class="form-control" rows="4"></textarea>
            </div>
            <div class="text-center">
              <button type="submit" name="btn_thanh_toan" class="btn btn-success rounded-pill">Đặt hàng</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
