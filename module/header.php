<?php
session_start();
include("common_constant.php");

define("IMG_EXAM1","../images/test/test_drawing_header.jpg");
define("IMG_EXAM2","../images/test/test_shape_header.jpg");
define("IMG_EXAM3","../images/test/test_color_header.jpg");
define("IMG_EXAM4","../images/test/test_paint_header.jpg");
define("IMG_EXAM5","../images/test/test_shadow_header.jpg");
define("IMG_EXAM6","../images/test/test_art-in-culture_header.jpg");
define("IMG_EXAM7","../images/test/test_college_header.jpg");

define("WIDTH_EXAM",290);
define("HEIGHT_EXAM",70);

define("IMG_LES1","../images/lesson/lesson_drawing_03.jpg");
define("IMG_LES2","../images/lesson/lesson_shape_03.jpg");
define("IMG_LES3","../images/lesson/lesson_color_03.jpg");
define("IMG_LES4","../images/lesson/lesson_paint_03.jpg");
define("IMG_LES5","../images/lesson/lesson_shadow_03.jpg");
define("IMG_LES6","../images/lesson/lesson_art-in-culture_03.jpg");
define("IMG_LES7","../images/lesson/lesson_college_03.jpg");

define("WIDTH_LES",250);
define("HEIGHT_LES",35);

function show_exam_header()
{
$exam_header = "<img src=";
if($_SESSION['lesson'] == 1)
{
	$exam_header = $exam_header.IMG_EXAM1;
}
else if($_SESSION['lesson'] == 2)
{
	$exam_header = $exam_header.IMG_EXAM2;
}
else if($_SESSION['lesson'] == 3)
{
	$exam_header = $exam_header.IMG_EXAM3;
}
else if($_SESSION['lesson'] == 4)
{
	$exam_header = $exam_header.IMG_EXAM4;
}
else if($_SESSION['lesson'] == 5)
{
	$exam_header = $exam_header.IMG_EXAM5;
}
else if($_SESSION['lesson'] == 6)
{
	$exam_header = $exam_header.IMG_EXAM6;
}
else if($_SESSION['lesson'] == 7)
{
	$exam_header = $exam_header.IMG_EXAM7;
}
echo $exam_header." width=".WIDTH_EXAM." height=".HEIGHT_EXAM." />";
}

function show_lesson_header()
{
$exam_header = "<img src=";
if($_GET['lesson'] == 1)
{
	$exam_header = $exam_header.IMG_LES1;
}
else if($_GET['lesson'] == 2)
{
	$exam_header = $exam_header.IMG_LES2;
}
else if($_GET['lesson'] == 3)
{
	$exam_header = $exam_header.IMG_LES3;
}
else if($_GET['lesson'] == 4)
{
	$exam_header = $exam_header.IMG_LES4;
}
else if($_GET['lesson'] == 5)
{
	$exam_header = $exam_header.IMG_LES5;
}
else if($_GET['lesson'] == 6)
{
	$exam_header = $exam_header.IMG_LES6;
}
else if($_GET['lesson'] == 7)
{
	$exam_header = $exam_header.IMG_LES7;
}
echo $exam_header." width=".WIDTH_LES." height=".HEIGHT_LES." />";
}
?>