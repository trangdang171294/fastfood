<?php

/**
 * Created by PhpStorm.
 * User: Minh
 * Date: 11/5/2016
 * Time: 3:43 PM
 */
//include_once ('database.php');
class M_Login extends Database
{
    function getUser($txtUser, $txtpass){
        $sql="SELECT * FROM user WHERE username=? AND password=?";
        $this->setQuery($sql);
        return $this->loadRow(array($txtUser,$txtpass));
    }

}