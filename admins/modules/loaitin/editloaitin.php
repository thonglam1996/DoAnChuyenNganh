<form action="index.php?mod=loaitin&ac=saveEdit" method="post">
<div class="fieldset">
  <div class="legend"><?php echo $info;?></div>
	<table width="50%" class="table_form">
		<tr>
	    <td>ID</td>
	    <td><input type="text" name="idloaitin" readonly="readonly" value="<?php echo $r["idloaitin"];?>" style="background-color: rgba(0,0,0,0.4); color: white"></td>
	  </tr>
	  <tr>
	    <td>Tên loại tin</td>
	    <td><input type="text" name="tenloaitin" value="<?php echo $r["tenloaitin"];?>"></td>
	  </tr>
	  <tr>
	    <td>Trạng thái</td>
	    <td>
	      <select name="trangthaihienthi">
	       
	         <option value="0" <?php if($r["trangthaihienthi"]==0) echo "selected";?>>Không hiển thị</option>
	         <option value="1" <?php if($r["trangthaihienthi"]==1) echo "selected";?>>Hiển thị</option>
	      </select>
	    </td>
	  </tr>
	  <tr>
      <td>Thứ tự</td>
      <td><input type="text" name="thutu" value="<?php echo $r["thutu"];?>"></td>
    </tr>
	  <tr>
	    <td colspan="2" style="text-align: right;">

		<input type="Reset" value="Reset">
	    <input type="submit" value="Update">
		<?php
	    
		?></td>
	    </tr>
	</table>
</div>
</form>