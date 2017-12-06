<!--Phan header -->
<?php
if(isset($_SESSION["thongtindangnhap"]))
	header("location:index.php");
include "include/header.php";
?>


  
  <!--Phan login container -->
  <fieldset style="margin:20px auto; padding:36px; width:280px">
    <legend>Đăng nhập:</legend>
    <form name="contact" method="post" action="login.php">
      <table>
        <tbody>
          <tr>
            <td>Tên đăng nhập</td>
            <td><input type="text" name="username" required style="margin:6px; padding:2px"></td>
          </tr>
          <tr>
            <td>Mật khẩu</td>
            <td><input type="password" name="password" required style="margin:6px; padding:2px"></td>
          </tr>
          <tr>
            <td align="center"><input type="submit" name="submit" style="margin-left:40px; padding:5px"></td>
            <td align="center"><input type="reset" style="margin-left:20px; padding:5px"></td>
          </tr>
        </tbody>
      </table>
    </form>
  </fieldset>
  
  <div style=" width:450px; padding:5px; margin:10px auto"id="info"></div>
  
  <?php
$u = postIndex("username");
$p = postIndex("password");
if ($u !=="" && $p !="")
{
	$user = new User();
	$data = $user->login($u, md5($p));
	if (count($data) > 0)
	{
		if (!isset($_SESSION)) session_start();
		$_SESSION["thongtindangnhap"]= $data;
		//print_r($data);
		header("location:index.php");
		exit;
	}	
	else {
		?>
            <script>
            	document.getElementById("info").innerHTML = "Username hoặc mật khẩu không hợp lệ!";
				document.getElementById("info").style.backgroundColor = "red";
            </script>
            <?php
		}
}
?>
  <!-- Phan footer -->
  <?php
include "include/footer.php";
?>