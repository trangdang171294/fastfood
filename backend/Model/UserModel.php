<?php

/**
 * Created by PhpStorm.
 * User: Minh
 * Date: 11/22/2016
 * Time: 9:12 AM
 */
class UserModel extends Database
{
    public function getAllUser(){
        $sql= "SELECT id, username, password, email, address, phoneNumber, fullname, image FROM user ";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}