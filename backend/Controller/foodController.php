<?php

/**
 * Created by PhpStorm.
 * User: Minh
 * Date: 11/22/2016
 * Time: 8:32 AM
 */
class foodController
{
    public $foodController =null;
    var $message=null;
    public function __construct()
    {
        $this->foodController = new foodModel();
    }
    public function actionLoadAllFood(){
        $food_table =$this->foodController->getAllFood();
        $thongbao=$this->message;
        include_once("Views/MH_QLMA.php");
    }

    /*Description for food*/
    public function actionDes_Food()
    {
        if(isset($_REQUEST["btnXemChiTiet"]))
        {
            if($this->foodController->getFoodById_food($id_food))
            {
                $this->message="thông tin về món ăn";
            }
            else
                $this->message="Có lỗi!!!";
            $this->actionLoadAllFood();
            return;
        }
        $id_food=isset($_REQUEST["id_food"])?$_REQUEST["id_food"]:"0";
        $description_food =$this->foodController->getFoodById_food($id_food);
        include_once("Views/View_Des_Food.php");
    }
    /*add New Food*/
    public function actionAddFood()
    {
        if(isset($_REQUEST["btnThem"]))
        {
            $txtNameFood=$_REQUEST["txtNameFood"];
            $txtOrigin=$_REQUEST["txtOrigin"];
            $txtTypeFood=$_REQUEST["txtTypeFood"];
            $txtImage=$_REQUEST["txtImage"];
            $txtAddress=$_REQUEST["txtAddress"];
            $txtNoidung=$_REQUEST["txtNoidung"];
            if($this->foodController->addNewFood($txtOrigin, $txtTypeFood, $txtNameFood,$txtImage, $txtNoidung,$txtAddress))
                $this->message="thông tin món ăn đã được lưu vào csdl";
            else
                $this->message='Có lỗi.Thông tin món ăn chưa được lưu vào csdl';
            $this->actionLoadAllFood();
            return;
        }
        $table_origin =$this->foodController->getAllOrigin();
        $table_type_food =$this->foodController->getAllTypeFood();
        include_once("Views/MH_ThemMonan.php");
    }
    function actionUpdate()
    {
        if(isset($_REQUEST["btnUpdate"]))
        {
            $id_food =$_REQUEST["id_food"];
            $txtNameFood=$_REQUEST["txtNameFood"];
            $txtOrigin=$_REQUEST["txtOrigin"];
            $txtTypeFood=$_REQUEST["txtTypeFood"];
            $txtImage=$_REQUEST["txtImage"];
            $txtAddress=$_REQUEST["txtAddress"];
            $txtNoidung=$_REQUEST["txtNoidung"];
            if($this->foodController->editFood($txtOrigin, $txtTypeFood, $txtNameFood,$txtImage, $txtNoidung,$txtAddress,$id_food))
                $this->message="thông tin món ăn đã được cập nhật vào csdl";

            else
                $this->message='Có lỗi.Thông tin món ăn chưa được cập nhật vào csdl';
            $this->actionLoadAllFood();
            return;
        }
        $table_origin =$this->foodController->getAllOrigin();
        $table_type_food =$this->foodController->getAllTypeFood();
        $id_food=isset($_REQUEST["id_food"])?$_REQUEST["id_food"]:"0";
        $foodById=$this->foodController->getFoodById_food($id_food);
        include_once("Views/Update_Food.php");
    }
    function actionDelete()
    {
        $id_food=$_REQUEST["id_food"];
        if($this->foodController->deleteFood($id_food))
        {
            $this->message="Thông tin Món ăn đã được xóa khỏi CSDL";

        }
        else
            $this->message="Có lỗi. không thể xóa !!!";
        $this->actionLoadAllFood();
        return;
    }

}