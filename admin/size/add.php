<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header br-12 bsd card text-center bg-primary text-white text-uppercase">Thêm Biến Thể</div>
            <div class="card-body">
                <form action="index.php" method="POST" id="add_size">
                    <div class="mb-3">
                        <label for="size_id" class="form-label">ID</label>
                        <input type="text" name="size_id" class="form-control" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="size" class="form-label">Size</label>
                        <input type="text" name="size" class="form-control" required>
                    </div>
                    <div class="mb-3 text-center">
                        <input type="reset" value="Nhập lại" class="btn btn-danger mr-3">
                        <input type="submit" name="btn_insert" value="Thêm mới" class="btn btn-primary mr-3">
                        <a href="index.php?btn_list"><input type="button" class="btn btn-success" value="Danh sách"></a>
                    </div>
                    <a class="btn bg-primary text-white" href="index.php?btn_list">Quay lại</a>
                </form>
            </div>
        </div>
    </div>
</div>