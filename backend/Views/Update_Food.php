<?php
/**
 * Created by PhpStorm.
 * User: Minh
 * Date: 11/22/2016
 * Time: 11:59 PM
 */
?>

<div class="panel panel-primary">
    <div class="panel-heading"><h4>Sửa Món ăn</h4></div>
    <div class="panel-body">
        <form method="post" action="" name="frmSuaTT">
            <input name="id_food" type="hidden" id="id_food" size="40" value="<?=$foodById->id_food;?>">
            <div class="form-group">
                <label for="recipient-name" class="control-label">Tên món ăn</label>
                <input type="text" class="form-control" id="txtNameFood" name="txtNameFood" required="required" value="<?=$foodById->name_food;?>"/>
            </div>
            <div class="form-group">
                <label for="message-text" class="control-label">Xuất xứ</label>
                <select name="txtOrigin" id="txtOrigin" style="width:150px;" value="">
                    <option ><?=$foodById->id_origin;?></option>
                    <?php foreach($table_origin as $origin){?>
                        <option value="<?=$origin->id_origin;?>"><?=$origin->name_origin;?></option>
                    <?php }?>
                </select>
            </div>
            <div class="form-group">
                <label for="recipient-name" class="control-label">Loại món ăn</label>
                <select name="txtTypeFood" id="txtTypeFood" style="width:150px;"value="">
                    <option ><?=$foodById->id_typefood;?></option>
                    <?php foreach($table_type_food as $type_food){?>
                        <option value="<?=$type_food->id_typefood;?>"><?=$type_food->name_typefood;?></option>
                    <?php }?>
                </select>
            </div>
            <div class="form-group">
                <label for="recipient-name" class="control-label">Ảnh</label>
                <input type="file" name="txtImage" id="txtImage"  /><?=$foodById->image;?>
            </div>
            <div class="form-group">
                <label for="recipient-name" class="control-label">Địa điểm</label>
                <input type="text" class="form-control" id="txtAddress" name="txtAddress" required="required" value="<?=$foodById->address;?>"/>
            </div>
            <div class="form-group">
                <label for="recipient-name" class="control-label">Nội dung</label>
                <textarea type="text" class="form-control" id="txtNoidung" name="txtNoidung" ><?=$foodById->content;?></textarea>
            </div>
            <script type="text/javascript">
                config={};
                config.language = 'vi';
                config.entities_latin = false;
                config.filebrowserBrowseUrl ="ckeditor/ckfinder/ckfinder/ckfinder.html";
                config.filebrowserImageBrowseUrl ="ckeditor/ckfinder/ckfinder/ckfinder.html";
                CKEDITOR.replace('txtNoidung',config);
            </script>
            <div class="form-group">
                <input name="btnUpdate" type="submit" class="btn-warning" id="btnUpdate" value="Cập nhật"  >
            </div>
        </form>
    </div>
</div>