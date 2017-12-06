<link rel="stylesheet" type="text/css" href="css/theloai.css">
<?php  
	$admin = new Admin();
	$ac = Utils::getIndex("ac", "Showadmin");

	if ($ac !="delete")
		include ROOT."/admins/modules/ttadmin/addvedit.php";
	if ($ac=="Showadmin")
		include ROOT."/admins/modules/ttadmin/showadmin.php";
	if ($ac=="delete")
	{
		$n = $admin->delete(Utils::getIndex("id"));
		?>
	    <script language="javascript">
			alert("Đã xóa <?php echo $n;?> Admin");
			window.location="index.php?mod=ttadmin";
			</script>
    <?php
	}
	if ($ac=="saveEdit")
	{
		//xu ly edit -> and redirect to index.php -> mod-> action	
		$n = $admin->saveEdit();
		?>
	    <script language="javascript">
			alert("Thông tin admin đã được cập nhật");
			window.location="index.php?mod=ttadmin";
			</script>
    <?php
	}
	if ($ac=="saveAdd")
	{
		//xu ly edit -> and redirect to index.php -> mod-> action	
		$n = $admin->saveAddNew();
		?>
	    <script language="javascript">
			alert("Đã thêm <?php echo $n;?> Admin");
			window.location="index.php?mod=ttadmin";
			</script>
    <?php
	}
?>