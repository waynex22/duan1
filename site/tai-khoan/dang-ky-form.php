<section class="">
  <!-- Jumbotron -->
  <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: #fff">
    <div class="container" >
      <div class="row gx-lg-5 align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <h1 class="my-5 display-3 fw-bold ls-tight">
            Right Store <br />
            <span class="text-primary">your top choice</span>
          </h1>
          <p style="color: hsl(217, 10%, 50.8%)">
          Selecting a name for a Shoe Store Names is very hard to find and you don’t want to make any mistake in this as this name will be your first identity which will attract the customers and we are sure you don’t want to mess up with this name. It is also important that you should have an idea of how other Shoe Store Names are named and get an idea of it.
          </p>
        </div>

        <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="card">
            <div class="card-body py-5 px-md-5">
            <h3 class="mb-5">Register</h3>
            <form action="<?= $SITE_URL ?>/tai-khoan/dang-ky.php" method="post" enctype="multipart/form-data"
             id="form_dang_ki">
             <div class="form-row">
                 <div class="col form-group">
                     <label>Họ và tên</label>
                     <input type="text" class="form-control" placeholder="Họ tên" name="ho_ten">
                 </div> <!-- form-group end.// -->
             </div> <!-- form-row end.// -->
             <div class="form-row">
                 <div class="col form-group">
                     <label>Tên đăng nhập</label>
                     <input type="text" class="form-control" placeholder="Username" name="ma_kh">
                 </div> <!-- form-group end.// -->
             </div> <!-- form-row end.// -->
             <div class="form-group">
                 <label>Email</label>
                 <input type="email" class="form-control" placeholder="Nhập địa chỉ email..." name="email">
                 <small class="form-text text-muted">Chúng tôi sẽ không bao giờ chia sẻ email của bạn với bất kỳ
                     ai khác.</small>
             </div> <!-- form-group end.// -->
             <div class="form-row">
                 <div class="col form-group">
                     <label>Ảnh đại diện</label>
                     <input type="file" class="form-control" name="up_hinh">
                 </div> <!-- form-group end.// -->
             </div> <!-- form-row end.// -->
             <div class="form-row">
                 <div class="form-group col-md-6">
                     <label>Tạo mật khẩu</label>
                     <input class="form-control" type="password" name="mat_khau" id="mat_khau">
                 </div> <!-- form-group end.// -->
                 <div class="form-group col-md-6">
                     <label>Nhập lại mật khẩu</label>
                     <input class="form-control" type="password" name="mat_khau2">
                 </div> <!-- form-group end.// -->
             </div>
             <i class="text-danger"><?= $MESSAGE ?></i>
             <div class="form-group">
                 <button type="submit" name="btn_register" class="btn bg-primary text-white btn-block"> Đăng ký </button>
             </div> <!-- form-group// -->
             <input type="hidden" name="kich_hoat" value="1">
             <input type="hidden" name="vai_tro" value="0">

             <i class=" text-danger"><?= (isset($MESSAGE) && (strlen($MESSAGE) > 0)) ? $MESSAGE : "" ?></i>

         </form>
         <hr>
         <p class="text-center">Đã có tài khoản? <a href="<?= $SITE_URL ?>/tai-khoan/dang-nhap.php">Đăng nhập</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Jumbotron -->
</section>