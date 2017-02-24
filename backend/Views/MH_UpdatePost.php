<?php
/**
 * Created by PhpStorm.
 * User: Minh
 * Date: 11/23/2016
 * Time: 4:13 AM
 */
?>
<?php
/**
 * Created by PhpStorm.
 * User: Minh
 * Date: 11/22/2016
 * Time: 8:19 PM
 */
?>
<div class="panel panel-primary">
    <div class="panel-heading"><h4>Sửa Bài viết</h4></div>
    <div class="panel-body">
        <form method="post" action="" name="">
            <input name="id_post" type="hidden" id="id_post" size="40" value="<?=$postById->id_post;?>">

            <div class="form-group">
                <label for="recipient-name" class="control-label">Tiêu đề bài viết</label>
                <input type="text" class="form-control" id="txtNametitle" name="txtNametitle" required="required" value="<?=$postById->name_post?>"/>
            </div>
            <div class="form-group">
                <label for="recipient-name" class="control-label">Ảnh</label>
                <input type="file" name="txtImage" id="txtImage" />
            </div>
            <div class="form-group">
                <input name="button2" type="reset" class="btn-info" id="button2" value="Làm lại"/>
                <input name="btnUpdate" type="submit" class="btn-warning" id="btnUpdate" value="Update"  />
            </div>
        </form>
    </div>
</div>



