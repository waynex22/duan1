<section class="vh-100" style="background-color: #fff;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
            <h3 class="mb-5">Sign in</h3>
            <form action="<?= $SITE_URL ?>/tai-khoan/dang-nhap.php" method="POST" id="form_login">
            <div class="form-group">
                <label for="email" class="form-label">Tài khoản</label>
                <input name="ma_kh" class="form-control" placeholder="Username" type="text" value="<?= $ma_kh ?>">
            </div> <!-- form-group// -->
            <div class="form-group">
                <label for="password" class="form-label">Mật khẩu</label>
                <input name="mat_khau" class="form-control" placeholder="Password" type="password"
                    value="<?= $mat_khau ?>">
                <i class="text-danger text-center"><?= $MESSAGE ?></i>
            </div> <!-- form-group// -->

            <div class="form-group">
                <a href="<?= $SITE_URL ?>/tai-khoan/quen-mk.php" class="float-right">Quên mật khẩu?</a>

                <label class="float-left custom-control custom-checkbox"> <input type="checkbox"
                        class="custom-control-input" name="ghi_nho" checked>
                    <div class="custom-control-label"> Ghi nhớ tài khoản </div>
                </label>
            </div> <!-- form-group form-check .// -->

            <div class="form-group">
                <button type="submit" name="btn_login" class="btn bg-primary btn-block text-white"> Đăng nhập </button>
            </div> <!-- form-group// -->
            <p class="text-center mt-4">Bạn chưa có tài khoản? <a href="<?= $SITE_URL ?>/tai-khoan/dang-ky.php">Đăng ký</a></p>
        </form>
        </div>
      </div>
    </div>
  </div>
  
</section>