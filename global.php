<?php
session_start();
$ROOT_URL = "http://localhost/PHPSource/RightStore";
$CONTENT_URL = "$ROOT_URL/content";
$ADMIN_URL = "$ROOT_URL/admin";
$SITE_URL = "$ROOT_URL/site";
$SL_PER_PAGE = 10;


$UPLOAD_URL = "../../uploaded";


$VIEW_NAME = 'index.php';
$MESSAGE = '';

function exist_param($fieldname)
{
    return array_key_exists($fieldname, $_REQUEST);
}

function save_file($fieldname, $target_dir)
{
    if (isset($_FILES[$fieldname]) && $_FILES[$fieldname]['error'] === UPLOAD_ERR_OK) {
        $file_uploaded = $_FILES[$fieldname];
        $file_name = basename($file_uploaded['name']);
        $target_path = $target_dir . $file_name;
        if (move_uploaded_file($file_uploaded['tmp_name'], $target_path)) {
            return $file_name;
        } else {
            return null;
        }
    } else {
        return null;
    }
}


function add_cookie($name, $value, $day)
{
    setcookie($name, $value, time() + (86400 * $day), "/");
}

function delete_cookie($name)
{
    add_cookie($name, "", -1);
}


function get_cookie($name)
{
    return $_COOKIE[$name] ?? '';
}
function check_login()
{
    global $SITE_URL;
    if (isset($_SESSION['user'])) {
        if ($_SESSION['user']['vai_tro'] == 1) {
            return;
        }
        if (strpos($_SERVER['REQUEST_URI'], '/admin/') == false) {
            return;
        }
    }

    $_SESSION['name_page'] = 'trang_chu';
    header("location: $SITE_URL/tai-khoan/dang-nhap.php");
    die;
}