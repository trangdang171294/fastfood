<?php
/**
 * Created by PhpStorm.
 * User: Minh
 * Date: 11/8/2016
 * Time: 9:29 AM
 */
?>
<div id="page-wrapper">

    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Quản lý User
                    <small></small>
                </h1>
                <ol class="breadcrumb" style="background:#D2DB95">
                    <li>
                        <h4><i class="glyphicon glyphicon-th-list " style="background:#D2DB95"></i>  Danh sách User</h4>
                    </li>

                </ol>
            </div>
        </div>
        <!-- /.row -->
        <div class="row ">
            <div class="col-lg-12">
                <span style="color:red;"><?php //echo isset($thongbao) ? $thongbao : ""; ?></span>
                <p><a href="?module=QLTinTuc&action=Them" data-toggle="tooltip" data-placement="bottom" title="Thêm tin tức" class="btn bt-button btn-danger" value="Thêm mới"/><i class="glyphicon glyphicon-plus"></i>Thêm mới
                    </a></p>
                <div class="table-responsive">
                    <form name="form1" method="post" action="">
                        <table width="800" border="1" align="center" class="table table-bordered table-hover">
                            <tr>
                                <td width="56" height="50" align="center" valign="middle" bgcolor="#00CCFF">STT</td>
                                <td width="101" height="50" align="center" bgcolor="#00CCFF">Họ tên user</td>
                               <!-- <td width="139" height="50" align="center" bgcolor="#00CCFF">Tên khách hàng</td>-->
                                <td width="80" height="50" align="center" bgcolor="#00CCFF">profile</td>
                                <td width="129" height="50" align="center" bgcolor="#00CCFF">Số điện thoại</td>
                                <td width="110" height="50" align="center" bgcolor="#00CCFF">Địa chỉ</td>
                                <td width="165" align="center" bgcolor="#00CCFF">Email</td>
                                <td height="50" colspan="4" align="center" bgcolor="#00CCFF">Cập nhật</td>
                            </tr>
                            <?php
                            $STT=1;
                            foreach($listUser as $khachhang){?>
                                <tr>
                                    <td align="center" height="80" valign="middle"><?=$STT++;?></td>
                                    <td align="center" height="80" valign="middle"><?=$khachhang->fullname;?></td>
                                    <td align="center"  width="80" height="80px" valign="middle"><img src="../image/profile/<?=$khachhang->image;?>" width="80" height="80px"></td>
                                    <td align="center" height="80" valign="middle"><?=$khachhang->phoneNumber;?></td>
                                    <td align="center" height="80"  valign="middle"><?=$khachhang->address;?></td>
                                    <td align="center" valign="middle"><?=$khachhang->email;?></td>
                                    <td width="56"align="center">
                                        <a href="?module=QLkhachhang&view=ChiTiet&Ma_khach_hang"> <button type="button" class="btn btn-primary" name="btnXemChiTiet" ><i class="glyphicon glyphicon-eye-open" title="xem chi tiết"></i></button></a>
                                    </td>
                                    <td width="56"  height="80"align="center"><a href="?module=QLkhachhang&view=Delete&Ma_khach_hang"  onClick="return confirm('Bạn có chắc chắn xóa khách hàng này không ?')"class="btn btn-danger" title="Loại bỏ"><i class="glyphicon glyphicon-remove" ></i></a></td>
                                </tr>
                            <?php }?>
                        </table>
                     <!--   <div class="phantrang" style="float:right;">
                            <?php /*include_once("View/MH_phanTrang.php");*/?>
                        </div>-->
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    /* $(document).ready(function(){
     $("#myBtn").click(function(){
     $("#myModal").modal();
     });
     }); */
</script>
<?php //include_once("View_KhachHang.php")?>

