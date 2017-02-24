<?php

/**
 * Created by PhpStorm.
 * User: Minh
 * Date: 11/22/2016
 * Time: 9:13 AM
 */
class UserController
{
    public $userController;
    public function __construct()
    {
        $this->userController = new UserModel();
    }
    /*get all users*/
    public function actionGetAllUser(){
        $listUser = $this->userController->getAllUser();
        include_once ('Views/MH-QLKH.php');
    }
}