<?php
$dsbaiviet = $baiviet->getBaiVietDocNhieu(5, $baiviet->baiviettrentrangchitiet);

if(count($dsbaiviet) == 0)
{
	echo "Chua co du lieu";
	return;
}

for($i = 0; $i < count($dsbaiviet); $i++)
{
	?>
    	<li class="single-custom-post-items"> <a href="index.php?mod=detail&id=<?php echo $dsbaiviet[$i]["idbaiviet"] ;?>"><img src="images/<?php echo $dsbaiviet[$i]["anhminhhoa"] ;?>" class="single-custom-post-thumb"></a>
            <div class="single-custom-post-header"><a href="index.php?mod=detail&id=<?php echo $dsbaiviet[$i]["idbaiviet"] ;?>">
              <h2><?php  echo $dsbaiviet[$i]["tenbaiviet"];?></h2>
              </a></div>
            <div class="single-custom-post-excerpt">
              <p><?php echo $dsbaiviet[$i]["tomtat"] ;?></p>
            </div>
          </li>
    
    
    <?php
}