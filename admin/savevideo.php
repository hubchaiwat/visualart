<?php
session_start();
if($_SESSION['available'] != true)
{
	header("Location: index.php");
}

include("../config.inc.php");

//update video1
$sql = "UPDATE `art_db`.`videos` SET `VideoLink` = '".$_POST['video1']."' WHERE `videos`.`VideoNo` = 1";
$sqlquery=mysql_query($sql);

//update video2
$sql = "UPDATE `art_db`.`videos` SET `VideoLink` = '".$_POST['video2']."' WHERE `videos`.`VideoNo` = 2";
$sqlquery=mysql_query($sql);

//update video3
$sql = "UPDATE `art_db`.`videos` SET `VideoLink` = '".$_POST['video3']."' WHERE `videos`.`VideoNo` = 3";
$sqlquery=mysql_query($sql);

//update video4
$sql = "UPDATE `art_db`.`videos` SET `VideoLink` = '".$_POST['video4']."' WHERE `videos`.`VideoNo` = 4";
$sqlquery=mysql_query($sql);

//update videoname1
$sql = "UPDATE `art_db`.`videos` SET `VideoName` = '".$_POST['name1']."' WHERE `videos`.`VideoNo` = 1";
$sqlquery=mysql_query($sql);

//update videoname2
$sql = "UPDATE `art_db`.`videos` SET `VideoName` = '".$_POST['name2']."' WHERE `videos`.`VideoNo` = 2";
$sqlquery=mysql_query($sql);

//update videoname3
$sql = "UPDATE `art_db`.`videos` SET `VideoName` = '".$_POST['name3']."' WHERE `videos`.`VideoNo` = 3";
$sqlquery=mysql_query($sql);

//update videoname4
$sql = "UPDATE `art_db`.`videos` SET `VideoName` = '".$_POST['name4']."' WHERE `videos`.`VideoNo` = 4";
$sqlquery=mysql_query($sql);
mysql_close();

$_SESSION['savedvideo'] = true;
header("Location: editvideo.php");
?>
<script type="text/javascript">
window.location.href = 'editvideo.php';
</script>