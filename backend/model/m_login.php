<?php

/**
 * Created by PhpStorm.
 * User: HP
 * Date: 3/7/2017
 * Time: 1:03 PM
 */
class m_login extends database
{
    public function getUser($username, $pass)
    {
        $sql="select * from user WHERE User_name=? and password=?";
        $this->setQuery($sql);
        return $this->loadRow(array($username, $pass));
    }
    public function getAlluser($cur_user)
    {

        $sql= "SELECT user.user_id,user.User_name,user.password,role.role_name FROM user INNER JOIN role ON user.role=role.role_id WHERE user.user_id NOT IN(SELECT user.user_id FROM user WHERE user.User_name= ?)
ORDER BY user_id DESC";
        $this->setQuery($sql);
        return $this->loadAllRows(array($cur_user));
    }
    public function getuserbyid($user_id)
    {
     $sql="select * from user WHERE user_id=?";
     $this->setQuery($sql);
     return $this->loadRow(array($user_id));
    }
    public function getAllrole()
    {
        $sql="select * from role";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function insert_username($User_name, $password, $role)
    {
        $sql="INSERT INTO user(User_name, password, role) VALUES (?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($User_name, $password, $role));
    }
    public function delete_user($user_id)
    {
        $sql="DELETE FROM user WHERE user.user_id=?";
        $this->setQuery($sql);
        return $this->execute(array($user_id));
    }
}