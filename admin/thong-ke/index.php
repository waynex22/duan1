<?php
require_once "../../global.php";
require_once "../../dao/thong-ke.php";
require_once "../../dao/hang-hoa.php";
//--------------------------------//

check_login();
if (exist_param("chart")) {
    $VIEW_NAME = "chart.php";
}else if(exist_param("chart2")) {
    $hang_hoa = hang_hoa_select_top5_view();
    $VIEW_NAME = "chart2.php";
}else {
    $VIEW_NAME = "list.php";
}
$items = thong_ke_hang_hoa();
require "../layout.php";