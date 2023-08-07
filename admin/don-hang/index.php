 <?php
  require_once "../../dao/pdo.php";
  require_once "../../dao/don-hang.php";
  require_once "../../dao/hang-hoa.php";
  require_once "../../dao/don-hang-ct.php";
  require "../../global.php";
  
  check_login();
  
  
  extract($_REQUEST);
  if (exist_param("order_id")) {

    if (exist_param("btn_delete")) {
        try {
          order_detete_by_id($order_id);
            $MESSAGE = "Xóa thành công";
        } catch (Exception $exc) {
            $MESSAGE = "Xóa thất bại";
        }
    } else if (exist_param("btn_delete_all")) {
        try {
            $arr_order_id = $_POST['order_id'];
            order_detete_by_id($arr_order_id);
            $MESSAGE = "Xóa thành công!";
        } catch (Exception $exc) {
            $MESSAGE = "Xóa thất bại!";
        }
       
        $VIEW_NAME = "detail.php";
    }
    else if(exist_param("btn_change_active")){
        if(!empty($_POST)){
          if(isset($_POST['order_id'])){
             $order_id = $_POST['order_id'];
          }
          if(isset($_POST['trang_thai'])){
             $trang_thai = (int)$_POST['trang_thai'];
          }   
          $order = order_select_by_id($_POST['order_id']);
          $orderActive =(int)$order['trang_thai'];
        }
        if($orderActive != 6 &&  (($trang_thai == ($orderActive + 1)) || ($trang_thai == 6) )  ){
            order_change_active($trang_thai, $order_id);
            echo json_encode([
                'status' => 'success'
             ]);
         }else {
            echo json_encode([
                'status' => 'error'
             ]);
         }
         die();
    }
    $items =get_order_detail_by_order($order_id);
    $order = order_select_by_id($order_id);
    if (count($items) == 0) {
        $items = order_selectall();
        $VIEW_NAME = "list.php";
    } else {
        $VIEW_NAME = "detail.php";
    }
} else {
    $items = order_selectall();
    $VIEW_NAME = "list.php";
}

require "../layout.php";