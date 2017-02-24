<?php
/**
 * Created by PhpStorm.
 * User: Minh
 * Date: 11/22/2016
 * Time: 7:44 PM
 */
?>
<div id="page-wrapper">
    <div class="container">
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-10">
                <h1 class="page-header">
                    Quản lý Video
                </h1>
                <ol class="breadcrumb" style="background:#D2DB95">
                    <li>
                        <h4><i class="glyphicon glyphicon-th-list" style="background:#D2DB95"></i>  Danh sách video</h4>
                    </li>

                </ol>
            </div>
        </div>
        <!-- /.row -->
        <div class="row ">
            <div class="col-lg-10 col-md-12">
                <span style="color:red;"><?php echo isset($thongbao) ? $thongbao : ""; ?></span>
                <p><a href="?module=MH_QLVideo&action=Add" data-toggle="tooltip" data-placement="bottom" title="Thêm tin tức" class="btn bt-button btn-danger" value="Thêm mới"/><i class="glyphicon glyphicon-plus"></i>Thêm mới
                    </a></p>
                <div class="table-responsive">
                    <form name="form1" method="post" action="">
                        <table width="868" border="1" class="table table-bordered table-hover">
                                <th width="62px" align="center" bgcolor="#33CCFF">STT</th>
                                <th width="180px" align="center" bgcolor="#33CCFF">Link Video</th>
                                <th width="61px" align="center" bgcolor="#33CCFF">Tiêu đề Video</th>
                                <th width="90px" align="center" bgcolor="#33CCFF">Ngày đăng</th>
                                <th  align="center" colspan="2" bgcolor="#33CCFF">Cập nhật</a></th>
                            </tr>

                            <?php
                            $STT=1;
                            foreach($list_video as $video){?>
                                <tr>
                                    <td align="center"><?=$STT++;?></td>
                                    <td align="center"><?=$video->link_video;?></td>
                                    <td align="center"><?=$video->title_video;?></td>
                                    <td align="center"><?=$video->date_post?></td>
                                    <td width="48" align="center"><a href="?module=MH_QLVideo&action=Update&id_video=<?=$video->id_video; ?>" name="btnUpdate"><i class="glyphicon glyphicon-pencil" ></i></a></td>
                                    <td width="42" align="center"><a href="?module=MH_QLVideo&action=Delete&id_video=<?=$video->id_video; ?>"  onClick="return confirm('Bạn có chắc chắn xóa hoa quả \'<?php echo $video->title_video; ?>\' này không ?')"><i class="glyphicon glyphicon-trash" ></i></a></td>
                                </tr>
                            <?php }?>
                        </table>
                        <!--<div class="phantrang" style="float:right">
                            <?php /*include_once("View/MH_phanTrang.php");*/?>
                        </div>-->
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




