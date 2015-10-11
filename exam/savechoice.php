<?php
session_start();
if($_SESSION['registered'] != true)
{
	header("Location: index.php");
}
if(($_SESSION['choice1'] == -1))
{
	$_SESSION['choice1'] = $_POST['choice'];
	$_SESSION['now'] = 2;
	header("Location: examing.php");
}
else if($_SESSION['choice2'] == -1)
{
	$_SESSION['choice2'] = $_POST['choice'];
	$_SESSION['now'] = 3;
	header("Location: examing.php");
}
else if($_SESSION['choice3'] == -1)
{
	$_SESSION['choice3'] = $_POST['choice'];
	$_SESSION['now'] = 4;
	header("Location: examing.php");
}
else if($_SESSION['choice4'] == -1)
{
	$_SESSION['choice4'] = $_POST['choice'];
	$_SESSION['now'] = 5;
	header("Location: examing.php");
}
else if($_SESSION['choice5'] == -1)
{
	$_SESSION['choice5'] = $_POST['choice'];
	header("Location: complete.php");
}
?>
