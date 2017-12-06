<?php
include "../config/config.php";
include ROOT."/include/function.php";
if (!isset($_SESSION)) session_start();
spl_autoload_register("loadClass");
$db= new Db();
$mod = Utils::getIndex("mod");
if ($mod== "login")
{
	$u = Utils::postIndex("username");
	$p = md5(Utils::postIndex("password"));
	$sql ="select * from admin where admin=:u and password=:p";
	$arr = array(":u"=>$u, ":p"=>$p);
	$data = $db->exeQuery($sql, $arr);
	if ($db->getRowCount()>0)
	{
		$_SESSION["admin_logins"] =1;
		$_SESSION["admin_datas"] = $data[0];
	}
}
if ($mod== "logout")
{
		unset($_SESSION["admin_logins"] );
		unset($_SESSION["admin_datas"]);
}
if (!isset($_SESSION["admin_logins"]))
{
	include "login.html";exit;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Trang quản lý nội dung</title>
        <link rel="shortcut icon" href="../images/favicon.png">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?php
		include "modules/banner.php";  
	?>
	<div id="middle">
		<?php
			include "modules/menu.php";  
			include "modules/content.php"; 
		?>
		
	</div>
	
</body>
</html>