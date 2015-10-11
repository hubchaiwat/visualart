<?php
session_start();
include("common_constant.php");

define("EXAM_TITLE","แบบฝึกหัดเรื่อง ");
define("LESSON_TITLE","บทเรียนเรื่อง ");

function show_exam_title()
{
$title = EXAM_TITLE;
if($_SESSION['lesson'] == 1)
{
	$title = $title.LESSON1_NAME;
}
else if($_SESSION['lesson'] == 2)
{
	$title = $title.LESSON2_NAME;
}
else if($_SESSION['lesson'] == 3)
{
	$title = $title.LESSON3_NAME;
}
else if($_SESSION['lesson'] == 4)
{
	$title = $title.LESSON4_NAME;
}
else if($_SESSION['lesson'] == 5)
{
	$title = $title.LESSON5_NAME;
}
else if($_SESSION['lesson'] == 6)
{
	$title = $title.LESSON6_NAME;
}
else if($_SESSION['lesson'] == 7)
{
	$title = $title.LESSON7_NAME;
}
echo $title.BACK_TITLE;
}

function show_lesson_title()
{
$title = LESSON_TITLE;
if($_GET['lesson'] == 1)
{
	$title = $title.LESSON1_NAME;
}
else if($_GET['lesson'] == 2)
{
	$title = $title.LESSON2_NAME;
}
else if($_GET['lesson'] == 3)
{
	$title = $title.LESSON3_NAME;
}
else if($_GET['lesson'] == 4)
{
	$title = $title.LESSON4_NAME;
}
else if($_GET['lesson'] == 5)
{
	$title = $title.LESSON5_NAME;
}
else if($_GET['lesson'] == 6)
{
	$title = $title.LESSON6_NAME;
}
else if($_GET['lesson'] == 7)
{
	$title = $title.LESSON7_NAME;
}
echo $title.BACK_TITLE;
}
?>