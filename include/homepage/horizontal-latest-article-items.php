<?php
$dsbaiviet = $baiviet->getBaiVietMoi(4, $baiviet->baiviettrentrangchu);
if(count($dsbaiviet) == 0)
{
	echo "Chua co du lieu";
	return;
}
?>

<?php
	for($i = 0; $i < count($dsbaiviet); $i++)
	{
		?>
		<article class="hor-nws-cat-list-item">
  <figure class="hor-nws-cat-list-item-picture"> <a href="index.php?mod=detail&id=<?php echo $dsbaiviet[$i]["idbaiviet"];?>"><img class="hor-nws-cat-list-item-thumb" src="images/<?php echo $dsbaiviet[$i]["anhminhhoa"];?>"></a> </figure>
  <div class="hor-nws-cat-list-item-content">
    <div class="hor-nws-cat-list-item-content-header"> <a href="index.php?mod=detail&id=<?php echo $dsbaiviet[$i]["idbaiviet"];?>"><?php echo $dsbaiviet[$i]["tenbaiviet"];?></a> </div>
    <div class="hor-nws-cat-list-item-content-excerpt">
      <p><?php echo $dsbaiviet[$i]["tomtat"];?></p>
    </div>
  </div>
</article>
<div style="clear:both"></div>
<?php
	}