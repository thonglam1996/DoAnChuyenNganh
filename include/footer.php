<div id="footer">
  <div id="top-footer">
    <div style="width:450px; padding:20px; height:100%"> Công ty T &amp; D.<br>
      Giấy phép hoạt động BáoVN trên Internet số 1234, Ngày 04/12/2016.<br>
      Tòa soạn: Cao Lỗ, Phường 4, Quận 8, TPHCM.<br>
      Điện thoại: 0123456789.<br>
      Email: abcd@gmail.com. <br>
      All right reserved <br>
      Your IP: <span id="user-info"></span><br>
      GMT+7: <span id="user-time"></span><br>
    </div>
  </div>
  <div id="sub-footer" style="background-color:#1F1E1E;">
    <ul class="sub-footer-menu">
      <li class="sub-footer-menu-content"><a href="index.php?mod=contact">Liên hệ</a></li>
    </ul>
  </div>
  <div id="sub-footer">
    <ul class="sub-footer-menu" style="float:left; margin-left:20px">
    
      <?php
	  	$dsloai = $loai -> getAll();
	  	$dsloai = array_reverse($dsloai);
	  	foreach($dsloai as $loaitin)
		{
			if($loaitin["trangthaihienthi"] != 0)
			{
				?>
				<li class="sub-footer-menu-content"><a href="index.php?mod=category&id=<?php echo $loaitin["idloaitin"];?>"><?php echo $loaitin["tenloaitin"];?></a></li>
				<?php
			}
		}
	  ?>
      <li class="sub-footer-menu-content"><a href="index.php">Trang chủ</a></li>
    </ul>
  </div>
  <div id="footer-copyright">
    <p>Copyright © 2016</p>
  </div>
</div>
</div>
</body></html>