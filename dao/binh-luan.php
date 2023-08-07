<?php
require_once 'pdo.php';
function binh_luan_insert($ma_kh, $ma_hh, $noi_dung, $ngay_bl, $rating)
{
    $sql = "INSERT INTO binh_luan(ma_kh, ma_hh, noi_dung, ngay_bl, rating) VALUES (?,?,?,?,?)";

    pdo_execute($sql, $ma_kh, $ma_hh, $noi_dung, $ngay_bl, $rating);
}
function binh_luan_update($ma_bl, $ma_kh, $ma_hh, $noi_dung, $ngay_bl)
{
    $sql = "UPDATE binh_luan SET ma_kh=?,ma_hh=?,noi_dung=?,ngay_bl=? WHERE ma_bl=?";
    pdo_execute($sql, $ma_kh, $ma_hh, $noi_dung, $ngay_bl, $ma_bl);
}
function binh_luan_delete($ma_bl)
{
    $sql = "DELETE FROM binh_luan WHERE ma_bl=?";
    if (is_array($ma_bl)) {
        foreach ($ma_bl as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $ma_bl);
    }
}
function binh_luan_select_all()
{
    $sql = "SELECT * FROM binh_luan bl ORDER BY ngay_bl DESC";
    return pdo_query($sql);
}
function binh_luan_select_by_id($ma_bl)
{
    $sql = "SELECT * FROM binh_luan WHERE ma_bl=?";
    return pdo_query_one($sql, $ma_bl);
}
function binh_luan_exist($ma_bl)
{
    $sql = "SELECT count(*) FROM binh_luan WHERE ma_bl=?";
    return pdo_query_value($sql, $ma_bl) > 0;
}
function binh_luan_select_by_hang_hoa($ma_hh, $limit = 10)
{
    if (!isset($_REQUEST['page'])) {
        $_SESSION['page'] = 1;
    }
    if (!isset($_SESSION['total_page'])) {
        $_SESSION['total_page'] = 1;
    }
    $query = "SELECT count(*) FROM binh_luan b 
    JOIN hang_hoa h ON h.ma_hh = b.ma_hh 
    WHERE b.ma_hh = $ma_hh ORDER BY ma_bl DESC";

    $_SESSION['total_bl'] = pdo_query_value($query);
    if (exist_param("page")) {
        $_SESSION['page'] = $_REQUEST['page'];
    }
    $begin = ($_SESSION['page'] - 1) * $limit;
    $_SESSION['total_page'] = ceil($_SESSION['total_bl'] / $limit);
    $sql = "SELECT b.*, h.ten_hh, k.ho_ten, k.hinh FROM binh_luan b 
    JOIN hang_hoa h ON h.ma_hh = b.ma_hh 
    JOIN khach_hang k ON k.ma_kh =b.ma_kh WHERE b.ma_hh=? ORDER BY ma_bl DESC LIMIT $begin,$limit";
    return pdo_query($sql, $ma_hh);
}