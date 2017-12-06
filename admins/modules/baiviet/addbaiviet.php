
<script language="javascript" src="ckeditor/ckeditor.js" type="text/javascript"></script>
<form action="index.php?mod=baiviet&ac=saveAdd" method="post" enctype="multipart/form-data">
<div class="fieldset">
  <div class="legend"><?php echo $info;?></div>
  <table width="50%" class="table_bai_viet">
    
    <tr>
      <th>Tên bài viết</th>
      <td><input type="text" name="tenbaiviet"></td>
    </tr>
    <tr>
      <th>Hình đại diện</th>
      <td><input type="file" name="anhminhhoa"></td>
    </tr>
    <tr>
      <th>Tóm tắt</th>
      <td><textarea name="tomtat" style="min-width: 100%; height: 100px;"></textarea></td>
    </tr>
    <tr>
      <th>Nội dung</th>
      <td><textarea id="noidung" name="noidung"></textarea>
<script type="text/javascript">CKEDITOR.replace( 'noidung'); </script></td>
    </tr>
    <tr>
      <th>Thuộc thể loại</th>
      <td>
        <?php  
          
          $loaitin = new Loaitin();
          $test = $loaitin->getAll();
        ?>
        <select name="idloaitin">
          <?php foreach ($test as $r) {
            ?><option value="<?php echo $r["idloaitin"]?>"><?php echo $r["tenloaitin"] ?></option> <?php
          } ?>
        </select>
      </td>
    </tr>
    <tr>
      <th>Trạng thái</th>
      <td>
        <select name="trangthaihienthi">
          
            <option value="0">Không hiển thị</option>
            <option value="1">Hiển thị</option>
          
        </select>
      </td>
    </tr>
    <tr>
    <tr>
      <th>Thứ tự</th>
      <td><input type="text" name="thutu"></td>
    </tr>
    <tr>
      <td colspan="2" style="text-align: right;">

  	<input type="Reset" value="Reset">
      <input type="submit" value="Add new">
  	<?php
      
  	?></td>
      </tr>
  </table>
</div>
</form>