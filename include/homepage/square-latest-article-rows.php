
<!--In du lieu ra hai dong ngang, moi dong 3 tin -->

<?php
	for($i = 0; $i < 2; $i++)
	{
		$dsbaiviet = $baiviet->getBaiVietMoi(3, $baiviet->baiviettrentrangchu);
		if(count($dsbaiviet) == 0)
		{
			echo "Chua co du lieu";
			return;
		}
		?>
		<div class="related-post-content">
			<?php
				$dem = 0;
				while($dem < count($dsbaiviet))
				{
					?>
					<div class="related-post-content-col"> <a href="index.php?mod=detail&id=<?php echo $dsbaiviet[$dem]["idbaiviet"];?>"><img src="images/<?php echo $dsbaiviet[$dem]["anhminhhoa"];?>"></a>
			<h4><a href="index.php?mod=detail&id=<?php echo $dsbaiviet[$dem]["idbaiviet"];?>"><?php echo $dsbaiviet[$dem]["tenbaiviet"];?></a></h4>
		  </div>
					<?php
					$dem++;
				}
			?>
		</div>
        <?php
	}