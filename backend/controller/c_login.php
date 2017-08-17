<?php

/**
 * Created by PhpStorm.
 * User: HP
 * Date: 3/7/2017
 * Time: 1:10 PM
 * cookies luu TT ve phia client
 * session luu o phia server
 */
class c_login
{
    public $loginController;
    var $message=null;
    public function __construct()
    {
        $this->loginController=new m_login();
    }

    public function hien_user()
    {
        $cur_user=  $_SESSION["username"];
        $users=$this->loginController->getAlluser($cur_user);
        $thongbao=$this->message;
        include_once ('view/vw_qlynguoidung.php');
    }
    public function Add_role()
    {
        if(isset($_REQUEST["btnThem"]))
        {
            $txtUsername=$_REQUEST["txtUsername"];
            $txtPassword=$_REQUEST["txtpassword"];
            $txtrole=$_REQUEST["txtrole"];
            if($this->loginController->insert_username($txtUsername,$txtPassword,$txtrole))
                $this->message="Thành công! Thông tin đã được lưu vào CSDL";
            //   echo '<div class="breadcrumb"><p style="color: red;font-size: 20px">Thành Công</p></div>'
            else
                $this->message = "Xảy ra lỗi! Không thể thêm.";

            $this->hien_user();
            return;
        }
        $roles= $this->loginController->getAllrole();
        include_once ('view/vw_AddUser.php');
    }

    public function del_user()
    {
        if ($user_id = isset($_REQUEST['user_id']) ? $_REQUEST['user_id'] : '0')
        {
            if($this->loginController->delete_user($user_id))
            {
                $this->message="Đã xóa!";
            }
            else
                $this->message="Không thể xóa!";
            $this->hien_user();
            return;

        }
    }
    public function Capnhat_user()
    {
        $user_id= isset($_REQUEST['user_id']) ? $_REQUEST['user_id'] : '0';
        $user= $this->loginController->getuserbyid($user_id);
        if(isset($_REQUEST["btnupdate"]))
        {
            $txtUsername=$_REQUEST["txtUsername"];
            $txtPassword=$_REQUEST["txtpassword"];
            $txtrole=$_REQUEST["txtrole"];
            if($this->loginController->update_user($txtUsername,$txtPassword,$txtrole,$user_id))
                $this->message="Thành công! Thông tin đã được lưu vào CSDL";
            //   echo '<div class="breadcrumb"><p style="color: red;font-size: 20px">Thành Công</p></div>'
            else
                $this->message = "Xảy ra lỗi!";

            $this->hien_user();
            return;
        }
        $roles=$this->loginController->getAllrole();
        include_once ('view/vw_update_user.php');
    }

    public function Login()
    {
       if(isset($_REQUEST["btnLogin"]))
       {
           $username= $_POST['txtusername'];
           $password= $_POST['txtpassword'];
           if($users=$this->loginController->getUser($username,$password))
           {
               //luu thong tin mat khau vao session
               session_start();
               $_SESSION["username"]=$username;
               $_SESSION["password"]=$password;
               $role= $users->role;
               if($role==1)
               {
                   $_SESSION["curentAdmin"]= $role;
                   header("location:index.php");
               }
               if($role==2) {
                   $_SESSION["curentsalestaff"]=$role;
                   header("location:salespage.php");
               }
               //luu mk vao cookie
               if(isset($_POST["check_save"]))
               {
                   setcookie("user",$username, time()+60*60);
                   setcookie("pass",$password, time()+60*60);
               }
           }
           else {
               echo '<script type="text/javascript">alert("Username or Password sai");</script>';
           }
       }
       /*
        $username= null;
        $password= null;
       if(isset($_COOKIE["user"]))
       {
           $username=$_COOKIE["user"];
           $password=$_COOKIE["pass"];
       }
       */
    }
}
