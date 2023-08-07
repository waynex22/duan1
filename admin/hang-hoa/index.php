<?php
require_once "../../dao/pdo.php";
require_once "../../dao/loai.php";
require_once "../../dao/hang-hoa.php";
require_once "../../dao/size.php";
require "../../global.php";

check_login();



extract($_REQUEST);
if (exist_param("btn_list")) {
    $items = hang_hoa_select_page('ma_hh', 10);
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_insert")) {
    $ten_hh = $_POST['ten_hh'];
    $don_gia = $_POST['don_gia'];
    $giam_gia = $_POST['giam_gia'];
    $ma_loai = $_POST['ma_loai'];
    $dac_biet = $_POST['dac_biet'];
    $so_luot_xem = $_POST['so_luot_xem'];
    $mo_ta = $_POST['mo_ta'];
    $ngay_nhap = $_POST['ngay_nhap'];
    $hinh = save_file('hinh', "$UPLOAD_URL/products/");
    
    $ma_hh = hang_hoa_insert($ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet, $so_luot_xem, $ngay_nhap, $mo_ta);
    $sizes = size_select_all();
    foreach ($sizes as $size) {
        $size_id = $size['size_id'];
        $quantity_in_stock = 0;
        hang_hoa_variants_insert($ma_hh, $size_id, $quantity_in_stock);
    }
    $items = hang_hoa_select_page('ma_hh', 10);
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_edit")) {

    $ma_hh = $_REQUEST['ma_hh'];
    $hang_hoa_info = hang_hoa_select_by_id($ma_hh);
    extract($hang_hoa_info);

    $loai_hang = loai_select_all('ASC');

    $VIEW_NAME = "edit.php";
} else if (exist_param("btn_delete")) {

    $ma_hh = $_REQUEST['ma_hh'];
    hang_hoa_delete($ma_hh);
    $items = hang_hoa_select_page('ma_hh', 10);
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_delete_all")) {
    try {
        $arr_ma_hh = $_POST['ma_hh'];
        hang_hoa_delete($arr_ma_hh);
        $MESSAGE = "Xóa thành công!";
    } catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại!";
    }
    $items = hang_hoa_select_page('ma_hh', 10);
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_update")) {

    $ten_hh = $_POST['ten_hh'];
    $don_gia = $_POST['don_gia'];
    $giam_gia = $_POST['giam_gia'];
    $ma_loai = $_POST['ma_loai'];
    $dac_biet = $_POST['dac_biet'];
    $so_luot_xem = $_POST['so_luot_xem'];
    $mo_ta = $_POST['mo_ta'];
    $ngay_nhap = $_POST['ngay_nhap'];
    $ma_hh = $_POST['ma_hh'];
    $up_hinh = save_file("up_hinh", "$UPLOAD_URL/products/");
    $hinh = strlen($up_hinh) > 0 ? $up_hinh : $hinh;
    
    hang_hoa_update($ma_hh, $ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet, $so_luot_xem, $ngay_nhap, $mo_ta);
    var_dump($_FILES['sub_images']);
    if (!empty($_FILES['sub_images']['name'])) {
        $sub_images = $_FILES['sub_images'];
    
        foreach ($sub_images['tmp_name'] as $index => $tmp_name) {
            $sub_image_url = save_file($tmp_name, "$UPLOAD_URL/sub_images/");
            if (!empty($sub_image_url)) {
                insert_sub_image($ma_hh, $sub_image_url);
               
            }
        }
        
    }
    var_dump($sub_image_url);
    $items = hang_hoa_select_page('ma_hh', 10);
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_kho")) {
    $VIEW_NAME = "kho-hang.php";
}
else if (exist_param("btn_edit_sl")) {

    $ma_hh = $_REQUEST['ma_hh'];
   
    $VIEW_NAME = "update-sl.php";
}else if (exist_param("btn_update-sl")) {
    $ma_hh = $_POST['ma_hh'];
    $size_ids = $_POST['size_id'];
    $quantitys = $_POST['quantity_in_stock'];

    foreach ($size_ids as $index => $size_id) {
        $quantity_in_stock = $quantitys[$index];
        hang_hoa_variants_update($ma_hh, $size_id, $quantity_in_stock);
    }
    $VIEW_NAME = "kho-hang.php";
} else {
    
    $loai_hang = loai_select_all('ASC');
    $VIEW_NAME = "add.php";
}
require "../layout.php";