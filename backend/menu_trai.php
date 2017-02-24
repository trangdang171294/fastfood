<div id="mobile-menu">
			<a id="responsive-menu-button" class = "btn btn-default" href="#mobile-menu"><i class = "glyphicon glyphicon-menu-hamburger"></i></a>
		</div>
		<!--side left-->
		<div class = "sidebar col-md-2" style="background:url(images/bg-body.gif) repeat-y top left scroll;">
        <div id="admin">
			<div><span><img src="images/User.png"></span></div>
				<a  class="ad_name" href = "#"><?php echo isset($_SESSION["fullname"])?$_SESSION["fullname"]:"admin"?></a>
				<br>
				<br>
				<a class="logout" href="?action=logout">Đăng xuất</p></a>
			</div>
			<div class = "sidebar-menu">
				<?php
					include_once("menu.php");
				 ?>
			</div>
		</div><!-- end side-left -->
    