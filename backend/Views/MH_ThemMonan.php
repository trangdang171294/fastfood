<?php
/**
 * Created by PhpStorm.
 * User: Minh
 * Date: 11/22/2016
 * Time: 8:19 PM
 */
?>
<div class="panel panel-primary">
    <div class="panel-heading"><h4>Thêm mới Món ăn</h4></div>
    <div class="panel-body">
        <form method="post" action="" name="frmThemTT">
            <div class="form-group">
                <label for="recipient-name" class="control-label">Tên món ăn</label>
                <input type="text" class="form-control" id="txtNameFood" name="txtNameFood" required="required"/>
            </div>
            <div class="form-group">
                <label for="message-text" class="control-label">Xuất xứ</label>
                <select name="txtOrigin" id="txtOrigin" style="width:150px;">
                    <option value="0">Loại món ăn</option>
                    <?php foreach($table_origin as $origin){?>
                        <option value="<?=$origin->id_origin;?>"><?=$origin->name_origin;?></option>
                    <?php }?>
                </select>
            </div>
            <div class="form-group">
                <label for="recipient-name" class="control-label">Loại món ăn</label>
                <select name="txtTypeFood" id="txtTypeFood" style="width:150px;">
                    <option value="0">Loại món ăn</option>
                    <?php foreach($table_type_food as $type_food){?>
                        <option value="<?=$type_food->id_typefood;?>"><?=$type_food->name_typefood;?></option>
                    <?php }?>
                </select>
            </div>
            <div class="form-group">
                <label for="recipient-name" class="control-label">Ảnh</label>
                <input type="file" name="txtImage" id="txtImage" />
            </div>
            <div class="form-group">
                <label for="recipient-name" class="control-label">Địa điểm</label>
                <input type="text" class="form-control" id="txtAddress" name="txtAddress" required="required"/>
            </div>
            <div class="form-group">
                <label for="recipient-name" class="control-label">Nội dung</label>
                <textarea type="text" class="form-control" id="txtNoidung" name="txtNoidung"></textarea>
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
                <input name="button2" type="reset" class="btn-info" id="button2" value="Làm lại"/>
                <input name="btnThem" type="submit" class="btn-warning" id="btnThem" value="Thêm mới"  />
            </div>
        </form>
    </div>
</div>

<script type="text/javascript">
    /* $(document).ready(function(){
     $("#Close").click(function(){
     $("#Close").hide();
     });
     }); */
</script>

