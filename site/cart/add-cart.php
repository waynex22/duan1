<?php
require '../../global.php';
require '../../dao/hang-hoa.php';

extract($_REQUEST);

if (isset($id) && $id > 0 ) {
    $items = hang_hoa_select_by_id($id);
    $total = 0;
    extract($items);
    $size_id = $_GET['size_id'];
    if (isset($_SESSION['cart'])) {

        if (isset($_SESSION['cart'][$id]['sl'])) {
            $_SESSION['cart'][$id]['sl'] += 1;
        } else {
            $_SESSION['cart'][$id]['sl'] = 1;
        }
        $_SESSION['cart'][$id]['ten_hh'] = $ten_hh;
        $_SESSION['cart'][$id]['don_gia'] = $don_gia;
        $_SESSION['cart'][$id]['giam_gia'] = $giam_gia;
        $_SESSION['cart'][$id]['size_id'] = $size_id;
        foreach ($_SESSION['cart'] as $key => $value) {
            $total += $_SESSION['cart'][$key]['sl'];
        }
        
    } else {
        $_SESSION['cart'][$id]['sl'] = 1;
        $_SESSION['cart'][$id]['ten_hh'] = $ten_hh;
        $_SESSION['cart'][$id]['don_gia'] = $don_gia;
        $_SESSION['cart'][$id]['giam_gia'] = $giam_gia;
        $_SESSION['cart'][$id]['size_id'] = $size_id;
        foreach ($_SESSION['cart'] as $key => $value) {
            $total += $_SESSION['cart'][$key]['sl'];
        }
    }
    $_SESSION['total_cart'] = $total;
    header("location:" . $SITE_URL . "/cart/list-cart.php");
}