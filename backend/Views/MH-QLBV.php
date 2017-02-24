<?php
/**
 * Created by PhpStorm.
 * User: Minh
 * Date: 11/8/2016
 * Time: 9:23 AM
 */
?>
<div id="page-wrapper">

    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Quản lý bài viết
                    <small></small>
                </h1>
                <ol class="breadcrumb" style="background:#D2DB95">
                    <li>
                        <h4><i class="glyphicon glyphicon-th-list " style="background:#D2DB95"></i>  Danh sách bài viết</h4>
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
        <div class="row ">
            <div class="col-lg-12">
                <span style="color:red;"><?php //echo isset($thongbao) ? $thongbao : ""; ?></span>
                <p><a href="?module=MH-QLBV&action=AddPost" data-toggle="tooltip" data-placement="bottom" title="Thêm bài viết" class="btn bt-button btn-danger" value="Thêm mới"/><i class="glyphicon glyphicon-plus"></i>Thêm mới
                    </a></p>
                <span style="color:red;"><?php echo isset($thongbao) ? $thongbao : ""; ?></span>
                <div class="table-responsive">
                    <form name="form1" method="post" action="">
                        <table width="" border="1" align="center" class="table table-bordered table-hover">
                            <tr>
                                <td width="" height="" align="center" valign="middle" bgcolor="#00CCFF">STT</td>
                                <td width="" height="" align="center" bgcolor="#00CCFF">Tiêu đề</td>
                                <td width="" height="" align="center" bgcolor="#00CCFF">Hình ảnh</td>
                                <td height="" colspan="3" align="center" bgcolor="#00CCFF">Cập nhật</td>
                            </tr>
                            <?php
                           $STT=1;
                            foreach($post_table as $post){?>
                                <tr>
                                    <td align="center" height="" valign="middle"><?=$STT++;?></td>
                                    <td align="center" height="" width="250px;" valign="middle"><?=$post->name_post;?></td>
<!--                                    <td align="center"  height="" valign="middle"></td>-->
                                    <td align="" height="" valign="middle">
                                        <img src="../image/<?=$post->image;?>" style="width:100px; height:100px; text-align: center"/>
                                    </td>

<!--                                    <td width=""align="center">-->
<!--                                        <a href="?module=MH-QLBV&action=Description&id_post"> <button type="button" class="btn btn-primary" name="btnXemChiTiet" ><i class="glyphicon glyphicon-eye-open" title="xem chi tiết"></i></button></a>-->
<!--                                    </td>-->
                                    <td width=""align="center">
                                        <a href="?module=MH-QLBV&action=Update&id_post=<?=$post->id_post;?>"> <button type="button" class="btn btn-success" name="btnUpdate" ><i class="glyphicon glyphicon glyphicon-edit" title="xem chi tiết"></i></button></a>
                                    </td>
                                    <td width=""  height=""align="center"><a href="?module=MH-QLBV&action=Delete&id_post=<?=$post->id_post;?>"  onClick="return confirm('Bạn có chắc chắn xóa tin này không ?')"class="btn btn-danger" title="Loại bỏ"><i class="glyphicon glyphicon-remove" ></i></a>
                                    </td>
                                </tr>
                            <?php }?>
                        </table>
                        <!--<div class="phantrang" style="float:right;">
                            <?php /*include_once("View/MH_phanTrang.php");*/?>
                        </div>-->
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


