<?php

/**
 * Created by PhpStorm.
 * User: Minh
 * Date: 11/22/2016
 * Time: 8:54 AM
 */
class postController
{
    public $postController;
    var $message =null;
    public function __construct()
    {
        $this->postController = new postModel();
    }
    /*get all post*/
    public function actionGetAllPost(){
        $post_table = $this->postController->getAllPost();
        $thongbao= $this->message;
        include_once ('Views/MH-QLBV.php');
    }
    /*Description for food*/
    public function actionDesPost()
    {
        if(isset($_REQUEST["Description"]))
        {
            if($this->postController->getDescriptionPostById($id_post))
            {
                $this->message="thông tin vềbaì viết";
            }
            else
                $this->message="Có lỗi!!!";
            $this->actionGetAllPost();
            return;
        }
        $id_post=isset($_REQUEST["id_post"])?$_REQUEST["id_post"]:"0";
        $description_post =$this->postController->getDescriptionPostById($id_post);
//        include_once("Views/View_Des_Food.php");
    }
    /*add New post*/
    public function actionAddPost()
    {
        if(isset($_REQUEST["btnThem"]))
        {
            $txtNametitle=$_REQUEST["txtNametitle"];
            $txtImage=$_REQUEST["txtImage"];
            if($this->postController->addNewPost($txtNametitle, $txtImage))
                $this->message="thông tin baì viết đã được lưu vào csdl";
            else
                $this->message='Có lỗi.Thông tin món ăn chưa được lưu vào csdl';
            $this->actionGetAllPost();
            return;
        }
        include_once("Views/MH_ThemBaiViet.php");
    }

    function actionUpdatePost()
    {
        if(isset($_REQUEST["btnUpdate"]))
        {
            $id_post =$_REQUEST["id_post"];
            $txtNametitle=$_REQUEST["txtNametitle"];
            $txtImage=$_REQUEST["txtImage"];
            if($this->postController->editPost($txtNametitle, $txtImage, $id_post))
                $this->message="thông tin bài viết đã được cập nhật vào csdl";

            else
                $this->message='Có lỗi.Thông bài viết chưa được cập nhật vào csdl';
            $this->actionGetAllPost();
            return;
        }
        $id_post=isset($_REQUEST["id_post"])?$_REQUEST["id_post"]:"0";
        $postById=$this->postController->getPostById_food($id_post);
        include_once("Views/MH_UpdatePost.php");
    }
    function actionDeletePost()
    {
        $id_post=$_REQUEST["id_post"];
        if($this->postController->deletePost($id_post))
        {
            $this->message="Thông tin bài viết đã được xóa khỏi CSDL";

        }
        else
            $this->message="Có lỗi. không thể xóa !!!";
        $this->actionGetAllPost();
        return;
    }

}