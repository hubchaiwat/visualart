<?php
session_start();
include("../config.inc.php");

//get truth choice1
$sql = "SELECT * FROM `users`";
$sqlquery=mysql_query($sql);

$array = mysql_fetch_array($sqlquery);
$_SESSION['userdb'] = $array['Username'];
$_SESSION['passdb'] = $array['Password'];

mysql_close();

if(($_SESSION['loginuser']==$_SESSION['userdb'])&&($_SESSION['loginpass']==$_SESSION['passdb']))
{
	$_SESSION['available'] = true;
}
else
{
	$_SESSION['available'] = false;
}
?>
<script type="text/javascript">
window.location.href = 'editinfo.php';
</script>