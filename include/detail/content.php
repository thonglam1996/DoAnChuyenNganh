<div class="single-content">
    <div class="single-content-left">
      <?php 
	  	$baiviet = new Baiviet();
	  	include "main-article.php";
	  ?>
    </div>
    <aside class="single-sidebar">
      <div class="single-sidebar-title">
        <h4>TIN LIÊN QUAN THEO LOẠI</h4>
      </div>
      <div class="single-sidebar-content">
        <ul class="single-sidebar-post">
          <?php
          	include "related-article-column.php";
		  ?>
        </ul>
      </div>
    </aside>
    <aside class="single-sidebar">
      <div class="single-sidebar-title">
        <h4>XEM NHIỀU NHẤT CÁC LOẠI</h4>
      </div>
      <div class="single-sidebar-content">
        <ul class="single-sidebar-post">
          <?php 
		  	include "most-view-article-column.php";
		  ?>
        </ul>
      </div>
    </aside>
  </div>