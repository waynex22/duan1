<?php
require '../../global.php';
extract($_REQUEST);
if (empty($_SESSION['cart'])) {
    header("location:" . $SITE_URL . "/cart/list-cart.php");
} else {
    if ($act == "deleteAll") {
        unset($_SESSION['cart']);
        unset($_SESSION['total_cart']);
        header("location:" . $SITE_URL . "/cart/list-cart.php");
    } else if ($act == "delete") {
        if (array_key_exists($id, $_SESSION['cart'])) {
            $_SESSION['total_cart'] -=   $_SESSION['cart'][$id]['sl'];
            unset($_SESSION['cart'][$id]);
            header("location:" . $SITE_URL . "/cart/list-cart.php");
        }
    } else if ($act == "update_sl") {

        foreach ($_SESSION['cart'] as $key => $value) {
            if ($key == $_POST['ma_hh']) {
                $_SESSION['cart'][$key]['sl'] = $_POST['update_sl'];
            }
        }
        header("location:" . $SITE_URL . "/cart/list-cart.php");
    } else {
        header("location:" . $SITE_URL . "/cart/list-cart.php");
    }
}
