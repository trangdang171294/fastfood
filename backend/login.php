<?php
/**
 * Created by PhpStorm.
 * User: Minh
 * Date: 11/6/2016
 * Time: 12:30 AM
 */

include_once ('Model/database.php');
include_once('Model/database.php');
include_once('Model/M_Login.php');
include_once('Controller/LoginController.php');
$LoginController = new LoginController();
if (isset($_POST['btnLogin'])) {
    echo $LoginController->actionLogin();
}
?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Login hệ thống</title>
    <link rel="stylesheet" href="css/login-style.css">
</head>
<body>
<div class="container">
    <section id="content">
        <form action="" method="post">
            <h1>Login Form</h1>
            <div>
                <input type="text" placeholder="Username" name="txtUser" id="txtUser" required=""  />
            </div>
            <div>
                <input type="password" placeholder="Password" name="txtpass" id="txtpass" required=""  />
            </div>
            <div>
                <input type="submit" name="btnLogin" id="btnLogin" value="Log in" />
                <a href="#">Lost your password?</a>
                <a href="#">Register</a>
            </div>
        </form><!-- form -->
        <div class="button">
            <a href="#">Download source file</a>
        </div><!-- button -->
    </section><!-- content -->
</div><!-- container -->
</body>
</html>

