<div class="container-fluid p-5">
     <div class="row">
         <div class="col-md-12">
             <div class="owl-carousel">


                 <?php foreach ($hh_cung_loai as $hh_cl) :

                        if ($don_gia > 0) {
                            $p_d_hh_cl = number_format($hh_cl['giam_gia'] / $hh_cl['don_gia'] * 100);
                        } else {
                            $p_d_hh_cl = 0;
                        }

                    ?>
                 <div class="product-card">
                     <div class="product-badge text-white bg-success">
                         <?= $hh_cl['giam_gia'] == 0 ? '' : '-' . $p_d_hh_cl . '%' ?>
                     </div>
                     <a class="product-thumb"
                         href="<?= $SITE_URL . '/hang-hoa/chi-tiet.php?ma_hh=' . $hh_cl['ma_hh'] ?>"
                         data-abc="true"><img class="product-img"
                             src="<?= $UPLOAD_URL . "/products/" . $hh_cl['hinh'] ?>">
                     </a>
                     <div class="card-body p-0 pt-3">
                         <h3 class="product-title mh-60">
                             <a href="<?= $SITE_URL . '/hang-hoa/chi-tiet.php?ma_hh=' . $hh_cl['ma_hh'] ?>"
                                 data-abc="true"><?= $hh_cl['ten_hh'] ?></a>
                         </h3>
                         <div class="product-price">
                             <div class="col d-flex justify-content-center align-items-center">
                                 <del class="d-block fz-14"><?= number_format($hh_cl['don_gia'], 0, ',') ?>đ</del>
                                 <p class="text-danger font-weight-bold fz-20 d-block ml-3 mb-0">
                                     <?= number_format($hh_cl['don_gia'] - $hh_cl['giam_gia'], 0, ',') ?>đ</p>
                             </div>
                         </div>
                     </div>
                 </div>
                 <?php endforeach; ?>
             </div>
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
    background-color: #75C2F6	;
    border: solid transparent;
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
