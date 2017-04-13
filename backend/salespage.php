<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 4/13/2017
 * Time: 8:48 AM
 */
session_start();
if(isset($_SESSION["curentAdmin"]))
{
    unset($_SESSION["curentAdmin"]);
}
if(!isset( $_SESSION["curentsalestaff"]))
{
    header("location:login2.php");
}
else
    if(!isset( $_SESSION["curentsalestaff"]))
    {
        header("location:login2.php");
    }
if(isset($_REQUEST['action']) and $_REQUEST["action"]== 'logout' )
{
    unset($_SESSION["username"]);
    unset($_SESSION["curentsalestaff"]);
    header("location:login2.php");
}
?>

<h1>CHÀO:<?php echo $_SESSION["username"]?> đến với trang bán hàng</h1>
<!DOCTYPE HTML>
<html>
<head>
    <title>Fast Food Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link href="css/salespage_css.css" rel="stylesheet">

    <!-- Graph CSS -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- jQuery -->
    <link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
    <!-- lined-icons -->
    <link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- //lined-icons -->
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!---js chart-->
    <!--
        <script type="text/javascript" src="js/raphael.js"></script>
        <script type="text/javascript" src="js/morris.js"></script>
        <script type="text/javascript" src="js/morris-data.js"></script>-->


    <!--//skycons-icons-->
</head>
<body>

<script src="js/bootstrap.min.js"></script>
</body>
</html>
