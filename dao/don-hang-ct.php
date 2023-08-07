<?php 
require_once 'pdo.php';

function insert_order_detail($order_id, $ma_hh, $ten_hh, $don_gia, $so_luong, $size_id)
{
    $sql = "INSERT INTO don_hang_ct(order_id, ma_hh, ten_hh, don_gia, so_luong, size_id)VALUES (?, ?, ?, ?, ?, ?)";       
    pdo_execute($sql, $order_id, $ma_hh, $ten_hh, $don_gia, $so_luong, $size_id);
}
function get_order_detail_by_order($order_detail) {
    $sql = "SELECT `don_hang_ct`.*, `hang_hoa`.`ten_hh` AS `ten_hh`, `hang_hoa`.`don_gia`, `hang_hoa`.`hinh`
            FROM `don_hang_ct`
            JOIN `hang_hoa` 
            WHERE `hang_hoa`.`ma_hh` = `don_hang_ct`.`ma_hh`
            AND `don_hang_ct`.`order_id` = ?";
    
    return pdo_query($sql, $order_detail);
}
function order_detail_delete($order_id){
    $sql = "DELETE FROM `don_hang_ct` WHERE `order_id` = ?";
    pdo_execute($sql, $order_id);
}

?>