<?php
include "config/config.php";
include ROOT."/include/function.php";
spl_autoload_register("loadClass");
if (!isset($_SESSION)) session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>BáoVN - Thời báo online - Trang chủ</title>
<link rel="shortcut icon" href="images/favicon.png">
<link rel="stylesheet" type="text/css" href="styles/style.css">
<link rel="stylesheet" type="text/css" href="styles/gototop.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript"></script>
<script src="js/gototop.js"></script>
<!--<script src="js/chaybanner.js"></script> -->
<script src="js/donghoso.js"></script>
<script src="js/getip.js"></script>
<script type="text/javascript" src="https://www.l2.io/ip.js?var=userip"></script>
<script src="js/chayhieuung.js"></script>
</head>
<body>
<div id="bttop" class="btn">Về đầu trang</div>
<div id="auto-scroll" class="btn">Tự động cuộn</div>
<div class="container">
<div id="header" name="header">
  <div id="top-header">
    <div id="user">
    	<span id="user-button" style="margin:0px 10px"><a href="admins/" style="color:#FFF">Trang quản trị</a></span>
    	<?php
        	if(isset($_SESSION["thongtindangnhap"]))
			{
				$user = $_SESSION["thongtindangnhap"];
				?>
				<span id="user-button" style="margin:0px 10px"><a href="logout.php" style="color:#FFF">Đăng xuất</a></span>
                <span id="user-button" style="margin:0px 10px"><a href="#" style="color:#FFF">Chào <?php echo $user["fullname"];?></a></span>
				<?php
			}
			else
			{
				?>
                	<span id="user-button" style="margin:0px 10px"><a href="login.php" style="color:#FFF">Đăng nhập</a></span>
        			<span id="user-button" style="margin:0px 10px"><a href="register.php" style="color:#FFF">Đăng kí</a></span>
                <?php
			}
		?>
    </div>
    
    <div id="logo"> <a href="index.php"><img src="images/logo.png"></a> </div>
    <!--<div id="banner"> <a href="http://google.vn/"><img id="banner-img" src="images/banner/2.png"></a> 			</div> -->
  </div>
  <div id="nav">
    <ul>
      <li style="width:160px"><img src="images/homepage-icon-png-2578.png" style="height:32px; float:left; padding-top:8px;padding-left:10px; padding-right:2px"> <a href="index.php">Trang chủ</a></li>
      
      <?php
	  	
		$loai = new Loaitin();
		$dsloai = $loai -> getAll();
		
		foreach($dsloai as $loaitin)
		{
			if($loaitin["trangthaihienthi"] != 0)
			{
				?>
				<li><a href="index.php?mod=category&id=<?php echo $loaitin["idloaitin"];?>"><?php echo $loaitin["tenloaitin"];?></a></li>
				<?php
			}
		}
	  ?>
    </ul>
  </div>
  <div id="sub-nav">
    <!--<ul>
    	<li><a href="tintheoloai.html">Du lịch</a></li>
      <li><a href="tintheoloai.html">Số hóa</a></li>
      <li><a href="tintheoloai.html">Cộng đồng</a></li>
    </ul> -->
    <form action="index.php">
    <input type="text" onkeydown="if (event.keyCode == 13) { this.form.submit(); return false; }" placeholder="Tìm kiếm bài viết..." name="search" style="width:200px;background-color:#FFF; padding:3px; margin:4px 0px; float:right; margin-right:10px">
    </form>
  </div>
</div>
