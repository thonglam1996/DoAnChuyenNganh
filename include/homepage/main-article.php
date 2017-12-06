<?php
$dsbaiviet = $baiviet->getBaiVietMoi(1, $baiviet->baiviettrentrangchu);
if(count($dsbaiviet) == 0)
{
	echo "Chua co du lieu";
	return;
}
?>
<article>
        <figure> <a href="index.php?mod=detail&id=<?php echo $dsbaiviet[0]["idbaiviet"];?>"><img class="main-article-image-thumb" src="images/<?php echo $dsbaiviet[0]["anhminhhoa"];?>"></a> </figure>
        <div>
          <div class="main-post-header"> <a href=index.php?mod=detail&id=<?php echo $dsbaiviet[0]["idbaiviet"];?>><?php echo $dsbaiviet[0]["tenbaiviet"];?></a> </div>
          <div class="main-post-excerpt">
            <p><?php echo $dsbaiviet[0]["tomtat"];?></p>
          </div>
        </div>
      </article>