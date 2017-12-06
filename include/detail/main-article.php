<?php
	$id = getIndex("id");
	$tinchitiet = $baiviet->getById($id);
	if($id != "" && count($tinchitiet)>0)
	{
		$baiviet ->baiviettrentrangchitiet[] = $tinchitiet["idbaiviet"];
		$baiviet ->tangView($id);
		$loaitin = $baiviet->getLoaiTin($id);
		?>
        <article class="single-content-left-article"> 
        <!--Nội dung bài viết post-content-->
        
        <div id="contact-nav" style="margin-bottom:20px">
        	<span style="text-transform:uppercase"><a href="index.php">Trang chủ</a></span> &nbsp; &nbsp; &nbsp; &gt; &nbsp; &nbsp; &nbsp;
            <span style="text-transform:uppercase"><a href="index.php?mod=category&id=<?php echo $loaitin["idloaitin"] ;?>"><?php echo $loaitin["tenloaitin"] ;?></a></span>
            &nbsp; &nbsp; &nbsp; &gt; &nbsp; &nbsp; &nbsp;
            <span><?php echo $tinchitiet["tenbaiviet"] ;?></span>
        </div>
        
        <div class="single-content-left-article-header">
          <h1 class="entry-title"><?php echo $tinchitiet["tenbaiviet"] ;?></h1>
        </div>
        <div class="single-content-left-article-post" style="width: 100%;">
        
        <div id="contact-nav" style="margin-bottom:20px">
        	<span style="font-size:14px; font-weight:lighter">Ngày đăng:&nbsp;&nbsp;<?php echo $tinchitiet["ngaydang"];?></span>
            <span style="font-size:14px; font-weight:lighter; margin-left:20px">Lượt xem:&nbsp;&nbsp;<?php echo $tinchitiet["luotxem"];?></span>
        </div>
        
          <p><strong><?php echo $tinchitiet["tomtat"] ;?></strong> <!--<img src="images/<?php echo $tinchitiet["anhminhhoa"] ;?>"> --></p>
          <style>
          	#noidung p {margin-bottom:16px; font-family:Arial, Helvetica, sans-serif; font-size:14px};
          </style>
          <div id="noidung">
          	<?php echo $tinchitiet["noidung"] ;?>
          <div>
          
          <div style=" margin-top:60px; padding:20px; padding-left:0">
            <?php
				$comment = new Comment();
				$ds_comment = $comment->getById($id);
				$ac = getIndex("ac");
				$content = postIndex("content");
				if($ac == "comment")
				{
					if(isset($_SESSION["thongtindangnhap"]))
					{
						date_default_timezone_set('Asia/Ho_Chi_Minh');
						$date = date('Y-m-d H:i:s');
						$user = $_SESSION["thongtindangnhap"];
						$n = $comment->themComment($id, $user["user"], addslashes($content), $date);
						
						?>
                        <script>
							window.location.href = 'index.php?mod=detail&id=<?php echo $id ;?>';
                        </script>
                        <?php
					}
					else
					{
						?>
                        	<script language="javascript">
        						ans = confirm("Bạn chưa đăng nhập, đăng nhập?");
								if(ans == true)
								{ window.location.href = 'login.php';}
        					</script>
                        <?php
					}
				}
				
				
			?>
            
          	<b> <?php echo count($ds_comment); ?> Comments:</b><br />
            
				<?php for($i = 0; $i < count($ds_comment); $i++) {?>
                <b><i><?php echo nl2br (htmlentities($ds_comment[$i]['user'])) ?> 
                </i></b><br /><i>viết vào ngày: <?php echo $ds_comment[$i]['ngaydang'] ?>
                </i><br />
                <?php echo nl2br (htmlentities($ds_comment[$i]['noidung'])) ?>
                <br /><br />
                <?php } 
                ?>
            <form method="POST" action="index.php?mod=detail&id=<?php echo $id;?>&ac=comment">
                <table border="0px">
                    <tr>
                        <td><textarea style="max-width:800px; margin-top:10px; padding:10px" name="content" rows="5" cols="80"></textarea><td>
                    </tr>
                    <tr>
                        <td colspan="2" align="right"><input style="width:80px; height:30px" type="submit" value="Bình luận" name="submit"></td>
                    </tr>
                </table>
            </form>
          </div>
        </div>
        </article>
		<?php
	}
	else
	{
		echo "Yêu cầu không hợp lệ!";
		return;
	}
?>

