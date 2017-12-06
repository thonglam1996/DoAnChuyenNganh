<?php
	$dsloai = $loai -> getAll();
	shuffle($dsloai);
	//print_r($dsloai);
	
	$j = 0;
	$dem = 0;
	while($dem < 3 && $j < count($dsloai)) // lay 3 the loai tin hien ra trang chu
	{
		if($dsloai[$j]["trangthaihienthi"] != 0)
		{
			$idloaitin = $dsloai[$j]["idloaitin"];
			$dsbaiviet = $baiviet->getBaiVietMoiTheoLoai(3, $idloaitin, $baiviet->baiviettrentrangchu);
			if(count($dsbaiviet) == 0) /*Neu khong co tin nao thuoc loai tin do thi xet cac tin khac*/
			{
				$j++;
				//$dem++;
				continue;
			}
			?>

<div class="single-sidebar-title">
  <h4><?php echo $dsloai[$j]["tenloaitin"];?></h4>
</div>
<li class="single-custom-post-items"> <a href="index.php?mod=detail&id=<?php echo $dsbaiviet[0]["idbaiviet"];?>"><img src="images/<?php echo $dsbaiviet[0]["anhminhhoa"];?>" class="single-custom-post-thumb"></a>
  <div class="single-custom-post-header"> <a href="index.php?mod=detail&id=<?php echo $dsbaiviet[0]["idbaiviet"];?>">
    <h2><?php echo $dsbaiviet[0]["tenbaiviet"];?></h2>
    </a> </div>
  <div class="single-custom-post-excerpt">
    <p><?php echo $dsbaiviet[0]["tomtat"];?></p>
  </div>
  <div class="article-list-section">
    <ul class="article-list">
      <?php
					if(count($dsbaiviet) <= 1)
					{
						$dem++;
						$j++;
						continue;
					}
                	for($i = 1; $i < count($dsbaiviet); $i++)
					{
						?>
      <li class="article-item">
        <div class="image"> <a href="index.php?mod=detail&id=<?php echo $dsbaiviet[$i]["idbaiviet"];?>"><img src="images/<?php echo $dsbaiviet[$i]["anhminhhoa"];?>" class="article-item-image"></a> </div>
        <div class="article-item-title"><a href="index.php?mod=detail&id=<?php echo $dsbaiviet[$i]["idbaiviet"];?>"><?php echo $dsbaiviet[$i]["tenbaiviet"];?></a></div>
      </li>
      <?php
					}
				?>
    </ul>
  </div>
</li>
<?php
			$dem++;
		}
		$j++;
	}