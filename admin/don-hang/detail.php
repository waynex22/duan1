<section  class="container">
  <div class="page-title">
    <h4 class="mt-5 br-12 bsd card font-weight-bold text-center bg-primary p-3 text-white">Cập nhật trạng thái</h4>
  </div>
  <div class="card br-12 bsd">
    <div class="card-body">
    <i class="ml-5 text-primary">Mã đơn hàng: <b><?= $order_id ?></b></i>
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
                            foreach ($items as $item) {
                                extract($item);
                               
                        ?>
                            <td><?= $ten_hh ?></td>
                            <td><img src="<?= $UPLOAD_URL . "/products/" . $item['hinh']; ?>"  alt="" height="90" width = "120"/></td>
                            <td><?= $so_luong ?></td>
                            <td><?= number_format($don_gia, 0, ".") ?></td>
                            <td><?php
                                    if ($order['thanh_toan'] == 0) {
                                        echo '<span class="badge badge-danger">Visa</span>';
                                    }
                                    if ($order['thanh_toan'] == 1) {
                                        echo '<span class="badge badge-warning">Trả tiền khi nhận hàng</span>';
                                    }
                                    if ($order['thanh_toan'] == 2) {
                                        echo '<span class="badge badge-warning">Ngân hàng liên kết</span>';
                                    }
                                    if ($order['thanh_toan'] == 3) {
                                        echo '<span class="badge badge-danger">Thẻ Ghi Nợ</span>';
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

                </table>
                <div class="col-lg-6">
                                    <div class="timeline">
                                        <div class="slider-5 <?= $order["trang_thai"] == 6 ? 'un-success' : '' ?>">
                                            <i class="far fa-comments bg-dark"></i>
                                            <div class="timeline-item ">
                                                <?= $order['trang_thai'] > 0 ? '<span data-active="1" class="time time-1"><i class="fas fa-clock"></i>  xác nhận</span>' : '<span  class="time time-1"><i class="fas fa-clock"></i> Chưa xác nhận</span>' ?>

                                                <h3 class="timeline-header timeline-header-1"><a href="#">Đã tiếp nhận đơn hàng</a> Bộ
                                                    phận
                                                    chăm sóc khách hàng </h3>
                                                <div class="timeline-body timeline-1">
                                                </div>
                                                <div class="timeline-footer">


                                                    <?= $order['trang_thai'] > 0 ? '<a  class=" btn btn-success btn-sm">Đã xác nhận</a>' : '<a data-active="1" class="set-success btn btn-danger btn-sm">Xác nhận</a>' ?>
                                                </div>
                                            </div>
                                        </div>


                                        <!-- END timeline item -->
                                        <!-- timeline item -->
                                        <div class="slider-4 <?= $order['trang_thai'] <= 0 || $order['trang_thai'] == 6 ? 'un-success' : '' ?>">
                                            <i class="fas fa-home bg-danger"></i>
                                            <div class="timeline-item ">
                                                <?= $order['trang_thai'] > 1 ? '<span data-active="2" class="time time-1"><i class="fas fa-clock"></i>  xác nhận</span>' : '<span  class="time time-1"><i class="fas fa-clock"></i> Chưa xác nhận</span>' ?>

                                                <h3 class="timeline-header timeline-header timeline-header-2"><a href="#">Đã rời khỏi
                                                        kho</a> Bộ phận quản lý kho</h3>
                                                <div class="timeline-body timeline-2">
                                                </div>
                                                <div class="timeline-footer">
                                                    <?= $order['trang_thai'] <= 1  ? '<a data-active="2" class="set-success btn btn-danger btn-sm">Xác nhận</a>' : '<a class="btn btn-success btn-sm">Đã xác nhận</a>'  ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slider-3 <?= $order['trang_thai'] <= 1 || $order['trang_thai'] == 6 ? 'un-success' : '' ?>">
                                            <i class="fas fa-ambulance bg-warning"></i>
                                            <div class="timeline-item ">
                                            <?= $order['trang_thai'] > 2 ? '<span data-active="3" class="time time-1"><i class="fas fa-clock"></i>  xác nhận</span>' : '<span  class="time time-1"><i class="fas fa-clock"></i> Chưa xác nhận</span>' ?>
                                                <h3 class="timeline-header timeline-header timeline-header-3"><a href="#">Đang vận
                                                        chuyển</a>
                                                    Bộ phận vận chuyển </h3>
                                                <div class="timeline-body timeline-3">
                                                </div>
                                                <div class="timeline-footer">
                                                    <?= $order['trang_thai'] <= 2 ? '<a data-active="3" class="set-success btn btn-danger btn-sm">Xác nhận</a>' : '<a class="btn btn-success btn-sm">Đã xác nhận</a>' ?>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END timeline item -->
                                        <!-- timeline item -->

                                        <!-- END timeline item -->
                                        <!-- timeline time label -->
                                        <div class="time-label">
                                            <span class="bg-green">Tiếp cận</span>
                                        </div>
                                        <!-- /.timeline-label -->
                                        <!-- timeline item -->
                                        <div class="slider-2 <?= $order['trang_thai'] <= 2 || $order['trang_thai'] == 6 ? 'un-success' : '' ?>">
                                            <i class="fas fa-map-marker-alt bg-cyan"></i>
                                            <div class="timeline-item ">
                                            <?= $order['trang_thai'] > 3 ? '<span data-active="4" class="time time-1"><i class="fas fa-clock"></i>  xác nhận</span>' : '<span  class="time time-1"><i class="fas fa-clock"></i> Chưa xác nhận</span>' ?>
                                                <h3 class="timeline-header timeline-header timeline-header-4"><a href="#">Đã đến
                                                        nơi</a> Bộ
                                                    phận vận chuyển </h3>
                                                <div class="timeline-body timeline-4">
                                                </div>
                                                <div class="timeline-footer">
                                                    <?= $order['trang_thai'] <= 3 ? '<a data-active="4" class="set-success btn btn-danger btn-sm">Xác nhận</a>' : '<a class="btn btn-success btn-sm">Đã xác nhận</a>' ?>
                                                </div>
                                            </div>
                                        </div>

                                    
                                        <div class="slider-1 <?= $order['trang_thai'] < 4 || $order['trang_thai'] == 6 ? 'un-success' : '' ?>">
                                            <i class="fas fa-tasks bg-success"></i>
                                            <div class="timeline-item ">
                                            <?= $order['trang_thai'] > 4 ? '<span data-active="5" class="time time-1"><i class="fas fa-clock"></i>  xác nhận</span>' : '<span  class="time time-1"><i class="fas fa-clock"></i> Chưa xác nhận</span>' ?>
                                                <h3 class="timeline-header timeline-header timeline-header-5"><a href="#">Hoàn
                                                        thành</a> Bộ
                                                    phận vận chuyển</h3>
                                                <div class="timeline-body timeline-5">
                                                </div>
                                                <div class="timeline-footer">
                                                    <?= $order['trang_thai'] <= 4 ? '<a data-active="5" class="set-success btn btn-danger btn-sm">Xác nhận</a>' : '<a class="btn btn-success btn-sm">Đã xác nhận</a>' ?>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="slider-6 <?= $order['trang_thai'] == 5  ? 'un-success' : '' ?>">
                                            <i class="far fa-frown bg-dark"></i>
                                            <div class="timeline-item ">
                                            <?= $order['trang_thai'] >= 6 ? '<span data-active="6" class="time time-1"><i class="fas fa-clock"></i>  xác nhận</span>' : '<span  class="time time-1"><i class="fas fa-clock"></i> Chưa xác nhận</span>' ?>
                                                <h3 class="timeline-header timeline-header-6"><a href="#">Hủy đơn hàng</a>
                                                </h3>
                                                <div class="timeline-footer">

                                                    <?= $order['trang_thai'] == 6 ? '<a data-active="6" class="success-6 btn btn-dark btn-sm submit">Đã hủy</a>' : ' <a data-active="6" class="set-success success-6 btn btn-dark btn-sm submit">Xác nhận</a>' ?>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                               
                            </div>
                <a class="btn bg-primary text-white" href="index.php">Quay lại</a>
            </form>
        </div>
    </div>
    
</section>
<script>
    $(document).on("click", ".set-success", function() {
        var that = this;
        var url = new URL(window.location.href);


        var order_id = url.searchParams.get("order_id");
        var dataActive = ($(this).attr("data-active"));

        $.ajax({
                method: "POST",
                url: "index.php?btn_change_active",
                data: {
                    trang_thai: dataActive,
                    order_id: order_id
                }
            })
            .done(function(msg) {
                msg = JSON.parse(msg);
                console.log(msg)
                if (msg.status == 'success') {
                    $(that).text('Đã xác nhận');
                    $(that).removeClass('set-success btn-danger');
                    $(that).addClass('btn-success');
                    $('.slider-' + (dataActive + 1)).removeClass('un-success');
                    location.reload();
                } else {
                    alert('Xác nhận không hợp lệ');
                }
            }); 
    });
</script>