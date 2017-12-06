<?php
$dsbaiviet = $baiviet->getBaiVietNgauNhien(5);
if(count($dsbaiviet) == 0)
{
	echo "Chua co du lieu";
	return;
}
for($i = 0; $i < count($dsbaiviet); $i++)
{
	?>
    	<li class="custom-article-items"> <a href="index.php?mod=detail&id=<?php echo $dsbaiviet[$i]["idbaiviet"] ;?>"><img src="images/<?php echo $dsbaiviet[$i]["anhminhhoa"] ;?>" class="custom-article-thumb"></a>
              <div class="custom-article-header"><a href="index.php?mod=detail&id=<?php echo $dsbaiviet[$i]["idbaiviet"] ;?>"> <?php echo $dsbaiviet[$i]["tenbaiviet"] ;?> </a></div>
            </li>
    <?php
}
?>
