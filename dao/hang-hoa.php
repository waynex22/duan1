<?php
require_once 'pdo.php';
function hang_hoa_insert($ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet, $so_luot_xem, $ngay_nhap, $mo_ta)
{
    $sql = "INSERT INTO hang_hoa(ten_hh, don_gia, giam_gia, hinh, ma_loai, dac_biet, so_luot_xem, ngay_nhap, mo_ta) VALUES (?,?,?,?,?,?,?,?,?)";
    return pdo_query_get_lastId($sql, $ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet == 1, $so_luot_xem, $ngay_nhap, $mo_ta);
}
function hang_hoa_update($ma_hh, $ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet, $so_luot_xem, $ngay_nhap, $mo_ta)
{
    $sql = "UPDATE hang_hoa SET ten_hh=?, don_gia=?, giam_gia=?, hinh=?, ma_loai=?, dac_biet=?, so_luot_xem=?, ngay_nhap=?, mo_ta=? WHERE ma_hh=?";
    pdo_execute($sql, $ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet == 1, $so_luot_xem, $ngay_nhap, $mo_ta, $ma_hh);
}
function hang_hoa_delete($ma_hh)
{
    $sql = "DELETE FROM hang_hoa WHERE ma_hh=?";
    if (is_array($ma_hh)) {
        foreach ($ma_hh as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $ma_hh);
    }
}
function hang_hoa_select_all()
{
    $sql = "SELECT * FROM hang_hoa ORDER BY ma_hh desc";
    return pdo_query($sql);
}
function hang_hoa_select_by_id($ma_hh)
{
    $sql = "SELECT * FROM hang_hoa WHERE ma_hh=?";
    return pdo_query_one($sql, $ma_hh);
}
function hang_hoa_exist($ma_hh)
{
    $sql = "SELECT count(*) FROM hang_hoa WHERE ma_hh=?";
    return pdo_query_value($sql, $ma_hh) > 0;
}
function hang_hoa_select_top5_view()
{
    $sql = "SELECT * FROM `hang_hoa` ORDER BY so_luot_xem DESC LIMIT 5";
    return pdo_query($sql) ;
}
function hang_hoa_exist_add($ten_hh)
{
    $sql = "SELECT count(*) FROM hang_hoa WHERE ten_hh=?";
    return pdo_query_value($sql, $ten_hh) > 0;
}
function hang_hoa_exist_update($ma_hh, $ten_hh)
{
    $sql = "SELECT count(*) FROM hang_hoa WHERE ma_hh!=? and ten_hh=?";
    return pdo_query_value($sql, $ma_hh, $ten_hh) > 0;
}

function hang_hoa_tang_so_luot_xem($ma_hh)
{
    $sql = "UPDATE hang_hoa SET so_luot_xem = so_luot_xem + 1 WHERE ma_hh=?";
    pdo_execute($sql, $ma_hh);
}
function hang_hoa_select_top10()
{
    $sql = "SELECT * FROM hang_hoa WHERE so_luot_xem > 0 ORDER BY so_luot_xem DESC LIMIT 0, 13";
    return pdo_query($sql);
}
function hang_hoa_select_dac_biet()
{
    $sql = "SELECT * FROM hang_hoa WHERE dac_biet=1";
    return pdo_query($sql);
}
function hang_hoa_select_by_loai($ma_loai)
{
    $sql = "SELECT * FROM hang_hoa WHERE ma_loai=?";
    return pdo_query($sql, $ma_loai);
}
function hang_hoa_select_keyword($keyword)
{
    $sql = "SELECT * FROM hang_hoa hh "
        . " JOIN loai lo ON lo.ma_loai=hh.ma_loai "
        . " WHERE ten_hh LIKE ? OR ten_loai LIKE ?";
    return pdo_query($sql, '%' . $keyword . '%', '%' . $keyword . '%');
}
function hang_hoa_variants_insert($ma_hh,$size_id, $quanlity_in_stock){
    $sql = "INSERT INTO product_variants (ma_hh, size_id, quantity_in_stock) VALUES (?,?,?)";
    pdo_execute($sql,$ma_hh,$size_id, $quanlity_in_stock);
}
function hang_hoa_variants_selecte_by_id($id){
    $sql = "SELECT * FROM product_variants WHERE id=?";
    return pdo_query_one($sql, $id);
} 
function hang_hoa_variants_get_by_ma_hh($ma_hh){
    $sql = "SELECT * FROM `product_variants` WHERE `ma_hh` = ? ORDER BY `product_variants`.`ma_hh` DESC";
    return pdo_query($sql, $ma_hh);
 }
function hang_hoa_variants_get_quantity_by_ma_hh($quantity_in_stock){
    $sql = "SELECT * FROM `product_variants` WHERE `ma_hh` = ? ORDER BY `product_variants`.`quantity_in_stock` DESC";
    return pdo_query($sql, $quantity_in_stock);
 }
function hang_hoa_variants_update($ma_hh, $size_id, $quantity_in_stock){
    $sql = "UPDATE product_variants SET quantity_in_stock = ? WHERE ma_hh = ? AND size_id = ?";
    pdo_execute($sql ,$quantity_in_stock, $ma_hh, $size_id);
 }
 function insert_sub_image($ma_hh, $sub_image_url){
    $sql = "INSERT INTO sub_images (ma_hh, sub_image_url ) VALUES (?,?)";
    pdo_execute($sql ,$ma_hh, $sub_image_url);
 }
function hang_hoa_select_page($order, $limit)
{
    if (!isset($_REQUEST['page'])) {
        $_SESSION['page'] = 1;
    }
    if (!isset($_SESSION['total_page'])) {
        $_SESSION['total_page'] = 1;
    }
    $_SESSION['total_pro'] = pdo_query_value("SELECT count(*) FROM hang_hoa");
    if (exist_param("page")) {
        $_SESSION['page'] = $_REQUEST['page'];
    }
    $begin = ($_SESSION['page'] - 1) * $limit;
    $_SESSION['total_page'] = ceil($_SESSION['total_pro'] / $limit);
    $sql = "SELECT * FROM hang_hoa ORDER BY $order DESC LIMIT $begin,$limit";
    return pdo_query($sql);
}