<div class="container">
    <div class="page-title ">
        <h4 class="mt-5 br-12 bsd card font-weight-bold text-center bg-primary p-3 text-white">Tổng hợp bình luận</h4>
    </div>
    <div class="box card box-primary br-12 bsd">
        <div class="box-body">
            <table width="100%" class="table table-hover table-bordered text-center">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>Hàng hóa</th>
                        <th>Số bình luận</th>
                        <th>Cũ nhất</th>
                        <th>Mới nhất</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    foreach ($items as $item) {
                        extract($item);

                    ?>
                    <tr>
                        <td><?= $ten_hh ?></td>
                        <td><?= $so_luong ?></td>
                        <td><?= $cu_nhat ?></td>
                        <td><?= $moi_nhat ?></td>
                        <td class="text-end">
                            <a href="../binh-luan/index.php?ma_hh=<?= $ma_hh ?>"
                                class="btn btn-outline-info btn-rounded">Chi tiết <i
                                    class="fas fa-info-circle"></i></i></a>
                        </td>
                    </tr>
                    <?php
                    }

                    ?>
                </tbody>

            </table>
        </div>
    </div>
</div>