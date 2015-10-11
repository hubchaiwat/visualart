<?php
session_start();
if($_SESSION['available'] != true)
{
	header("Location: index.php");
}

include("../config.inc.php");

$lesson = $_SESSION['lesson'];
$quiznumber = $_SESSION['quiznumber'];
$question = $_POST['question'];
$ans1 = $_POST['ans1'];
$ans2 = $_POST['ans2'];
$ans3 = $_POST['ans3'];
$ans4 = $_POST['ans4'];
$truth = $_POST['truth'];

//update question
$sql = "UPDATE `art_db`.`quizes` SET `Question` = '".$question."' WHERE `quizes`.`LessonNo` = ".$lesson." AND `quizes`.`QuizNo` = ".$quiznumber;
$sqlquery=mysql_query($sql);

//update ans1
$sql = "UPDATE `art_db`.`quizes` SET `Ans1` = '".$ans1."' WHERE `quizes`.`LessonNo` = ".$lesson." AND `quizes`.`QuizNo` = ".$quiznumber;
$sqlquery=mysql_query($sql);

//update ans2
$sql = "UPDATE `art_db`.`quizes` SET `Ans2` = '".$ans2."' WHERE `quizes`.`LessonNo` = ".$lesson." AND `quizes`.`QuizNo` = ".$quiznumber;
$sqlquery=mysql_query($sql);

//update ans3
$sql = "UPDATE `art_db`.`quizes` SET `Ans3` = '".$ans3."' WHERE `quizes`.`LessonNo` = ".$lesson." AND `quizes`.`QuizNo` = ".$quiznumber;
$sqlquery=mysql_query($sql);

//update ans4
$sql = "UPDATE `art_db`.`quizes` SET `Ans4` = '".$ans4."' WHERE `quizes`.`LessonNo` = ".$lesson." AND `quizes`.`QuizNo` = ".$quiznumber;
$sqlquery=mysql_query($sql);

//update truth
$sql = "UPDATE `art_db`.`quizes` SET `Truth` = '".$truth."' WHERE `quizes`.`LessonNo` = ".$lesson." AND `quizes`.`QuizNo` = ".$quiznumber;
$sqlquery=mysql_query($sql);
mysql_close();

$_SESSION['updatequiz'] = true;

?>
<script type="text/javascript">
window.location.href = 'showlist.php';
</script>