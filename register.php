<?php
include "include/header.php";
?>
  <!--Phan register container -->
<?php
if(isset($_SESSION["thongtindangnhap"]))
	header("location:index.php");

$username 	= postIndex("username");
$email 		= postIndex("email");
$password1	= postIndex("password1");
$password2	= postIndex("password2");
$name		= postIndex("name");
$sm 		= postIndex("submit");

//print_r($_POST);

?>

<style>
.info{width:600px; color:#06C; background:#0FF; margin:0 auto}
</style>

<fieldset style="margin:20px auto; padding:36px; width:280px">
    <legend>Đăng ký:</legend>
    <form method="post" action="register.php">
      <table>
        <tbody>
          <tr>
            <td>Tên đăng nhập</td>
            <td><input type="text" name="username" value="<?php echo $username;?>" required style="margin:6px; padding:2px"></td>
          </tr>
          <tr>
            <td>Email</td>
            <td><input type="email" name="email" value="<?php echo $email;?>" required style="margin:6px; width:165px; height:20px"></td>
          </tr>
          <tr>
            <td>Mật khẩu</td>
            <td><input type="password" name="password1" required style="margin:6px; padding:2px"></td>
          </tr>
          <tr>
            <td>Nhập lại mật khẩu</td>
            <td><input type="password" name="password2" required style="margin:6px; padding:2px"></td>
          </tr>
          <tr>
            <td>Họ tên</td>
            <td><input type="text" name="name" value="<?php echo $name;?>" required style="margin:6px; padding:2px"></td>
          </tr>
          <tr>
            <td align="center"><input type="submit" name="submit" style="margin-left:40px; padding:5px"></td>
            <td align="center"><input type="reset" style="margin-left:40px; padding:5px"></td>
          </tr>
        </tbody>
      </table>	
    </form>
  </fieldset>
<?php

//var_dump($sm);

if ($sm != "")
{
	$err= "";
	$user = new User();
	
	if(!isValidName($username))		$err .="Username không được chứa kí tự đặc biệt!<br>";
	if (strlen($username)<6 ) 		$err .="Username ít nhất phải 6 ký tự!<br>"; 
	if ($password1!= $password2) 	$err .="Mật khẩu và mật khẩu nhập lại không khớp. <br>";
	if(strlen($password1)<8) 		$err .="Mật khẩu phải ít nhất 8 ký tự.<br>";
	if(!isStrongPassword($password1)) 		$err .="Mật khẩu phải có ít nhất 1 ký tự hoa, thường, số và kí tự đặc biệt.<br>";
	if(!isValidName($name))			$err .="Họ tên không được chứa kí tự đặc biệt!<br>";
	if(str_word_count($name)<2) 	$err .="Họ tên phải chứa ít nhất 2 từ ";
	
	if($user->isUserNameExist($username))	{$err="";$err .="Username đã tồn tại!<br>";}
		
	?>	
    <div class="info">
    	<?php 
			if ($err !="") 
			{echo $err; $_POST["submit"] = "";}
			else
			  {
				//$user = new User();
				$n = $user->register($username, md5($password1), $email, $name);
				if($n <= 0)
				{
					echo "Server bị lỗi. Xin thử lại sau!";
				}
				else
				{
					echo "Đăng kí thành công! Đang chuyển sang trang chủ";
					?>
                    <script>
					function chuyentrang()
					{
						window.location.href = 'index.php';
					}
					window.setTimeout(chuyentrang,2000);		
                    </script>
                    <?php
				}
				
			}
			//$_POST["submit"] = "";
		?>
    </div>
    <?php

}
?>
  
  <!-- Phan footer -->
  <?php
include "include/footer.php";
?>