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
    <div class="panel-heading"><h4>Update Video</h4></div>
    <div class="panel-body">
        <form method="post" action="" name="">
            <input name="id_video" type="hidden" id="id_video" size="40" value="<?=$VideoById->id_video;?>">

            <div class="form-group">
                <label for="recipient-name" class="control-label">Link Video</label>
                <input type="text" class="form-control" id="txtLink" name="txtLink" required="required" value="<?=$VideoById->link_video?>"/>
            </div>
            <div class="form-group">
                <label for="recipient-name" class="control-label">Tiêu đề Video</label>
                <input type="text" class="form-control" id="txttitleVideo" name="txttitleVideo" required="required" value="<?=$VideoById->title_video?>"/>
            </div>
            <div class="form-group">
                <label for="recipient-name" class="control-label">Ngày đăng</label>
                <input type="date" name="txtDate" id="txtDate" />
            </div>
            <div class="form-group">
                <input name="button2" type="reset" class="btn-info" id="button2" value="Làm lại"/>
                <input name="btnUpdate" type="submit" class="btn-warning" id="btnUpdate" value="Update"  />
            </div>
        </form>
    </div>
</div>



