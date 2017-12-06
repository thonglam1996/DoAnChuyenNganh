<?php  
	$news = new News();
	$ac = Utils::getIndex("ac", "Shownews");

	if ($ac=="saveEdit")
	{
		$n = $news->saveEdit();
		?>
	    <script language="javascript">
			alert("Bài viết đã được cập nhập");
			window.location="index.php?mod=baiviet";
			</script>
    <?php
	}

	if ($ac !="delete")
		include ROOT."/admins/modules/baiviet/addvedit.php";
	if ($ac == "Shownews" )
		include ROOT."/admins/modules/baiviet/showbaiviet.php";
	if ($ac=="saveAdd")
	{
		$n = $news->saveAddNew();
		?>
	    <script language="javascript">
			alert("Đã thêm <?php echo $n;?> bài viết");
			window.location="index.php?mod=baiviet";
			</script>
    <?php
	}
	if ($ac=="delete")
	{
		$n = $news->delete(Utils::getIndex("id"));
		?>
	    <script language="javascript">
			alert("Đã xóa <?php echo $n;?> bài viết");
			window.location="index.php?mod=baiviet";
			</script>
    <?php
	}
        if ($ac == "search")
        {
  	        $key = isset($_POST["key"])?$_POST["key"]:"";
		$baiviet = new Baiviet();
		$page = Utils::getIndex("page", 1);
		$data = $baiviet->search($page, $key);
		$page_count = $baiviet->getPageCount();
  	        include ROOT."/admins/modules/baiviet/searchbaiviet.php";
        }
	?>	