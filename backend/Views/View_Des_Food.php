<?php
/**
 * Created by PhpStorm.
 * User: Minh
 * Date: 11/22/2016
 * Time: 11:31 PM
 */
?>
<div class="panel panel-danger">
    <div class="panel-heading">
        <div class="panel-title"><h2>Thông tin Món ăn</h2></div>
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <table  border="1" class=" table table-bordered table-hover">
                <tr>
                    <th align="center" width="120">Mã món ăn</th>
                    <td ><?=$description_food->id_food; ?></td>
                </tr>
                <tr>
                    <th align="center" width="120">Tên món ăn</th>
                    <td><?=$description_food->name_food; ?></td>
                </tr>
                <tr>
                    <th align="center" width="120">Hình ảnh</th>
                    <td><img src="../image/<?=$description_food->image; ?>" width="120px;" height="100px;"/></td>
                </tr>
                <tr>
                    <th align="center" width="120">Nội dung</th>
                    <td><?=$description_food->content; ?></td>
                </tr>
                <tr>
                    <th align="center" width="120">Địa chỉ</th>
                    <td><?=$description_food->address; ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
