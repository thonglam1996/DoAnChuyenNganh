
<?php  
$user = new User();
	$ac = Utils::getIndex("ac", "Showuser");

	if ($ac !="delete")
		include ROOT."/admins/modules/user/addvedit.php";
	if ($ac=="Showuser")
		include ROOT."/admins/modules/user/showuser.php";
	if ($ac=="delete")
	{
		//xu ly xoa	
		$n = $user->delete(Utils::getIndex("id"));
		?>
	    <script language="javascript">
			alert("Đã xóa <?php echo $n;?> User");
			window.location="index.php?mod=user";
			</script>
    <?php
	}
	if ($ac=="saveEdit")
	{
		//xu ly edit -> and redirect to index.php -> mod-> action	
		$n = $user->saveEdit();
		?>
	    <script language="javascript">
			alert("Thông tin user đã được cập nhật");
			window.location="index.php?mod=user";
			</script>
    <?php
	}
	if ($ac=="saveAdd")
	{
		//xu ly edit -> and redirect to index.php -> mod-> action	
		$n = $user->saveAddNew();
		?>
	    <script language="javascript">
			alert("Đã thêm <?php echo $n;?> User");
			window.location="index.php?mod=user";
			</script>
    <?php
	}
?>