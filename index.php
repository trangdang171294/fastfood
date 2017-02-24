<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 2/17/2017
 * Time: 9:28 PM
 */
?>

<!doctype html>

<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <!--====== USEFULL META ======-->
    <meta charset="UTF-8">

    <!--====== TITLE TAG ======-->
    <title>Fast food</title>
    <!--====== STYLESHEETS =======-->
    <!--<link rel="stylesheet" href="css/normalize.css">-->
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/pogo-slider.css"><!-- slider-->

    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/magnific-popup.css"> <!--reponsive popup-->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">


    <!--====== MAIN STYLESHEETS ======-->
    <link href="css/responsive.css" rel="stylesheet"> <!-- reponsive-->

    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/product.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script> <!--search-->

</head>
<?php
include_once('model/database.php');
include_once('model/m_mon_an.php');
include_once('controller/c_mon_an.php');
$MonanController = new C_mon_an();
?>
<body>

<div class="header">

    <?php
    include_once('site/header.php')
    ?>
</div>



<div class="noidung">

    <?php
    $MonanController->Hien_thi_mon_an();
    ?>

</div>

<div>
    <?php include_once('site/footer.php') ?>
</div>


<!--====== SCRIPTS JS ======-->
<script src="js/vendor/jquery-1.12.4.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>

<!--====== PLUGINS JS ======-->
<script src="js/vendor/jquery.easing.1.3.js"></script> <!--button back to top-->

<script src="js/jquery.pogo-slider.js"></script>

<!--button back to stop-->
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/datepicker.min.js"></script>
<script src="js/timepicker.min.js"></script>

<script src="js/slick.js"></script>
<script src="js/jquery.sticky.js"></script> <!--menu wrapper-->
<!--===== ACTIVE JS=====-->
<script src="js/main.js"></script>
<!--slick slider-->
<script type="text/javascript">
    $(document).on('ready', function () {
        $("#center").slick({
            dots: true,
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 3
        });

    });
</script>


</body>

</html>
