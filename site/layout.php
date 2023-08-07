<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>RightStore</title>
    <link rel="icon" href="<?= $CONTENT_URL ?>/images/logo.png" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/all.min.css" type="text/css">
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/slick.css" type="text/css">
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/slick-theme.css" type="text/css">
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/style.css" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head> 

<body>

    <header class="">
        <?php require "../layout/menu.php"; ?>
    </header>


    <main>
        <?php include $VIEW_NAME ?>
    </main>

    <footer class="text-light mt-5">
        <?php require "../layout/footer.php"; ?>
    </footer>

    <script src="<?= $CONTENT_URL ?>/js/jquery-3.6.0.min.js"></script>
    <script src="<?= $CONTENT_URL ?>/js/bootstrap.min.js"></script>
    <script src="<?= $CONTENT_URL ?>/js/bootstrap.bundle.min.js"></script>
    <script src="<?= $CONTENT_URL ?>/js/slick.min.js"></script>
    <script src="<?= $CONTENT_URL ?>/js/jquery.validate.js"></script>
    <script src="<?= $CONTENT_URL ?>/js/main.js"></script>
    <script src="<?= $CONTENT_URL ?>/js/validation.js"></script>
	<script>
		function addToCart(productId) {
  $.ajax({
    type: "POST",
    url: "",
    data: { id: productId },
    success: function (response) {
      $('#cart-count').text(response);
    },
    error: function (xhr, status, error) {
      console.log("Error:", error);
    }
  });
}

addToCart(productId);
	</script>
</body>
</html>