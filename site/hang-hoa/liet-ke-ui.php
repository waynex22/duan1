
 <div class="container">
     <div class="row">
         <div class="col">
             <nav aria-label="breadcrumb">
                 <ol class="breadcrumb bg-primary">
                     <li class="breadcrumb-item"><a class="text-white" href<?= $ROOT_URL ?>>Trang chủ</a></li>
                     <li class="breadcrumb-item"><a class="text-white" href="<?= $SITE_URL . '/hang-hoa/liet-ke.php' ?>">Sản phẩm</a></li>
                 </ol>
             </nav>
         </div>
     </div>
 </div>
 <div class="container">
     <div class="row">
         <div class="col-12 col-sm-3 ">
             <div class="bg-light mb-3">
                 <?php require "../layout/tim-kiem.php"; ?>
                 <!-- Danh mục -->
                 <div id="accordion" role="tablist">
                     <?php require "../layout/danh-muc.php"; ?>
                     <?php require "../layout/top10.php"; ?>
                     
                 </div>
             </div>

         </div>
         <!-- Sản phẩm -->
         <div class="col">
             <h5 class="alert-secondary pt-3 pb-3 pl-sm-4 shadow-sm text-center text-white bg-primary b-r5">
                 <?= $title_site ?></h5>

             <div class="row">
                 <?php
                  foreach ($items as $item) :
                        extract($item);
                        if ($don_gia > 0) {
                            $percent_discount = number_format($giam_gia / $don_gia * 100);
                        } else {
                            $percent_discount = 0;
                        }

                    ?>
                 <div class="col-12 col-md-6 col-lg-4 mt-3">
                     <div class="card text-center product-card bg-white pb-2">
                         <div class="product-badge text-white bg-success">
                             <?= $giam_gia == 0 ? '0%' : '-' . $percent_discount . '%' ?>
                         </div>
                         <a class="product-thumb" href="<?= $SITE_URL . '/hang-hoa/chi-tiet.php?ma_hh=' . $ma_hh ?>"
                             data-abc="true">
                             <img class="card-img-top product-img object-fit-contain"
                                 src="<?= $UPLOAD_URL . '/products/' . $hinh ?>" alt="Ảnh sản phẩm">
                         </a>
                         <div class="card-body p-0 pt-3 px-2">
                             <h3 class="product-title mh-60">
                                 <a href="<?= $SITE_URL . '/hang-hoa/chi-tiet.php?ma_hh=' . $ma_hh ?>">
                                     <?= $ten_hh ?>
                                 </a>
                             </h3>
                             <div class="product-price">
                                 <div class="col d-flex justify-content-center align-items-center">
                                     <del class="d-block text-muted fz-14"><?= number_format($don_gia, 0, ',') ?>đ</del>
                                     <p class="text-danger font-weight-bold fz-20 d-block ml-3 mb-0">
                                         <?= number_format($don_gia - $giam_gia, 0, ',') ?>đ</p>
                                 </div>
                             </div>
                             <div class="col m-2">
                                 <a href="<?= $SITE_URL . '/hang-hoa/chi-tiet.php?ma_hh=' . $hh['ma_hh'] ?>"
                                     class="button-19">Xem Chi Tiết</a>
                             </div>
                         </div>
                     </div>
                 </div>
                 <?php endforeach; ?>

             </div>
             <div class="row mt-5 justify-content-center">
                 <ul class="pagination">
                     <?php for ($i = 1; $i <= $_SESSION['total_page']; $i++) { ?>

                     <li class="page-item <?= $_SESSION['page'] == $i ? 'active' : '' ?>">
                         <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
                     </li>

                     <?php } ?>

                 </ul>
             </div>
         </div>

     </div>
 </div>
 <style>
.button-19 {
    appearance: button;
    background-color: #3AA6B9;
    border: solid transparent;
    border-radius: 16px;
    border-width: 0 0 4px;
    box-sizing: border-box;
    color: #FFFFFF;
    cursor: pointer;
    display: inline-block;
    font-family: din-round,sans-serif;
    font-size: 15px;
    font-weight: 700;
    letter-spacing: .8px;
    line-height: 20px;
    margin: 0;
    outline: none;
    overflow: visible;
    padding: 13px 5px;
    text-align: center;
    text-transform: uppercase;
    touch-action: manipulation;
    transform: translateZ(0);
    transition: filter .2s;
    user-select: none;
    -webkit-user-select: none;
    vertical-align: middle;
    white-space: nowrap;
    width: 70%;
  }
  
  .button-19:after {
    background-clip: padding-box;
    border: solid transparent;
    background-color: #75C2F6;
    border-radius: 16px;
    border-width: 0 0 4px;
    bottom: -4px;
    content: "";
    left: 0;
    position: absolute;
    right: 0;
    top: 0;
    z-index: -1;
  }
  
  .button-19:main,
  .button-19:focus {
    user-select: auto;
  }
  
  .button-19:hover:not(:disabled) {
    filter: brightness(1.7);
    -webkit-filter: brightness(1.1);
    color : #FFFFFF;
  }
  
  .button-19:disabled {
    cursor: auto;
  }
                             </style>
                             