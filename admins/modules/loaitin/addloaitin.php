<form action="index.php?mod=loaitin&ac=saveAdd" method="post">
<div class="fieldset">
  <div class="legend"><?php echo $info;?></div>
  <table width="50%" class="table_form">
    
    <tr>
      <td>Tên loại tin</td>
      <td><input type="text" name="tenloaitin" required="required"></td>
    </tr>
    <tr>
      <td>Trạng thái</td>
      <td>
        <select name="trangthaihienthi">
          
            <option value="0">Không hiển thị</option>
            <option value="1">Hiển thị</option>
          
        </select>
      </td>
    </tr>
    <tr>
    <tr>
      <td>Thứ tự</td>
      <td><input type="text" name="thutu" required="required"></td>
    </tr>
      <td colspan="2" style="text-align: right;">

  	<input type="Reset" value="Reset">
      <input type="submit" value="Add new">
  	<?php
      
  	?></td>
      </tr>
  </table>
</div>
</form>