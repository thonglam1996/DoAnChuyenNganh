<link rel="stylesheet" type="text/css" href="css/theloai.css">
<?php
$id = Utils::getIndex("id");
$r = $user->getById($id);
$ac2= "saveEdit";
$info ="CẬP NHẬT THÔNG TIN USER";
if (Count($r)==0) //khong co -> them moi
{
	$ac2="saveAdd";
	$info ="THÊM USER MỚI";
	$r["user"]="";
	$r["password"]="";
}
?>
<form action="index.php?mod=user&ac=<?php echo $ac2;?>" method="post">
<div class="fieldset">
  <div class="legend"><?php echo $info;?></div>
	<table width="50%" class="table_form">
	  <tr>
	    <td>Tên user</td>
	    <td><input type="text" name="fullname" value="<?php if($ac2 == "saveEdit") echo $r["fullname"];?>" required="required"></td>
	  </tr>
	  <tr>
	    <td>Email</td>
	    <td><input type="text" name="email" value="<?php if($ac2 == "saveEdit") echo $r["email"];?>" required="required"></td>
	  </tr>
	  <tr>
	    <td>Tên đăng nhập</td>
	    <td><input type="text" name="user" value="<?php echo $r["user"];?>" required="required"></td>
	  </tr>
	  <tr>
	    <td>Password</td>
	    <td><input type="password" name="password" style="width: 100%; height: 30px; outline: 0; border: 0; padding: 0 5px; margin-bottom: 10px;" required="required"></td>
	  </tr>
	  <tr>
	    <td colspan="2" style="text-align: right;">

		<input type="Reset" value="Reset">
	    <input type="submit" value="Go">
		<?php
	    
		?></td>
	    </tr>
	</table>
</div>
</form>
