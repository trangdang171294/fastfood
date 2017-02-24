<?php session_start();
if (isset($_REQUEST['action']) and $_REQUEST['action'] == 'logout') {
    unset($_SESSION['fullname']);
    header('location:login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, user-scalable=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <script language="javascript" src="js/jquery-2.2.0.min.js"></script>
    <script language="javascript" src="js/bootstrap.min.js"></script>
    <link type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="css/bootstrap-theme.min.css" rel="stylesheet">
    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <title>Quản trị</title>

</head>

<body>
<?php
include_once('Model/database.php');
include_once('Model/foodModel.php');
include_once('Controller/foodController.php');
$foodController = new foodController();
include_once('Model/postModel.php');
include_once('Controller/postController.php');
$postController = new postController();
include_once('Model/UserModel.php');
include_once('Controller/UserController.php');
$UserController = new UserController();
include_once('Model/VideoModel.php');
include_once('Controller/videoController.php');
$videoController = new videoController();
?>
<?php include_once("menu_header.php"); ?>
<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-xs-12 col-md-2" style="margin-top:px;">
                <?php
                include_once("menu_trai.php");
                ?>
            </div>
            <div class=" col-xs-12 col-sm-12 col-md-10" style="margin-top:60px;">
                <?php
                $module = isset($_REQUEST['module']) ? $_REQUEST['module'] : "";
                switch ($module) {
                    case "MH_QLMA":
                        $action = isset($_REQUEST["action"]) ? $_REQUEST["action"] : "";
                        switch ($action) {
                            case "Add":
                                $foodController->actionAddFood();
                                break;
                            case "Food_Des":
                                $foodController->actionDes_Food();
                                break;
                            case "Update_Food":
                                $foodController->actionUpdate();
                                break;
                            case "Delete_Food":
                                $foodController->actionDelete();
                                break;
                            default:
                                $foodController->actionLoadAllFood();
                                break;
                        }
                        break;
                    case "MH-QLBV":
                        $action = isset($_REQUEST["action"]) ? $_REQUEST["action"] : "";
                        switch ($action) {
                            case "AddPost":
                                $postController->actionAddPost();
                                break;
                            /*case "Food_Des":
                                $foodController->actionDes_Food();
                                break;*/
                            case "Update":
                                $postController->actionUpdatePost();
                                break;
                            case "Delete":
                                $postController->actionDeletePost();
                                break;
                            default:
                                $postController->actionGetAllPost();
                                break;
                        }
                        break;

                    case "MH-QLKH":
                        $UserController->actionGetAllUser();
                        break;
                    case "MH_QLVideo":
                        $action = isset($_REQUEST["action"]) ? $_REQUEST["action"] : "";
                        switch ($action) {
                            case "Add":
                                $videoController->actionAddVideo();
                                break;
                            case "Update":
                                $videoController->actionUpdateVideo();
                                break;
                            /* case "Update_Food":
                                 $foodController->actionUpdate();
                                 break;*/
                            case "Delete":
                                $videoController->actionDeleteVideo();
                                break;
                            default:
                                $videoController->getAllVideoBackend();
                                break;
                        }
                        break;
                    default :
                        include_once('Views/MH_ThongKe.php');
                        break;
                }
                ?>

            </div>
        </div>
    </div>
</div>
<?php include_once("Footer_ad.php"); ?>

<script type="text/javascript">
    $(document).ready(function () {
        $(".list-group-item > a").on('click', function () {
            $(".list-group-item > a").removeClass("active");
            $(this).addClass("active");
            if ($(".list-group-item > a.active + ul").is(":visible")) {
                $(".list-group-item > a.active + ul").slideUp(400);
            } else {
                $(".list-group-item > a.active + ul").slideToggle(400);
                $(".list-group-item :not(.active) + ul").slideUp(400);
            }
        });
        $("#checkall").click(function () {
            $(".check").prop('checked', $(this).prop('checked'));
        });
        $("#mobile-menu").click(function (e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    });
</script>
</body>
</html>