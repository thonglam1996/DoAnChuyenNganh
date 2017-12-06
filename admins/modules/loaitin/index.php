<?php  
	$loaitin = new Loaitin();
	$ac = Utils::getIndex("ac", "Showloaitin");


	if ($ac !="delete")
		include ROOT."/admins/modules/loaitin/addvedit.php";
	if ($ac=="Showloaitin")
		include ROOT."/admins/modules/loaitin/showloaitin.php";
	if ($ac=="delete")
	{
		//xu ly xoa	
		$n = $loaitin->delete(Utils::getIndex("id"));
		?>
	    <script language="javascript">
			alert("Đã xóa <?php echo $n;?> loại tin");
			window.location="index.php?mod=loaitin";
			</script>
    <?php
	}
	if ($ac=="saveEdit")
	{
		//xu ly edit -> and redirect to index.php -> mod-> action	
		$n = $loaitin->saveEdit();
		?>
	    <script language="javascript">
			alert("Đã sửa <?php echo $n;?> loại tin");
			window.location="index.php?mod=loaitin";
			</script>
    <?php
	}
	if ($ac=="saveAdd")
	{
		//xu ly edit -> and redirect to index.php -> mod-> action	
		$n = $loaitin->saveAddNew();
		?>
	    <script language="javascript">
			alert("Đã thêm <?php echo $n;?> loại tin");
			window.location="index.php?mod=loaitin";
			</script>
    <?php
	}



?>