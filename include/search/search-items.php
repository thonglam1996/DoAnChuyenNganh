<?php
for($i = 0; $i < count($dstin); $i++)
{
	?>
    	<article class="hor-nws-cat-list-item" style="margin:0px; padding:0px; margin-top:40px;">
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