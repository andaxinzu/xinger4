<?php
include './config.inc.php';
include './uc_client/client.php';
if (empty($_POST['uname'])){
?>
<form action='#' method='post'>
用户名<input type='text' name='uname'><br>
密码<input type='password' name='pwd'><br>
<input type='submit' value='登录'><br>
</form>
<?php
}else{
	$uname=$_POST['uname'];
	$pwd=$_POST['pwd'];
		list($uid, $username, $password, $email) = uc_user_login($uname,$pwd);
		echo $uid;
}
?>
