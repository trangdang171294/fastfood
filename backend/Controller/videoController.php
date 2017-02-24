<?php

/**
 * Created by PhpStorm.
 * User: Minh
 * Date: 11/22/2016
 * Time: 7:51 PM
 */
class videoController
{
    public  $videoController;
    var $message =null;
    public  function __construct()
    {
        $this->videoController = new VideoModel();
    }
    /*get all video in database*/
    public function getAllVideoBackend(){
        $list_video = $this->videoController->getAllVideoBackend();
        $thongbao = $this->message;
        include_once('Views/MH_QLVideo.php');
    }

    /*add New Video*/
    public function actionAddVideo()
    {
        if(isset($_REQUEST["btnThem"]))
        {
            $txtLink=$_REQUEST["txtLink"];
            $txttitleVideo=$_REQUEST["txttitleVideo"];
            $txtDate=$_REQUEST["txtDate"];
            if($this->videoController->addNewVideo($txtLink, $txttitleVideo,$txtDate))
                $this->message="thông tin video đã được lưu vào csdl";
            else
                $this->message='Có lỗi.Thông tin video chưa được lưu vào csdl';
            $this->getAllVideoBackend();
            return;
        }
        include_once("Views/MH_ThemVideo.php");
    }

    function actionUpdateVideo()
    {
        if(isset($_REQUEST["btnUpdate"]))
        {
            $id_video =$_REQUEST["id_video"];
            $txtLink=$_REQUEST["txtLink"];
            $txttitleVideo=$_REQUEST["txttitleVideo"];
            $txtDate=$_REQUEST["txtDate"];
            if($this->videoController->editVideo($txtLink, $txttitleVideo,$txtDate, $id_video))
                $this->message="thông tin video đã được cập nhật vào csdl";

            else
                $this->message='Có lỗi.Thông video chưa được cập nhật vào csdl';
            $this->getAllVideoBackend();
            return;
        }
        $id_video=isset($_REQUEST["id_video"])?$_REQUEST["id_video"]:"0";
        $VideoById=$this->videoController->getPostById_food($id_video);
        include_once("Views/MH_UpdateVideo.php");
    }
    function actionDeleteVideo()
    {
        $id_video=$_REQUEST["id_video"];
        if($this->videoController->deleteVideo($id_video))
        {
            $this->message="Thông tin video đã được xóa khỏi CSDL";

        }
        else
            $this->message="Có lỗi. không thể xóa !!!";
        $this->getAllVideoBackend();
        return;
    }

}