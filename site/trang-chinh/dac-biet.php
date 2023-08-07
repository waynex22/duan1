<div class="container mt-3">
    <div class="row">
        <div class="col-large">
            <!-- <div class="card"> -->
            <div class="  font-weight-bold text-primary text-uppercase text-center">
            <h2 class="elementor-heading-title elementor-size-default">unbelievable</h2> <br>
            <h3 class="elementor">Speed Comfort</h3>
                </div>
                <div class="card">
                <div class="card-body">
                    <div class="row">
                        <?php foreach ($items as $item) :
                            extract($item);
                            if ($don_gia > 0) {
                                $percent_discount = number_format($giam_gia / $don_gia * 100);
                            } else {
                                $percent_discount = 0;
                            }

                        ?>
                        <div class="col-12 col-md-6 col-lg-3 mt-3">
                            <div class="card text-center product-card pb-2">
                                <div class="product-badge text-white bg-success">
                                    <?= $giam_gia == 0 ? '0%' : '-' . $percent_discount . '%' ?>
                                </div>
                                <a class="product-thumb"
                                    href="<?= $SITE_URL . '/hang-hoa/chi-tiet.php?ma_hh=' . $ma_hh ?>" data-abc="true">
                                    <img class="card-img-top product-img object-fit-contain"
                                        src="<?= $UPLOAD_URL . '/products/' . $hinh ?>" alt="Ảnh sản phẩm">
                                </a>
                                <div class="card-body p-0 pt-2 px-2">
                                    <h3 class="product-title mh-60">
                                        <a href="<?= $SITE_URL . '/hang-hoa/chi-tiet.php?ma_hh=' . $ma_hh ?>">
                                            <?= $ten_hh ?>
                                        </a>
                                    </h3>
                                    <div class="product-price">
                                        <div class="col d-flex justify-content-center align-items-center">
                                            <del class="d-block fz-14"><?= number_format($don_gia, 0, ',') ?>đ </del>
                                            <p class="text-danger font-weight-bold fz-20 d-block ml-3 mb-0">
                                                <?= number_format($don_gia - $giam_gia, 0, ',') ?>đ</p>
                                        </div>
                                    </div>
                                    <div class="col m-2">
                                    <a href="<?= $SITE_URL . '/hang-hoa/chi-tiet.php?ma_hh=' . $ma_hh ?>"
                                            class="button-19">Xem Chi Tiết</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                        </div>
            </div>
        <!-- </div> -->
    </div>
</div>
<div id="myCarousel" class="carousel slide">
 

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill">
                <img class="d-block w-100" src="<?= $CONTENT_URL ?>/images/banners/1.jpg" alt="First slide">
                </div>
                <div class="carousel-caption">
                     <h2 class="animated fadeInLeft">Step Step By Step</h2>
                     <p class="animated fadeInUp">Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                     <p class="animated fadeInUp"><a href="#" class="btn btn-transparent btn-rounded btn-large">Tìm Hiểu</a></p>
                </div>
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url('http://www.marchettidesign.net/demo/optimized-bootstrap/conference.jpg');"></div>
                <div class="carousel-caption">
                     <h2 class="animated fadeInDown">Step Step By Step </h2>
                     <p class="animated fadeInUp">Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                     <p class="animated fadeInUp"><a href="#" class="btn btn-transparent btn-rounded btn-large">Tìm Hiểu</a></p>
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('http://www.marchettidesign.net/demo/optimized-bootstrap/campus.jpg');"></div>
                <div class="carousel-caption">
                     <h2 class="animated fadeInRight">Step Step By Step </h2>
                     <p class="animated fadeInRight">Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                     <p class="animated fadeInRight"><a href="#" class="btn btn-transparent btn-rounded btn-large">Tìm Hiểu</a></p>
                </div>
            </div>
        </div>

    </div>
