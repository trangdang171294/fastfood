<?php
/**
 * Created by PhpStorm.
 * User: Minh
 * Date: 11/8/2016
 * Time: 9:07 AM
 */
?>
<div id="page-wrapper">
    <div class="container">
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-10">
                <h1 class="page-header">
                    Quản lý Món ăn
                </h1>
                <ol class="breadcrumb" style="background:#D2DB95">
                    <li>
                        <h4><i class="glyphicon glyphicon-th-list " style="background:#D2DB95"></i>  Danh sách món ăn</h4>
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
        <div class="row food">
            <div class="col-lg-10 col-md-12">
                <span style="color:red;"><?php echo isset($thongbao) ? $thongbao : ""; ?></span>
                <p><a href="?module=MH_QLMA&action=Add" data-toggle="tooltip" data-placement="bottom" title="Thêm tin tức" class="btn bt-button btn-danger" value="Thêm mới"/><i class="glyphicon glyphicon-plus"></i>Thêm mới
                    </a></p>
                <div class="table-responsive">

                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr style="background:#6F9">
                            <th width="100px;">STT</td>
                            <td width="200px;" style="text-align: center; font-weight: bold;">Tên món ăn</td>
                            <td width="100px;" style="text-align: center;font-weight: bold;">Hình ảnh</td>
                         <!--   <td>Địa chỉ</td>
                            <td>Xác nhận</td>-->
                            <td width="120px;" style="text-align: center;font-weight: bold;">Chi tiết</td>
                            <td width="150px;" style="text-align: center;font-weight: bold;">Cập nhật</td>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $stt=1;
                        foreach ($food_table as $food) { ?>
                            <tr >
                                <td style="text-align:center;"><?=$stt++;?></td>
                                <td ><?=$food->name_food;?></td>
                                <td><img src="../image/<?=$food->image;?>" width="80px" height="80px;"></td>
                                <td style="text-align:center;"><a href="?module=MH_QLMA&action=Food_Des&id_food=<?php echo $food->id_food; ?>" class="btn btn-info" name="btnXemChiTiet" id="btnXemChiTiet"><i class="
glyphicon glyphicon-eye-open"></i></a></td>
                                <td style="text-align:center;"><a href="?module=MH_QLMA&action=Update_Food&id_food=<?php echo $food->id_food; ?>" class="" title="sửa thông tin" name="btnUpdate" id="btnUpdate"><i class="glyphicon glyphicon-edit" ></i></a>&nbsp; &nbsp; &nbsp;&nbsp;<a href="?module=MH_QLMA&action=Delete_Food&id_food=<?php echo $food->id_food; ?>" onClick="return confirm('Bạn có chắc chắn muốn xóa món ăn này?')" class="" title="Loại bỏ"><i class="glyphicon glyphicon-trash "style="color: red;" ></i></a></td>
                            </tr>

                        <?php } ?>
                        </tbody>
                    </table>

                </div>
           <!--     <div class="phantrang" style="float:right;">
                    <?php /*include_once("View/MH_phanTrang.php");*/?>
                </div>-->
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

</div>
