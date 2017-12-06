<div class="single-content"> 
    <!--Bat dau phan tin cot trai-->
    <div class="single-content-left"> 
      <!-- Phan tin hien thi dau tien TRANG CHU -->
      
      <?php
	  $baiviet = new Baiviet();
	  ?>
      
      <?php
      	include "main-article.php";
	  ?>
      
      <!-- Phan tin theo luoi o vuong -->
      <div class="related-post">
        <?php 
			include "square-latest-article-rows.php";
		?>
      </div>
      
      <!-- Phan tin don ngang -->
      <div class="hor-nws-cat-list">
        <?php
        	include "horizontal-latest-article-items.php";
		?>
        
      </div>
    </div>
    <!--Ke thuc phan tin o cot trai  --> 
    
    <!-- Phan tin theo cot -->
    <aside class="single-sidebar">
      <div class="single-sidebar-content">
        <ul class="single-sidebar-post">
          <!-- Loai tin dau tien-->
          <?php 
		  	include "category-news-columns.php";
		  ?>
          
        </ul>
      </div>
    </aside>
    
    <!-- Phan tin xem nhieu nhat -->
    <aside class="single-sidebar">
      <div class="single-sidebar-content">
        <ul class="single-sidebar-post">
          <div class="single-sidebar-title">
            <h4>XEM NHIỀU NHẤT</h4>
          </div>
          <!-- Khog thay doi chu 'Xem nhieu nhat' o day-->
          <?php
          	include "most-view-article-items.php";
		  ?>
          
        </ul>
      </div>
    </aside>
  </div>