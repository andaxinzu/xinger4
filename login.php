<?php
include './config.inc.php';
include './uc_client/client.php';
if (empty($_POST['uname'])){
?>
<from action='' method='post'>
用户名<input type='text' name='uname'><br>
密码<input type='password' name='pwd'><br>
<input type='submit' value='登录'><br>
<?php
}else{
		list($uid, $username, $password, $email) = uc_user_login($_POST['username'], $_POST['password']);
	if($uid > 0) {
		echo '登录成功';
	} elseif($uid == -1) {
		echo '用户不存在,或者被删除';
	} elseif($uid == -2) {
		echo '密码错误';
	} else {
		echo '未知错误';
	}
}
?>
