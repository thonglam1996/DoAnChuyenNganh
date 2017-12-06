<?php  
$mod = getIndex("mod","dashboard");

if ($mod=="loaitin")
	include "modules/loaitin/index.php";
else if ($mod=="baiviet")
	include "modules/baiviet/index.php";
else if ($mod=="user")
	include "modules/user/index.php";
else if ($mod=="ttadmin")
	include "modules/ttadmin/index.php";
else
	include "modules/dashboard/index.php";
?>