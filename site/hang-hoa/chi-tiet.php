<?php
require '../../global.php';
require '../../dao/hang-hoa.php';
require '../../dao/binh-luan.php';
require '../../dao/size.php';

extract($_REQUEST);

$hang_hoa = hang_hoa_select_by_id($ma_hh);
extract($hang_hoa);

hang_hoa_tang_so_luot_xem($ma_hh);

$hh_cung_loai = hang_hoa_select_by_loai($ma_loai);

if (exist_param("noi_dung")) {
    $ma_kh = $_SESSION['user']['ma_kh'];
    $ngay_bl = date_format(date_create(), 'Y-m-d');
    binh_luan_insert($ma_kh, $ma_hh, $noi_dung, $ngay_bl, $rating);
}
$binh_luan_list = binh_luan_select_by_hang_hoa($ma_hh, 5);

$VIEW_NAME = "hang-hoa/chi-tiet-ui.php";
require '../layout.php';