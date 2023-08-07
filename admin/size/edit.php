<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header br-12 bsd text-center bg-primary text-white text-uppercase">Cập nhật Biến Thể</div>
            <div class="card-body br-12 bsd">
                <form action="index.php?btn_update" method="POST" id="edit_size">
                    <div class="mb-3">
                        <label for="size_id" class="form-label">ID</label>
                        <input type="text" name="size_id" class="form-control" disabled value="<?= $size_id ?>">
                    </div>
                    <div class="mb-3">
                        <label for="size" class="form-label">Size</label>
                        <input type="text" name="size" placeholder="Nhập tên loại" class="form-control" required
                            value="<?= $size ?>">
                    </div>
                    <div class="mb-3 text-center">
                        <input type="hidden" name="size_id" value="<?= $size_id ?>">
                        <input type="reset" value="Nhập lại" class="btn btn-danger mr-3">
                        <input type="submit" name="btn_update" value="Cập nhật" class="btn btn-primary mr-3">
                        <a href="index.php?btn_list"><input type="button" class="btn btn-success" value="Danh sách"></a>
                    </div>
                    <a class="btn bg-primary text-white" href="index.php?btn_list">Quay lại</a>

                </form>
            </div>
        </div>
    </div>
</div>