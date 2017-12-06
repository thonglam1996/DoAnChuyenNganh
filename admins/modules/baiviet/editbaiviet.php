<script language="javascript" src="ckeditor/ckeditor.js" type="text/javascript"></script>
<form action="index.php?mod=baiviet&ac=saveEdit" method="post" enctype="multipart/form-data">
<div class="fieldset">
  <div class="legend"><?php echo $info;?></div>
  <table width="50%" class="table_bai_viet">
    <tr>
      <th>ID bài viết</th>
      <td><input type="text" name="idbaiviet" value="<?php echo $r["idbaiviet"];?>" readonly="readonly" style="background-color: rgba(0,0,0,0.4); color: white"></td>
    </tr>
    <tr>
      <th>Tên bài viết</th>
      <td><input type="text" name="tenbaiviet" value="<?php echo $r["tenbaiviet"];?>"></td>
    </tr>
    <tr>
      <th>Hình đại diện</th>
      <td><input type="file" name="anhminhhoa"><br><img src="../images/<?php echo $r["anhminhhoa"];?>" style="width: 350px;">
      <input type="text" name="anhminhhoatwo" value="<?php echo $r["anhminhhoa"]; ?>" style="display: none;">
      </td>
    </tr>
    <tr>
      <th>Tóm tắt</th>
      <td><textarea name="tomtat" style="min-width: 100%; height: 100px;" ><?php echo $r["tomtat"];?></textarea></td>
    </tr>
    <tr>
      <th>Nội dung</th>
      <td><textarea id="noidung" name="noidung"><?php echo $r["noidung"];?></textarea>
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
          <option value="<?php echo $r["idloaitin"]?>" selected><?php echo $r["tenloaitin"] ?></option>
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
          
            <option value="0" <?php if($r["trangthaihienthi"]==0) echo "selected";?>>Không hiển thị</option>
           <option value="1" <?php if($r["trangthaihienthi"]==1) echo "selected";?>>Hiển thị</option>
          
        </select>
      </td>
    </tr>
    <tr>
    <tr>
      <th>Thứ tự</th>
      <td><input type="text" name="thutu" value="<?php echo $r["thutu"] ?>"></td>
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