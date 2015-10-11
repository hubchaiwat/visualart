<?php
session_start();
if($_SESSION['available'] != true)
{
	header("Location: index.php");
}

include("../config.inc.php");

//get info1
$sql = "UPDATE `art_db`.`info` SET `Info` = '".$_POST['info1']."' WHERE `info`.`InfoNo` = 1";
$sqlquery=mysql_query($sql);

//get info2
$sql = "UPDATE `art_db`.`info` SET `Info` = '".$_POST['info2']."' WHERE `info`.`InfoNo` = 2";
$sqlquery=mysql_query($sql);

//get info3
$sql = "UPDATE `art_db`.`info` SET `Info` = '".$_POST['info3']."' WHERE `info`.`InfoNo` = 3";
$sqlquery=mysql_query($sql);

//get info4
$sql = "UPDATE `art_db`.`info` SET `Info` = '".$_POST['info4']."' WHERE `info`.`InfoNo` = 4";
$sqlquery=mysql_query($sql);

//get info5
$sql = "UPDATE `art_db`.`info` SET `Info` = '".$_POST['info5']."' WHERE `info`.`InfoNo` = 5";
$sqlquery=mysql_query($sql);
mysql_close();

$_SESSION['savedinfo'] = true;
?>
<script type="text/javascript">
window.location.href = 'editinfo.php';
</script>