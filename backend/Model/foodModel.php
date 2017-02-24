<?php

/**
 * Created by PhpStorm.
 * User: Minh
 * Date: 11/22/2016
 * Time: 8:31 AM
 */
class foodModel extends Database
{
    public function getAllFood(){
        $sql= "SELECT id_food, id_origin, id_typefood, name_food, image, address FROM foods";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    //lấy món ăn theo id_food
    public function getFoodById_food($id_food)
    {

        $sql="SELECT * FROM foods WHERE id_food=? ";
        $this->setQuery($sql);
        return $this->loadRow(array($id_food));
    }
    /*get all origin*/
    public function getAllOrigin(){
        $sql ="SELECT id_origin,name_origin,id_sub_origin FROM origin";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    /*get all type food*/
    public function getAllTypeFood(){
        $sql ="SELECT id_typefood, name_typefood, id_origin FROM type_food ";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    //add new food

    function addNewFood($id_origin, $id_typefood, $name_food, $image, $content, $address)
    {
        $sql="INSERT INTO foods(id_origin, id_typefood, name_food, image, content, address) VALUES (?,?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id_origin, $id_typefood, $name_food, $image, $content, $address));
    }

    //update foods
    function editFood($id_origin, $id_typefood, $name_food, $image, $content, $address,$id_food)
    {
        $sql="UPDATE foods SET id_origin=?, id_typefood=?, name_food=?, image=?, content=?, address=? WHERE id_food=?";
        $this->setQuery($sql);
        return $this->execute(array($id_origin, $id_typefood, $name_food, $image, $content, $address,$id_food));
    }
    //delete food
    function deleteFood($id_food)
    {
        $sql="DELETE FROM foods WHERE id_food=?";
        $this->setQuery($sql);
        return $this->execute(array($id_food));
    }

}