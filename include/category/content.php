<?php
	
	$id_category = getIndex("id");
	$loaitin = new Loaitin();
	$loai_tin = $loaitin->getById($id_category);
	
	if($id_category == "" || count($loai_tin) <= 0)
	{
		echo "Yêu cầu không hợp lệ!";
		return;
	}
	
	$baiviet = new Baiviet();
	$page = getIndex("page", 1);
	
	if(!is_numeric($page))
	{
		echo "Yêu cầu không hợp lệ!";
		return;
	}
	
	$dstin = $baiviet->getAllByCategory($page, $id_category);
	$page_count = $baiviet->getPageCount();
	if($page_count <= 0)
	{
		echo "Chưa có dữ liệu!";
		return;
	}
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
        	<span style="text-transform:uppercase"><a href="index.php">Trang chủ</a></span> &nbsp; &nbsp; &nbsp; &gt; &nbsp; &nbsp; &nbsp;
            <span style="text-transform:uppercase"><?php echo $loai_tin["tenloaitin"] ;?></span>
        </div>
        
        <!-- Phan danh sach tin theo loai -->
        <div class="hor-nws-cat-list" style=" padding-bottom:40px">
          <?php
          	include "category-article-items.php";
		  ?>
        </div>
        
        <!--Ket thuc phan ds tn loai --> 
      </article>
      
      <style>
	  	div#pagination a,strong {padding-left:10px};
	  </style>
      <div id="pagination" style="text-align:center">
        <a href="index.php?mod=category&id=<?php echo $id_category;?>&page=1">&laquo; Đầu tiên</a><a href="index.php?mod=category&id=<?php echo $id_category;?>&page=<?php echo ($page-1)<=0?1:($page-1) ;?>">&laquo; Trang trước</a>
        <strong><?php echo $page ;?></strong>
        <a href="index.php?mod=category&id=<?php echo $id_category;?>&page=<?php echo ($page+1)>$page_count?$page_count:($page+1) ;?>">Trang kế &raquo;</a><a href="index.php?mod=category&id=<?php echo $id_category;?>&page=<?php echo $page_count ;?>">Cuối cùng &raquo;</a>
	</div>
      
    </div>
    <aside class="single-sidebar">
      <div class="single-sidebar-title">
        <h4>TIN CHỌN LỌC</h4>
      </div>
      <div class="single-sidebar-content">
        <ul class="single-sidebar-post">
          <?php
          	include "categoty-most-view-article-items.php";
		  ?>
        </ul>
      </div>
    </aside>
    <aside class="single-sidebar">
      <div class="single-sidebar-title">
        <h4>TIN NGẪU NHIÊN CÁC LOẠI</h4>
      </div>
      <div class="single-sidebar-content">
        <ul class="single-sidebar-post">
          <?php
          	include "random-article-column.php";
		  ?>
        </ul>
      </div>
    </aside>
  </div>