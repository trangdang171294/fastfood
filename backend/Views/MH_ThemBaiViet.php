<?php
/**
 * Created by PhpStorm.
 * User: Minh
 * Date: 11/22/2016
 * Time: 8:19 PM
 */
?>
<div class="panel panel-primary">
    <div class="panel-heading"><h4>Thêm mới Bài viết</h4></div>
    <div class="panel-body">
        <form method="post" action="" name="">
            <div class="form-group">
                <label for="recipient-name" class="control-label">Tiêu đề bài viết</label>
                <input type="text" class="form-control" id="txtNametitle" name="txtNametitle" required="required"/>
            </div>
            <div class="form-group">
                <label for="recipient-name" class="control-label">Ảnh</label>
                <input type="file" name="txtImage" id="txtImage" />
            </div>
            <div class="form-group">
                <input name="button2" type="reset" class="btn-info" id="button2" value="Làm lại"/>
                <input name="btnThem" type="submit" class="btn-warning" id="btnThem" value="Thêm mới"  />
            </div>
        </form>
    </div>
</div>


