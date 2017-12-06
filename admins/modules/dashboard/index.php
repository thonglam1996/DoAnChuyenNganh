<style type="text/css">
	.wrapper {box-sizing: border-box; display: flex; flex-flow: wrap;}
	.wrapper .cont {width: 25%; height: 150px;  padding: 5px;}
	.wrapper .responsive {height: 100%; width: 100%; position: relative;}
	.wrapper .responsive img {margin: 10px 0 20px 10px;}
	.wrapper .title-re {color: white; font-size: 25px; margin-left: 10px;}
	.wrapper .solieu {color: white; position: absolute; right: 10px; top: 30px; font-size: 25px;}
	
</style>
<div class="wrapper">
<div class="cont">
	<div class="responsive" style="background-color: #FF5252;">
		<?php 
			$news = new News();
	    $data = $news->getAll();
	    $lx = 0;
	    foreach ($data as $r) {
	    	$lx += $r["luotxem"];
	    }
		?>
		<img src="img/view.png">
		<p class="title-re">Views</p>
		<p class="solieu"><?php echo $lx;?></p>
	</div>
</div>
	
<div class="cont">
	<div class="responsive" style="background-color: #009688;">
	<?php 
		$news = new News();
    $r = $news->getAll();
    $sl = count($r);
	?>
		<img src="img/newspaper.png">
		<p class="title-re">Số bài viết</p>
		<p class="solieu"><?php echo $sl;?></p>
	</div>
</div>
<div class="cont">
	<div class="responsive" style="background-color: #FFC107;">
	<?php 
		$user = new User();
    $r = $user->getAll();
    $sl = count($r);
	?>
		<img src="img/multiple-users-silhouette.png">
		<p class="title-re">Users</p>
		<p class="solieu"><?php echo $sl;?></p>
	</div>
</div>
<div class="cont">
	<div class="responsive" style="background-color: #2196F3;">
		<img src="img/share.png">
		<p class="title-re">Shares</p>
		<p class="solieu">10000</p>
	</div>
</div>

</div>
<div class="wrapper two" style="height: 400px; align-items: flex-end; border-width: 0 0 3px 3px; margin-top: 30px; border-style: solid;">
	<div style="height: 5%; width: 5%; background-color: tomato"></div>
	<div style="height: 35%; width: 5%; background-color: tomato"></div>
	<div style="height: 45%; width: 5%; background-color: tomato"></div>
	<div style="height: 55%; width: 5%; background-color: tomato"></div>
	<div style="height: 60%; width: 5%; background-color: tomato"></div>
	<div style="height: 68%; width: 5%; background-color: tomato"></div>
	<div style="height: 56%; width: 5%; background-color: tomato"></div>
	<div style="height: 55%; width: 5%; background-color: tomato"></div>
	<div style="height: 70%; width: 5%; background-color: tomato"></div>
	<div style="height: 78%; width: 5%; background-color: tomato"></div>
	<div style="height: 79%; width: 5%; background-color: tomato"></div>
	<div style="height: 79%; width: 5%; background-color: tomato"></div>
	<div style="height: 80%; width: 5%; background-color: tomato"></div>
	<div style="height: 85%; width: 5%; background-color: tomato"></div>
	<div style="height: 70%; width: 5%; background-color: tomato"></div>
	<div style="height: 89%; width: 5%; background-color: tomato"></div>
	<div style="height: 90%; width: 5%; background-color: tomato"></div>
	<div style="height: 94%; width: 5%; background-color: tomato"></div>
	<div style="height: 90%; width: 5%; background-color: tomato"></div>
	<div style="height: 95%; width: 5%; background-color: tomato"></div>
</div>