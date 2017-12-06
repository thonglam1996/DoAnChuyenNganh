<form action="index.php?mod=ttadmin&ac=saveEdit" method="post" enctype="multipart/form-data">
<div class="fieldset">
  <div class="legend"><?php echo $info;?></div>
	<table width="50%" class="table_form">
		<tr>
	    <td >ID</td>
	    <td ><input type="text" name="idadmin" required="required" value="<?php echo $r["idadmin"];?>" readonly="readonly" value="<?php echo $r["idadmin"];?>" style="background-color: rgba(0,0,0,0.4); color: white"></td>
	  </tr>
	  <tr>
	    <td >Tên admin</td>
	    <td ><input type="text" name="tenadmin" required="required" value="<?php echo $r["tenadmin"];?>"></td>
	  </tr>
	  <tr>
	    <td >Tên đăng nhập</td>
	    <td ><input type="text" name="admin" required="required" value="<?php echo $r["admin"];?>"></td>
	  </tr>
	  <tr>
	    <td>Password</td>
	    <td><input type="password" name="password" style="width: 100%; height: 30px; outline: 0; border: 0; padding: 0 5px; margin-bottom: 10px;" required="required"></td>
	  </tr>
	  <tr>
	    <td >Hình đại diện</td>
	    <td ><input type="file" name="hinhdaidien" ></td>
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