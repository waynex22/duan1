<?php
require_once "../../global.php";
require "../../dao/size.php";
if (isset($_GET['act'])) {

    if ($_GET['act'] == 'add') {
        $result = size_exist_size_add($_GET['size']);
        var_dump($_GET['size']);
        if ($result == true) {
            echo json_encode(false);
        } else {
            echo json_encode(true);
        }
    }
    if ($_GET['act'] == 'update') {
        // var_dump($_GET['size_id']);
        $result = size_exist_size_update($_GET['size_id'], $_GET['size']);
        if ($result == true) {
            echo json_encode(false);
        } else {
            echo json_encode(true);
        }
    }
}