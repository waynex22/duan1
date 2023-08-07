<nav id="sidebar">
    <div class="sidebar-header">
        <a href="<?= $SITE_URL ?>/trang-chinh/">
            <img src="<?= $CONTENT_URL ?>/images/logo.png" alt="logo" class="img-fluid logo">
        </a>
    </div>
    <ul class="list-unstyled components text-white ">
        <li class="mb-2">
            <a href="<?= $SITE_URL ?>/trang-chinh/"><i class="fas fa-store"></i>Quay về Website</a>
        </li>
        <li class="mb-2">
            <a href="<?= $ADMIN_URL ?>/trang-chinh/"><i class="fas fa-home"></i>Trang chủ</a>
        </li>
        <!-- Danh mục -->
        <li class="mb-2">
            <a href="#categories" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-list-alt"></i>Quản Lý Danh Mục
                <i class="fas fa-angle-right float-xl-right"></i>
            </a>
            <ul class="collapse list-unstyled" id="categories">
                <li>
                    <a href="<?= $ADMIN_URL ?>/loai-hang/">
                        <i class="fas fa-plus"></i>Thêm Danh Mục</a>
                </li>
                <li>
                    <a href="<?= $ADMIN_URL ?>/loai-hang/index.php?btn_list">
                        <i class="fas fa-list-ul"></i>Danh sách danh mục</a>
                </li>
            </ul>
        </li class="mb-2">
        <!-- Sản phẩm -->
        <li class="mb-2">
            <a href="#products" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-table"></i>Quản Lý Sản Phẩm
                <i class="fas fa-angle-right float-xl-right"></i>
            </a>
            <ul class="collapse list-unstyled" id="products">
                <li>
                    <a href="<?= $ADMIN_URL ?>/hang-hoa/"><i class="fas fa-plus"></i>Thêm sản phẩm</a>
                </li>
                <li>
                    <a href="<?= $ADMIN_URL ?>/hang-hoa/index.php?btn_list">
                        <i class="fas fa-list-ul"></i>Danh sách sản phẩm</a>
                </li>
                <li>
                    <a href="<?= $ADMIN_URL ?>/hang-hoa/index.php?btn_kho">
                        <i class="fas fa-list-ul"></i>Quản lý kho hàng</a>
                </li>
            </ul>
        </li>
        <!-- Khách hàng -->
        <li class="mb-2">
            <a href="#accounts" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down">
                <i class="fas fa-user-friends"></i>Quản Lý User
                <i class="fas fa-angle-right float-xl-right"></i>
            </a>
            <ul class="collapse list-unstyled" id="accounts">
                <li>
                    <a href="<?= $ADMIN_URL ?>/khach-hang/"><i class="fas fa-plus"></i>Thêm khách hàng</a>
                </li>
                <li>
                    <a href="<?= $ADMIN_URL ?>/khach-hang/index.php?btn_list">
                        <i class="fas fa-list-ul"></i>Danh sách khách hàng</a>
                </li>
            </ul>
        </li>
        <li class="mb-2">
            <a href="<?= $ADMIN_URL ?>/binh-luan/"> <i class="fas fa-comments"></i>Quản Lý Bình Luận</a>
        </li>
        <li class="mb-2">
            <a href="<?= $ADMIN_URL ?>/don-hang/"><i class="fas fa-shopping-cart"></i></i>Quản Lý Đơn Hàng</a>
        </li>
        <li class="mb-2">
            <a href="#categories" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-list-alt"></i>Biến Thể
                <i class="fas fa-angle-right float-xl-right"></i>
            </a>
            <ul class="collapse list-unstyled" id="categories">
                <li>
                    <a href="<?= $ADMIN_URL ?>/size/">
                        <i class="fas fa-plus"></i>Thêm Biến Thể</a>
                </li>
                <li>
                    <a href="<?= $ADMIN_URL ?>/size/index.php?btn_list">
                        <i class="fas fa-list-ul"></i>Danh sách Biến Thể</a>
                </li>
            </ul>
        </li class="mb-2">
        <li class="mb-2">
            <a href="<?= $ADMIN_URL ?>/thong-ke/"><i class="fas fa-chart-line"></i></i>Thống kê</a>
        </li>
        
        
    </ul>
</nav>