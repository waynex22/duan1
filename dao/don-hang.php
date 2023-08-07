<?php 
require_once 'pdo.php';

function insert_order($ma_kh,$ho_ten, $email, $sdt, $dia_chi, $thanh_toan, $trang_thai, $ghi_chu)
{
    $sql = "INSERT INTO don_hang (ma_kh, ho_ten, email, sdt, dia_chi, thanh_toan, trang_thai, ghi_chu)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
       return pdo_query_get_lastId($sql,$ma_kh, $ho_ten, $email, $sdt, $dia_chi, $thanh_toan, $trang_thai, $ghi_chu);      
}
function order_select_by_user_id($ma_kh){
    $sql = "SELECT * FROM `don_hang` WHERE `ma_kh` = ? ORDER BY `don_hang`.`order_id` DESC";
    return pdo_query($sql, $ma_kh);
 }
 function order_select_by_id($order_id){
    $sql = "SELECT * FROM `don_hang` WHERE `order_id` = ? ORDER BY `don_hang`.`order_id` DESC";
   return pdo_query_one($sql, $order_id);
}
 function order_detete_by_id($order_id){
    $sql = "DELETE FROM don_hang WHERE order_id=?";
    if (is_array($order_id)) {
        foreach ($order_id as $order_id) {
            pdo_execute($sql, $order_id);
        }
    } else {
        pdo_execute($sql, $order_id);
    }
}
function order_selectall(){
    $sql = "SELECT * FROM `don_hang`  ORDER BY `don_hang`.`order_id` DESC";
    return pdo_query($sql);
}
function get_orders_by_user($ma_kh){
    $sql = "SELECT * FROM don_hang WHERE ma_kh=?";
    return pdo_query($sql, $ma_kh);
}
function order_change_active($trang_thai, $order_id){
    $sql = "UPDATE `don_hang` SET `trang_thai` = ? WHERE `don_hang`.`order_id` = ?";
    pdo_execute($sql, $trang_thai, $order_id);
}
function order_update_total($don_gia, $order_id){
    $sql = "UPDATE `don_hang` SET `don_gia` = ? WHERE `don_hang`.`order_id` = ?";
    pdo_execute($sql,$don_gia, $order_id);
}
    
?>