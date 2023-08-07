<?php
require_once "../../dao/pdo.php";
require_once "../../dao/size.php";
require "../../global.php";
check_login();


// chech_login();

extract($_REQUEST);
if (exist_param("btn_list")) {

    $items = size_select_all();
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_insert")) {
    size_insert($size);
    $items = size_select_all();
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_edit")) {
    $size_id = $_REQUEST['size_id'];
    $size_info = size_select_by_id($size_id);
    extract($size_info);
    $items = size_select_all();
    $VIEW_NAME = "edit.php";
} else if (exist_param("btn_delete")) {

    $size_id = $_REQUEST['size_id'];
    size_delete($size_id);
    $items = size_select_all();
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_delete_all")) {
    try {
        $arr_size_id = $_POST['size_id'];
        size_delete($arr_size_id);
        $MESSAGE = "Xóa thành công!";
    } catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại!";
    }
    $items = size_select_all();
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_update")) {

    $size_id = $_POST['size_id'];
    $size = $_POST['size'];
    size_update($size_id, $size);
    $items = size_select_all();
    $VIEW_NAME = "list.php";
} else {
    $VIEW_NAME = "add.php";
}
require "../layout.php";