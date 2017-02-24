<?php

/**
 * Created by PhpStorm.
 * User: Minh
 * Date: 11/22/2016
 * Time: 8:52 AM
 */
class postModel extends Database
{
    /*get all post*/
    public function getAllPost(){
        $sql ="SELECT id_post, name_post, image FROM posts";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    //lấy bài viết theo id_food
    public function getPostById_food($id_post)
    {

        $sql="SELECT * FROM posts WHERE id_post=? ";
        $this->setQuery($sql);
        return $this->loadRow(array($id_post));
    }
    //add new post

    function addNewPost($name_post, $image)
    {
        $sql="INSERT INTO posts(name_post, image) VALUES (?,?)";
        $this->setQuery($sql);
        return $this->execute(array($name_post, $image));
    }

    //update posts
    function editPost($name_post, $image, $id_post)
    {
        $sql="UPDATE posts SET name_post=?, image=? WHERE id_post=?";
        $this->setQuery($sql);
        return $this->execute(array($name_post, $image,$id_post));
    }
    //delete post
    function deletePost($id_post)
    {
        $sql="DELETE FROM posts WHERE id_post=?";
        $this->setQuery($sql);
        return $this->execute(array($id_post));
    }

}