<div class="container">
    <div class="page-title">
        <h4 class="mt-5 card br-12 bsd font-weight-bold text-center bg-primary p-3 text-white">Danh Sách Biến Thể</h4>
    </div>
    <div class="box card box-primary br-12 bsd">
        <div class="box-body">
            <form action="?btn_delete_all" method="post" class="table-responsive">
                <button type="submit" class="btn btn-danger mb-1" id="deleteAll" onclick="return checkDelete()">
                    Xóa mục đã chọn</button>
                <table width="100%" class="table table-hover table-bordered text-center">
                    <thead class=" bg-primary text-white">
                        <tr>
                            <th><input type="checkbox" id="select-all"></th>
                            <th>Size-ID</th>
                            <th>Size</th>
                            <th><a href="index.php" class="btn btn-success text-white">Thêm mới
                                    <i class="fas fa-plus-circle"></i></a></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        foreach ($items as $item) {
                            extract($item);
                            $suadm = "index.php?btn_edit&size_id=" . $size_id;
                            $xoadm = "index.php?btn_delete&size_id=" . $size_id;

                        ?>
                        <tr>
                            <td><input type="checkbox" name="size_id[]" value="<?= $size_id ?>"></td>
                            <td><?= $size_id ?></td>
                            <td><?= $size ?></td>
                            <td class="text-end">
                                <a href="<?= $suadm ?>" class="btn btn-outline-info btn-rounded"><i
                                        class="fas fa-pen"></i></a>
                                <a href="<?= $xoadm ?>" class="btn btn-outline-danger btn-rounded"
                                    onclick="return checkDelete()"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php
                        }

                        ?>
                    </tbody>

                </table>
            </form>
        </div>
    </div>
</div>