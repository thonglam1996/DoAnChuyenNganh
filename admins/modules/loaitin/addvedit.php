<link rel="stylesheet" type="text/css" href="css/theloai.css">
<?php
$id = Utils::getIndex("id");
$r = $loaitin->getById($id);


if (Count($r)==0) //khong co -> them moi
{
	
	$info ="THÊM LOẠI TIN MỚI";
	$r["name_chuyen_de"]="";
  include ROOT."/admins/modules/loaitin/addloaitin.php";
}
else {
  $info ="CẬP NHẬT LOẠI TIN";
  include ROOT."/admins/modules/loaitin/editloaitin.php";
}
