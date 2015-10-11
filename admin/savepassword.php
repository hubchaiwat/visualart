<?php
session_start();
if($_SESSION['available'] != true)
{
	header("Location: index.php");
}
include("../config.inc.php");

if($_POST['oldpassword'] == $_SESSION['passdb'])
{
	if($_POST['newpassword1'] == $_POST['newpassword2'])
	{
		//get info1
		$sql = "UPDATE `art_db`.`users` SET `Password` = '".$_POST['newpassword1']."' WHERE `users`.`Username` = 'admin'";
		$sqlquery=mysql_query($sql);
		mysql_close();
		$_SESSION['savedpw'] = true;
	}
	else
	{
		$_SESSION['savedpw'] = false;
		$_SESSION['messagepw'] = "***รหัสผ่านในช่องรหัสผ่านใหม่ <br> และยืนยันรหัสผ่านใหม่ไม่ตรงกัน";
	}
}
else
{
	$_SESSION['savedpw'] = false;
	$_SESSION['messagepw'] = "***รหัสผ่านเดิมไม่ถูกต้อง";
}

?>
<script type="text/javascript">
window.location.href = 'changepassword.php';
</script>