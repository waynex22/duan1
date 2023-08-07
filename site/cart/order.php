<?php
require_once "../../dao/pdo.php";
require_once "../../dao/don-hang.php";
require_once "../../dao/hang-hoa.php";
require_once "../../dao/don-hang-ct.php";
require "../../global.php";

check_login();


extract($_REQUEST);
if (exist_param("order_id")) {
    $detailOrder = get_order_detail_by_order($order_id);
    $order = order_select_by_id($order_id);
    if (count($detailOrder) == 0) {
        $VIEW_NAME = "order-ui.php";
    } else {
        $VIEW_NAME = "order-detail.php";
    }
} else {
    $ma_kh = $_SESSION['user']['ma_kh'];
    $orders = get_orders_by_user($ma_kh);
    $VIEW_NAME = "order-ui.php";
}
require '../layout.php';