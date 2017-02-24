<?php

/**
 * Created by PhpStorm.
 * User: Minh
 * Date: 11/5/2016
 * Time: 4:04 PM
 */
//include_once("Model/M_Login.php");

class LoginController
{
    var $login = null;

    public function __construct()
    {
        $this->login = new M_Login();
    }

    public function actionLogin()
    {
//        $thongbao = "";
        if ($_POST) {
            if (isset($_POST['btnLogin']) AND $_POST['btnLogin'] == "Log in") {
                $txtUser = $_POST['txtUser'];
                $txtpass = $_POST['txtpass'];
                $ketqua = $this->login->getUser($txtUser, $txtpass);
                if ($ketqua) {
                    session_start();

                    $_SESSION['username'] = $txtUser;
                    $_SESSION['fullname']=$ketqua->fullname;
                    header("location:index.php");
                } else {
                    echo '<script type="text/javascript">alert("Username or Password sai");</script>';
                }
            }
        }
    }
}