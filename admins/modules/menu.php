<style type="text/css">
	
</style>
<div id="menu">
	
		<div class="box-chucnang admin-name">
			<img class="hinhdaidien" src="img/<?php echo $_SESSION["admin_datas"]["hinhdaidien"];?>">
			<div>
				<p>Welcome</p>
				<p style="line-height: 10px;"><?php echo $_SESSION["admin_datas"]["tenadmin"];?></p>
			</div>
			
		</div>
	<a href="index.php?mod=dashboard">
		<div class="box-chucnang">
			<div class="image"><img src="img/dashboard.png"></div>
			<p>Dashboard</p>
		</div>
	</a>
	<a href="index.php?mod=loaitin">
		<div class="box-chucnang">
			<div class="image"><img src="img/quanlytheloaicon.png"></div>
			<p>Quản lý loại tin</p>
		</div>
	</a>
	<a href="index.php?mod=baiviet">
		<div class="box-chucnang">
			<div class="image"><img src="img/quanlybaiviet.png"></div>
			<p>Quản lý bài viết</p>
		</div>
	</a>
	<a href="index.php?mod=user">
		<div class="box-chucnang">
			<div class="image"><img src="img/quannlyuser.png"></div>
			<p>Quản lý người dùng</p>
		</div>
	</a>
	<a href="index.php?mod=ttadmin">
		<div class="box-chucnang">
			<div class="image"><img src="img/qladmin.png"></div>
			<p>Quản lý thông tin admin</p>
		</div>
	</a>
	
</div>