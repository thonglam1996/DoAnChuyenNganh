<?php
$id = Utils::getIndex("id");
$r = $admin->getById($id);


if (Count($r)==0) //khong co -> them moi
{
	
	$info ="THÊM ADMIN MỚI";
	$r["admin"]="";
  include ROOT."/admins/modules/ttadmin/addadmin.php";
}
else {
  $info ="CẬP NHẬT THÔNG TIN ADMIN";
  include ROOT."/admins/modules/ttadmin/editadmin.php";
}