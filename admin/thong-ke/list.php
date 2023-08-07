<div class="container">
    <div class="page-title">
        <h4 class="mt-5 br-12 bsd font-weight-bold text-center bg-primary p-3 text-white">THỐNG KÊ HÀNG HÓA TỪNG LOẠI</h4>
    </div>
    <div class="box box-primary br-12 bsd">
        <div class="box-body">
            <table width="100%" class="table table-hover table-bordered text-center">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>LOẠI HÀNG</th>
                        <th>SỐ LƯỢNG</th>
                        <th>GÍA THẤP NHẤT</th>
                        <th>GIÁ CAO NHẤT</th>
                        <th>GIÁ TRUNG BÌNH</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    foreach ($items as $item) {
                        extract($item);

                    ?>
                    <tr>
                        <td><?= $ten_loai ?></td>
                        <td><?= $so_luong ?></td>
                        <td><?= number_format($gia_min,0, 2) ?> VND</td>
                        <td><?= number_format($gia_max,0, 2) ?> VND</td>
                        <td><?= number_format($gia_avg,0, 2) ?> VND</td>
                    </tr>
                    <?php
                    }

                    ?>
                </tbody>
            </table>
            <a href="index.php?chart" class="btn btn-info text-white">Xem biểu đồ<i class="fas fa-eye ml-2"></i></a>
        </div>
    </div>
</div>