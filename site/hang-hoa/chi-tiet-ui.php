<!-- Product-detail -->
<?php
$variants = hang_hoa_variants_get_by_ma_hh($ma_hh);
?>
<div class="container mt-3">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= $ROOT_URL ?>">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="<?= $SITE_URL . '/hang-hoa/liet-ke.php' ?>">Sản phẩm</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Chi tiết</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-6">
            <div class="card bg-light mb-3">
                <div class="card-body text-center">
                    <a href="#" data-toggle="modal" data-target="#productModal">
                        <img class="img-fluid" src="<?= $UPLOAD_URL . "/products/" . $hinh ?>" />
                        <p class="text-center">Xem rõ ảnh hơn</p>
                    </a>
                    <?php if (!empty($sub_images)) { ?>
                <div class="sub-images">
                <?php foreach ($sub_images as $sub_image) { 
                    ?>
                    <img class="sub-image" src="<?= $UPLOAD_URL . "/sub_images/" . $sub_image['sub_image_url'] ?>" />
                <?php
                } 
            }
             ?>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6 add_to_cart_block">
            <div class="card bg-light mb-3">
                <div class="card-body text-center text-primary">
                    <h4 class="card-title"><?= $ten_hh ?></h4>
                    <?php
                    if ($don_gia > 0) {
                        $percent_discount = number_format($giam_gia / $don_gia * 100);
                    } else {
                        $percent_discount = 0;
                    }
                    ?>
                    <div class="product-price">
                        <div class="col d-flex justify-content-center align-items-center text-ccc">
                            <del class="d-block"><?= number_format($don_gia, 0, ',') ?>đ</del>
                            <p class="text-danger font-weight-bold d-block ml-3 mb-0">
                                <?= number_format($don_gia - $giam_gia, 0, ',') ?>đ</p>
                        </div>
                    </div>

                    
                    <form method="get" action="cart.php">
                    <lable class="text-center text-primary"> Size </lable>
                    <div class="form-group text-uppercase d-flex flex-wrap text-primary">
                        
                    <?php 
                        foreach ($variants as $index => $variant) {
                            extract($variant);
                             $size = size_select_by_id($size_id);
                    ?>
                        <label for="size-<?= $size_id ?>" class="size-button  <?= $quantity_in_stock == 0 ? 'disabled' : '' ?>" 
                         data-variant-index="<?= $index ?>" data-size-id="<?= $size_id ?>">
                         <?= $size['size'] ?>
                        <br>
                            <span class="quantity <?= $quantity_in_stock == 0 ? 'out-of-stock' : '' ?>">
                            còn <?= $quantity_in_stock ?> Sản phẩm
                            </span>
                        </label>
                    <?php
                     } 
                    ?>
                    </div>
                    <a href="<?= $SITE_URL . "/cart/add-cart.php?id=" .$ma_hh ?>"
   class="btn btn-white bg-primary btn-lg btn-block text-white text-uppercase">
    <i class="fa fa-shopping-cart text-white"></i> Mua Ngay
</a>
                    </form>
                    <div class="product_rassurance">
                        <ul class="list-inline">
                            <li class="list-inline-item"><i class="fa fa-truck fa-2x"></i><br />Giao hàng nhanh</li>
                            <li class="list-inline-item"><i class="fa fa-credit-card fa-2x"></i><br />Bảo mật
                            </li>
                            <li class="list-inline-item"><i class="fa fa-phone fa-2x"></i><br />0987654321
                            </li>
                        </ul>
                    </div>
                    <div class="reviews_product p-3 mb-2 ">
                        3 reviews
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        (4/5)
                        <a class="pull-right" href="#reviews">Xem tất cả đánh giá</a>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Description -->
        <div class="col-12">
            <div class="card border-light mb-3">
                <div class="card-header bg-primary text-white text-uppercase"><i class="fa fa-align-justify"></i>
                    Mô tả sản phẩm
                </div>
                <div class="card-body">
                    <p class="card-text"><?= $mo_ta ?></p>
                </div>
            </div>
        </div>

        <!-- Reviews -->
        <?php require "./binh-luan.php"; ?>
    </div>
</div>
<!-- Same product -->
<section class="same-product mt-5">
    <h3 class="same-product-title text-center">Sản phẩm cùng loại</h3>
    <?php require "./hang-cung-loai.php"; ?>
</section>

<!-- Modal image -->
<div class="modal fade" id="productModal" tabindex="-1" role="dialog" aria-labelledby="productModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h5 class="modal-title" id="productModalLabel"><?= $ten_hh ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <img class="img-fluid" src="<?= $UPLOAD_URL . "/products/" . $hinh ?>" />
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div id="notification" class="notification">
    Bạn cần chọn size để thêm giỏ hàng
</div>
<style>
    
</style>

<script>
    const addToCartButton = document.querySelector('.btn.btn-white.bg-primary.btn-lg.btn-block.text-white.text-uppercase');
    const sizeButtons = document.querySelectorAll('.size-button');
    const productId = <?= $ma_hh ?>;
sizeButtons.forEach(button => {
    button.addEventListener('click', () => {
        sizeButtons.forEach(btn => {
            btn.classList.remove('checked');
        });
        button.classList.add('checked');

        // Update quantity display
        const selectedSizeId = button.dataset.sizeId;
        document.getElementById('selected-size-id').value = selectedSizeId;
        const quantity = button.querySelector('.quantity');
        const variantIndex = button.dataset.variantIndex;
        if (variantIndex !== undefined) {
            const variant = variants[variantIndex];
            quantity.textContent = variant.quantity_in_stock + ' in stock';

            // Update "Add to Cart" button link
            addToCartButton.href = variant.quantity_in_stock > 0
                ? '<?= $SITE_URL . "/cart/add-cart.php?id=" ?>' + variant.ma_hh
                : '#';
            addToCartButton.classList.toggle('disabled', variant.quantity_in_stock === 0);
        }
    });
});

addToCartButton.addEventListener('click', (event) => {
        const selectedVariant = document.querySelector('.size-button.checked');
        if (!selectedVariant) {
            event.preventDefault();
            showNotification();
        }
    

    function showNotification() {
        const notification = document.getElementById('notification');
        notification.classList.add('notification-show');

        setTimeout(() => {
            notification.classList.remove('notification-show');
        }, 3000); // Hide after 3 seconds (adjust as needed)
    }
});
</script>