<?php
	$baiviet = new Baiviet();
	$page = getIndex("page", 1);
	//print_r($page);
	if(!is_numeric($page))
	{
		echo "Yêu cầu không hợp lệ!";
		return;
	}
	
	$key = getIndex("search");
	$dstin = $baiviet->search($page, $key);
	$page_count = $baiviet->getPageCount();
	
	if($page_count <= 0)
	{
		echo "Không tìm thấy kết quả!";
		return;
	}
	else
	if($page <= 0 || $page > $page_count)
	{
		echo "Yêu cầu không hợp lệ!";
		return;
	}
?>

<div class="single-content">
    <div class="single-content-left">
      <article class="single-content-left-article">
      
        <div id="contact-nav" style="margin-bottom:20px">
        	<span style="text-transform:uppercase">Kết quả tìm kiếm:</span>
            <span><?php echo $key ;?></span>
        </div>
        
        <!-- Phan danh sach tin theo loai -->
        <div class="hor-nws-cat-list" style=" padding-bottom:40px">
          <?php
          	include "search-items.php";
		  ?>
        </div>
        
        <!--Ket thuc phan ds tn loai --> 
      </article>
      
      <style>
	  	div#pagination a,strong {padding-left:10px};
	  </style>
      <div id="pagination" style="text-align:center">
        <a href="index.php?search=<?php echo $key;?>&page=1">&laquo; Đầu tiên</a><a href="index.php?search=<?php echo $key;?>&page=<?php echo ($page-1)<=0?1:($page-1) ;?>">&laquo; Trang trước</a>
        <strong><?php echo $page ;?></strong>
        <a href="index.php?search=<?php echo $key;?>&page=<?php echo ($page+1)>$page_count?$page_count:($page+1) ;?>">Trang kế &raquo;</a><a href="index.php?search=<?php echo $key;?>&page=<?php echo $page_count ;?>">Cuối cùng &raquo;</a>
	</div>
    </div>
    </div>