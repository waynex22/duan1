<nav class="navbar navbar-md navbar-expand-lg p-0">
    <div class="container">
        <a class="navbar-brand" href="<?= $SITE_URL ?>/trang-chinh/index.php">
            <img class="img-fluid logo" src="<?= $CONTENT_URL ?>/images/logo.png" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars primary-color"></i>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="navbarsExampleDefault">
            <ul class="navbar-nav m-auto nav">
                <?php
                if (isset($_SESSION['name_page'])) {
                    $name_page = $_SESSION['name_page'];
                }
                ?>
                <li class="nav-item <?= $name_page == 'trang_chu' ? 'active' : '' ?>">
                    <a class="nav-link text-white " href="<?= $SITE_URL ?>/trang-chinh/index.php">TRANG CHỦ</a>
                </li>
                <li class="nav-item <?= $name_page == 'san_pham' ? 'active' : '' ?>">
                    <a class="nav-link text-white " href="<?= $SITE_URL ?>/trang-chinh/index.php?san-pham">SẢN PHẨM</a>
                </li>
                <li class="nav-item <?= $name_page == 'hoi_dap' ? 'active' : '' ?>">
                    <a class="nav-link text-white " href="<?= $SITE_URL ?>/trang-chinh/index.php?hoi-dap">LIÊN HỆ</a>
                </li>
            </ul>
            <div class="widgets-wrap float-md-right ml-2">
                <div class="dropdown widget-header icontext">
                    <a href="#" class="icon icon-sm rounded-circle border" id="dropdownMenu1" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <?php
                        if (isset($_SESSION['user']) && $_SESSION['user']['hinh'] != "") { ?>
                        <img src="<?= $UPLOAD_URL . "/users/" . $_SESSION['user']['hinh'] ?>" width="50" height="50"
                            class="mb-2 object-fit-cover" alt="">
                        <?php } else { ?>
                        <i class="fa fa-user text-white"></i>
                        <?php }  ?>
                    </a>
                    <div class="text">
                       
                        <?php
                        if (isset($_SESSION['user'])) { ?>
                        <div class="text-white"><?= $_SESSION['user']['ho_ten'] ?></div>
                        <?php } else { ?>

                        <a href="<?= $SITE_URL . '/tai-khoan/dang-nhap.php' ?>" class="d-block text-white text-uppercase">Đăng nhập</a>

                        <?php }  ?>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <?php
                            if (isset($_SESSION['user'])) { ?>

                            <?php if ($_SESSION['user']['vai_tro'] == 1) { ?>
                            <a class="dropdown-item pl-3 py-2" href="<?= $ADMIN_URL . "/trang-chinh/" ?>">Quản Lý</a>
                            <?php }  ?>

                            <a class="dropdown-item pl-3 py-2"
                                href="<?= $SITE_URL . '/tai-khoan/cap-nhat-tk.php' ?>">Cập nhật</a>
                            <a class="dropdown-item pl-3 py-2"
                                href="<?= $SITE_URL . '/cart/order.php' ?>">Xem đơn hàng</a>
                            <a class="dropdown-item pl-3 py-2" href="<?= $SITE_URL . '/tai-khoan/doi-mk.php' ?>">Đổi mật
                                khẩu</a>
                            <a class="dropdown-item pl-3 py-2"
                                href="<?= $SITE_URL . '/tai-khoan/dang-nhap.php?btn_logout' ?>">Đăng xuất</a>


                            <?php } else { ?>

                            <a class="dropdown-item pl-3 py-2" href="<?= $SITE_URL . '/tai-khoan/dang-nhap.php' ?>">Đăng
                                nhập</a>
                            <a class="dropdown-item pl-3 py-2" href="<?= $SITE_URL . '/tai-khoan/dang-ky.php' ?>">Đăng
                                ký</a>

                            <?php }  ?>
                        </div>
                    </div>
                </div>
                <div class="widget-header  mr-6">
                    <a href="<?= $SITE_URL . "/cart/list-cart.php" ?>" class="icon icon-sm rounded-circle border"><i
                            class="fa fa-shopping-cart text-white"></i></a>
                    <span class="badge badge-pill badge-danger notify bg-white primary-color">
                        <?php
                        if (isset($_SESSION['total_cart'])) {
                            echo $_SESSION['total_cart'];
                        } else {
                            echo 0;
                        }
                        ?>
                    </span>
                </div>
            </div> 

        </div>

    </div>

</nav>
