<link rel="stylesheet" type="text/css" href="css/baiviet.css">
<?php
$id = Utils::getIndex("id");
$r = $news->getById($id);


if (Count($r)==0) //khong co -> them moi
{
	if ($ac == "Addnew") {
		$info ="THÊM BÀI VIẾT MỚI";
		$r["tenbaiviet"]="";
	  include ROOT."/admins/modules/baiviet/addbaiviet.php"; 
	}
	
}
else {
  $info ="CẬP NHẬT BÀI VIẾT";
  include ROOT."/admins/modules/baiviet/editbaiviet.php";
}
?>
