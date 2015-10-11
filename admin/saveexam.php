<?php
session_start();
if($_SESSION['available'] != true)
{
	header("Location: index.php");
}

include("../config.inc.php");

$lesson = $_SESSION['lesson'];
$question = $_POST['question'];
$ans1 = $_POST['ans1'];
$ans2 = $_POST['ans2'];
$ans3 = $_POST['ans3'];
$ans4 = $_POST['ans4'];
$truth = $_POST['truth'];

//get max number of quizes in the lesson

$sql = "SELECT *  FROM `quizes` WHERE `LessonNo` = $lesson";
$sqlquery=mysql_query($sql);

$max = mysql_num_rows($sqlquery);
$max = $max+1;

//insert new quiz

$sql = "INSERT INTO `art_db`.`quizes` (`LessonNo`, `QuizNo`, `Question`, `Ans1`, `Ans2`, `Ans3`, `Ans4`, `Truth`) VALUES ('$lesson', '$max', '$question', '$ans1', '$ans2', '$ans3', '$ans4', '$truth');";
$sqlquery=mysql_query($sql);

mysql_close();

$_SESSION['savedexam'] = true;
header("Location: showlist.php");
?>
<script type="text/javascript">
window.location.href = 'showlist.php';
</script>