<?php
require '../../global.php';
require '../../dao/don-hang.php';
require '../../dao/don-hang-ct.php';



extract($_REQUEST);

if (exist_param("btn_thanh_toan")) {
    $ma_kh = $_POST['ma_kh'];
    $ho_ten = $_POST['ho_ten'];
    $email = $_POST['email'];
    $sdt = $_POST['sdt'];
    $dia_chi = $_POST['dia_chi'];
    $thanh_toan = $_POST['thanh_toan'];
    $trang_thai = $_POST['trang_thai'];
    $ghi_chu = $_POST['ghi_chu'];
    $size_id = $_POST['size_id'];

    $order = [
        'ma_kh' => $ma_kh,
        'ho_ten' => $ho_ten,
        'email' => $email,
        'sdt' => $sdt,
        'dia_chi' => $dia_chi,
        'thanh_toan' => $thanh_toan,
        'trang_thai' => $trang_thai,
        'ghi_chu' => $ghi_chu
    ];
    $order_id = insert_order($ma_kh,$ho_ten, $email, $sdt, $dia_chi, $thanh_toan, $trang_thai, $ghi_chu);
    $cart = $_SESSION['cart'];
    foreach ($cart as $ma_hh => $item) {
        $ten_hh = $item['ten_hh'];
        $don_gia = $item['don_gia'];
        $so_luong = $item['sl'];
        $size_id = $item['size_id'];

    
        $order_detail = [
            'order_id' => $order_id,
            'ma_hh' => $ma_hh,
            'ten_hh' => $ten_hh,
            'don_gia' => $don_gia,
            'so_luong' => $so_luong,
            'size_id' => $size_id
        ];
    
        insert_order_detail($order_id, $ma_hh, $ten_hh, $don_gia, $so_luong, $size_id);
    }
    
    unset($_SESSION['cart']);
    unset($_SESSION['total_cart']);
    header("Location: http://localhost/PHPSource/RightStore/site/cart/order.php");
    
    exit;
} else {
    $MESSAGE = "error";
}
$VIEW_NAME = "cart.php?form_invoice";
?>
