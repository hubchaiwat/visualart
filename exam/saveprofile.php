<?php
session_start();
include("../config.inc.php");
?>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<body>
<?php

//Save User Profile
$_SESSION['registered'] = true;
$_SESSION['name']=$_POST['name'];
$_SESSION['surname']= $_POST['surname'];
$_SESSION['year']=$_POST['year'];
$_SESSION['number']=$_POST['number'];
$_SESSION['school']=$_POST['school'];

//Random Quiz Number
$min = 1;
$max = 0;

$lesson = $_SESSION['lesson'];
$sql = "SELECT MAX(QuizNo) FROM quizes WHERE LessonNo = $lesson";
$sqlquery=mysql_query($sql);
$array = mysql_fetch_array($sqlquery);
$max = $array['MAX(QuizNo)'];

//Start Random
//Random num1
while(true)
{
	$num1 = rand($min,$max);

	$sql = "SELECT *  FROM `quizes` WHERE `LessonNo` = $lesson AND `QuizNo` = $num1";
	$sqlquery=mysql_query($sql);
	$have = mysql_num_rows($sqlquery);
	
	if($have == 1)
	{
		break;
	}
}


//Random num2
$num2 = 0;

while(true)
{
	$num2 = rand($min,$max);
	if($num2 != $num1)
	{
		$sql = "SELECT *  FROM `quizes` WHERE `LessonNo` = $lesson AND `QuizNo` = $num2";
		$sqlquery=mysql_query($sql);

		$have = mysql_num_rows($sqlquery);
	
		if($have == 1)
		{
			break;
		}
	}	
}

//Random num3
$num3 = 0;
while(true)
{
	$num3 = rand($min,$max);
	if(($num3 != $num1)&&($num3 != $num2))
	{

		$sql = "SELECT *  FROM `quizes` WHERE `LessonNo` = $lesson AND `QuizNo` = $num3";
		$sqlquery=mysql_query($sql);

		$have = mysql_num_rows($sqlquery);
	
		if($have == 1)
		{
			break;
		}
	}	
}

//Random num4
$num4 = 0;
while(true)
{
	$num4 = rand($min,$max);
	if(($num4 != $num1)&&($num4 != $num2)&&($num4 != $num3))
	{

		$sql = "SELECT *  FROM `quizes` WHERE `LessonNo` = $lesson AND `QuizNo` = $num4";
		$sqlquery=mysql_query($sql);

		$have = mysql_num_rows($sqlquery);
	
		if($have == 1)
		{
			break;
		}
	}	
}

//Random num5
$num5 = 0;
while(true)
{
	$num5 = rand($min,$max);
	if(($num5 != $num1)&&($num5 != $num2)&&($num5 != $num3)&&($num5 != $num4))
	{
		$sql = "SELECT *  FROM `quizes` WHERE `LessonNo` = $lesson AND `QuizNo` = $num5";
		$sqlquery=mysql_query($sql);

		$have = mysql_num_rows($sqlquery);
	
		if($have == 1)
		{
			break;
		}
	}	
}

mysql_close();
//Save Random Number to Session
$_SESSION['num1']=$num1;
$_SESSION['num2']=$num2;
$_SESSION['num3']=$num3;
$_SESSION['num4']=$num4;
$_SESSION['num5']=$num5;

$_SESSION['choice1'] = -1;
$_SESSION['choice2'] = -1;
$_SESSION['choice3'] = -1;
$_SESSION['choice4'] = -1;
$_SESSION['choice5'] = -1;

$_SESSION['now'] = 1;
?>
</body>
</html>
<script langquage='javascript'>
//window.location.href = 'preparing.php';
window.location.href = 'examing.php';
</script>