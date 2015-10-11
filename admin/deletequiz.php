<?php
session_start();
if($_SESSION['available'] != true)
{
	header("Location: index.php");
}


if($_POST['act'] == "แก้ไข")
{
	$_SESSION['quiznumber'] = $_POST['QuizNo'];
	header("Location: editexam.php");
}
else
{
include("../config.inc.php");
//delete seclected quiz
$QuizNo = $_POST['QuizNo'];
$lesson = $_SESSION['lesson'];
$sql = "DELETE FROM quizes WHERE LessonNo = $lesson AND QuizNo = $QuizNo";
$sqlquery=mysql_query($sql);
mysql_close();
$_SESSION['del_complete'] = true;
}

?>
<script type="text/javascript">
window.location.href = 'showlist.php';
</script>