<?php
for($i = 0; $i < count($dstin); $i++)
{
	$baiviet->baiviettrentrangloaitin[] = $dstin[$i]["idbaiviet"]; // luu vao ds de xet xem bai viet co bi trung tren trang chi tiet hay khong
	?>
    	<article class="hor-nws-cat-list-item">
            <figure class="hor-nws-cat-list-item-picture"> <a href="index.php?mod=detail&id=<?php echo $dstin[$i]["idbaiviet"] ;?>"><img class="hor-nws-cat-list-item-thumb" src="images/<?php echo $dstin[$i]["anhminhhoa"] ;?>"></a> </figure>
            <div class="hor-nws-cat-list-item-content" style="width:345px">
              <div class="hor-nws-cat-list-item-content-header"> <a href="index.php?mod=detail&id=<?php echo $dstin[$i]["idbaiviet"] ;?>"><?php echo $dstin[$i]["tenbaiviet"];?></a> </div>
              <div class="hor-nws-cat-list-item-content-excerpt">
                <p><?php echo $dstin[$i]["tomtat"];?></p>
              </div>
            </div>
          </article>
          <div style="clear: both"></div>
    <?php
	
}