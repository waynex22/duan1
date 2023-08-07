<?php

check_login();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Xstore- Admin</title>
    <link rel="icon" href="<?= $CONTENT_URL ?>/images/logo.png" type="image/gif" sizes="16x16">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/bootstrap.min.css" type="text/css">
    <!-- Font awesome -->
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/all.min.css" type="text/css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Custom -->
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/dashboard.css" type="text/css">

</head>

<body>
    <!-- Page Preloader -->
    <div class="wrapper">
        <!-- -===========================Menu ===================-->
        <?php
        require "menu.php";
        ?>
        <div id="body" class="active">
            <!-- navbar navigation component -->
            
            <div class="content">

                <?php include $VIEW_NAME; ?>

            </div>
        </div>
    </div>



    <!-- Js -->
    <script src="<?= $CONTENT_URL ?>/js/jquery-3.6.0.min.js"></script>
    <script src="<?= $CONTENT_URL ?>/js/bootstrap.bundle.min.js"></script>
    <script src="<?= $CONTENT_URL ?>/js/jquery.validate.js"></script>
    <script src="<?= $CONTENT_URL ?>/js/main.js"></script>
    <script src="<?= $CONTENT_URL ?>/js/validation.js"></script>


    <script>
    // =============Check delete=================//
    function checkDelete() {
        var x = confirm("Bạn chắc muốn xóa chứ?")
        if (x) {
            return true;
        } else {
            return false;
        }

    }
    // =============Auto resize textarea=================//

    function expandTextarea(id) {
        document.getElementById(id).addEventListener('keyup', function() {
            this.style.overflow = 'hidden';
            this.style.minHeight = '106.8px';
            this.style.height = 0;
            this.style.height = this.scrollHeight + 'px';
        }, false);
    }
    expandTextarea('txtarea');
    </script>


    <!-- Toast message -->
    <script>
    $(document).ready(function() {
        $('.toast').toast('show');
    });
    </script>

    <!--  chọn và bỏ chọn các loại trên trang list.php. -->
    <script>
    $(document).ready(function() {
        var checkboxItem = ":checkbox";
        $("#select-all").click(function() {
            if (this.checked) {
                $(checkboxItem).each(function() {
                    this.checked = true;
                });
            } else {
                $(checkboxItem).each(function() {
                    this.checked = false;
                });
            }
        });

        $("#deleteAll").click(function() {
            if ($(":checked").length === 0) {
                alert("Vui lòng chọn ít nhất một mục!");
                return false;
            }
        })
    });
    </script>
</body>

</html>