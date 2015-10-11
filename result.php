<?php
include("config.inc.php");
$search = $_POST['search'];
if($search == null)
{
	header("Location: index2.php");
}
$expArray = explode(" ",$search);

$meet1 = 0;
$meet2 = 0;
$meet3 = 0;
$meet4 = 0;
$meet5 = 0;
$meet6 = 0;
$meet7 = 0;

for($i = 0; $i < count($expArray); $i++)
{
	//check lesson 1
$sql = "SELECT *  FROM `indexes` WHERE `LessonNo` = 1 AND `LessonIndex` LIKE '%".$expArray[$i]."%'";
$sqlquery=mysql_query($sql);
$num = mysql_num_rows($sqlquery);

if($num != null)
{
	$meet1 = $meet1+1;
}

//check lesson 2
$sql = "SELECT *  FROM `indexes` WHERE `LessonNo` = 2 AND `LessonIndex` LIKE '%".$expArray[$i]."%'";
$sqlquery=mysql_query($sql);
$num = mysql_num_rows($sqlquery);

if($num != null)
{
	$meet2 = $meet2+1;
}

//check lesson 3
$sql = "SELECT *  FROM `indexes` WHERE `LessonNo` = 3 AND `LessonIndex` LIKE '%".$expArray[$i]."%'";
$sqlquery=mysql_query($sql);
$num = mysql_num_rows($sqlquery);

if($num != null)
{
	$meet3 = $meet3+1;
}

//check lesson 4
$sql = "SELECT *  FROM `indexes` WHERE `LessonNo` = 4 AND `LessonIndex` LIKE '%".$expArray[$i]."%'";
$sqlquery=mysql_query($sql);
$num = mysql_num_rows($sqlquery);

if($num != null)
{
	$meet4 = $meet4+1;
}

//check lesson 5
$sql = "SELECT *  FROM `indexes` WHERE `LessonNo` = 5 AND `LessonIndex` LIKE '%".$expArray[$i]."%'";
$sqlquery=mysql_query($sql);
$num = mysql_num_rows($sqlquery);

if($num != null)
{
	$meet5 = $meet5+1;
}

//check lesson 6
$sql = "SELECT *  FROM `indexes` WHERE `LessonNo` = 6 AND `LessonIndex` LIKE '%".$expArray[$i]."%'";
$sqlquery=mysql_query($sql);
$num = mysql_num_rows($sqlquery);

if($num != null)
{
	$meet6 = $meet6+1;
}

//check lesson 7
$sql = "SELECT *  FROM `indexes` WHERE `LessonNo` = 7 AND `LessonIndex` LIKE '%".$expArray[$i]."%'";
$sqlquery=mysql_query($sql);
$num = mysql_num_rows($sqlquery);

if($num != null)
{
	$meet7 = $meet7+1;
}
}

/*print "meet1 ".$meet1." ";
print "meet2 ".$meet2." ";
print "meet3 ".$meet3." ";
print "meet4 ".$meet4." ";
print "meet5 ".$meet5." ";
print "meet6 ".$meet6." ";
print "meet7 ".$meet7." ";*/

$sum = 0;
if($meet1 != 0)
{
	$sum = $sum+1;
}

if($meet2 != 0)
{
	$sum = $sum+1;
}

if($meet3 != 0)
{
	$sum = $sum+1;
}

if($meet4 != 0)
{
	$sum = $sum+1;
}

if($meet5 != 0)
{
	$sum = $sum+1;
}

if($meet6 != 0)
{
	$sum = $sum+1;
}

if($meet7 != 0)
{
	$sum = $sum+1;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/masterpage.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>ผลการค้นหา : สื่อการเรียนการสอนวิชาทัศนศิลป์ ชั้นประถมศึกษาปีที่ 4 โรงเรียนพระหฤทัยคอนแวนต์</title>
<!-- InstanceEndEditable -->
<link href="css/mycss.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-image: url();
	background-color: #FFF;
}
</style>
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body>
<div id="wrapper">

<div id="top">

<div id="search_box">
<!-- Search Google -->

<TABLE width="650" border=0 align="right" cellspacing=0 bgcolor=#FFFFFF>
<tr valign=top>
<td width="650" align="right">

<form id="form1" name="form1" method="post" action="result.php">
    <label for="search"></label>
    <input name="search" type="text" id="search" size="30" />
    <input type="submit" name="button" id="button" value="ค้นหา" />
  </form>
</td></tr></TABLE>

<!-- Search Google --> 
</div>

</div>

<div id="main">
  <input type="hidden" name="hiddenField" id="hiddenField" />

<div id="left"><a href="index2.php"><img src="images/common/menu1.jpg" width="218" height="61" border="0" /></a><a href="lesson/index.html"><img src="images/common/menu2.jpg" width="218" height="61" border="0" /></a><a href="exam/index.html"><img src="images/common/menu3.jpg" width="218" height="62" border="0" /></a><a href="knowledge/index.php"><img src="images/common/menu5.jpg" width="218" height="65" border="0" /></a></div>
<!-- InstanceBeginEditable name="EditRegion" -->
<div id="right_search">
<div id="result_box">
<?
if($sum != 0)
{
	echo "<font color=\"grey\">ผลการค้นหา: มีบทเรียนที่เกี่ยวข้องกับ ''".$search."'' จำนวน $sum บทเรียนดังนี้</font>"; //เราก็เพียงใช้คำสั่ง Font
	print "<br>";
	print "<br>";
}
else
{
	echo "<font color=\"grey\">ผลการค้นหา: ไม่มีบทเรียนที่เกี่ยวข้องกับ ''".$search."''</font>"; //เราก็เพียงใช้คำสั่ง Font
}

for($i = 0; $i < $sum; $i++)
{
	$maxnumber = 0;
	$maxvalue = 0;
	
	if($meet1 != 0)
	{
		if($meet1 > $maxvalue)
		{
			$maxnumber = 1;
			$maxvalue = $meet1;
		}
	}
	
	if($meet2 != 0)
	{
		if($meet2 > $maxvalue)
		{
			$maxnumber = 2;
			$maxvalue = $meet2;
		}
	}
	
	if($meet3 != 0)
	{
		if($meet3 > $maxvalue)
		{
			$maxnumber = 3;
			$maxvalue = $meet3;
		}
	}
	
	if($meet4 != 0)
	{
		if($meet4 > $maxvalue)
		{
			$maxnumber = 4;
			$maxvalue = $meet4;
		}
	}
	
	if($meet5 != 0)
	{
		if($meet5 > $maxvalue)
		{
			$maxnumber = 5;
			$maxvalue = $meet5;
		}
	}
	
	if($meet6 != 0)
	{
		if($meet6 > $maxvalue)
		{
			$maxnumber = 6;
			$maxvalue = $meet6;
		}
	}
	
	if($meet7 != 0)
	{
		if($meet7 > $maxvalue)
		{
			$maxnumber = 7;
			$maxvalue = $meet7;
		}
	}
	
	//create link lesson1
if($maxnumber == 1)
{
	$path = "lesson/detail.php?lesson=1";
	$path2 = "http://".$_SERVER['HTTP_HOST']."/".$path;
	print "<a href=\"$path\">บทเรียนเรื่อง การวาดภาพ</a>";
	print "<br>";
	echo "<font color=\"green\">$path2</font>";
	print "<br>";
	print "<br>";
	$meet1 = 0;
}

//create link lesson2
if($maxnumber == 2)
{
	$path = "lesson/detail.php?lesson=2";
	$path2 = "http://".$_SERVER['HTTP_HOST']."/".$path;
	print "<a href=\"$path\">บทเรียนเรื่อง รูปร่าง รูปทรง</a>";
	print "<br>";
	echo "<font color=\"green\">$path2</font>";
	print "<br>";
	print "<br>";
	$meet2 = 0;
}

//create link lesson3
if($maxnumber == 3)
{
	$path = "lesson/detail.php?lesson=3";
	$path2 = "http://".$_SERVER['HTTP_HOST']."/".$path;
	print "<a href=\"$path\">บทเรียนเรื่อง สี</a>";
	print "<br>";
	echo "<font color=\"green\">$path2</font>";
	print "<br>";
	print "<br>";
	$meet3 = 0;
}

//create link lesson4
if($maxnumber == 4)
{
	$path = "lesson/detail.php?lesson=4";
	$path2 = "http://".$_SERVER['HTTP_HOST']."/".$path;
	print "<a href=\"$path\">บทเรียนเรื่อง การระบายสี</a>";
	print "<br>";
	echo "<font color=\"green\">$path2</font>";
	print "<br>";
	print "<br>";
	$meet4 = 0;
}

//create link lesson5
if($maxnumber == 5)
{
	$path = "lesson/detail.php?lesson=5";
	$path2 = "http://".$_SERVER['HTTP_HOST']."/".$path;
	print "<a href=\"$path\">บทเรียนเรื่อง แสงเงา</a>";
	print "<br>";
	echo "<font color=\"green\">$path2</font>";
	print "<br>";
	print "<br>";
	$meet5 = 0;
}

//create link lesson6
if($maxnumber == 6)
{
	$path = "lesson/detail.php?lesson=6";
	$path2 = "http://".$_SERVER['HTTP_HOST']."/".$path;
	print "<a href=\"$path\">บทเรียนเรื่อง ทัศนศิลป์ในประเพณีและวัฒนธรรม</a>";
	print "<br>";
	echo "<font color=\"green\">$path2</font>";
	print "<br>";
	print "<br>";
	$meet6 = 0;
}

//create link lesson7
if($maxnumber == 7)
{
	$path = "lesson/detail.php?lesson=7";
	$path2 = "http://".$_SERVER['HTTP_HOST']."/".$path;
	print "<a href=\"$path\">บทเรียนเรื่อง การปะติด</a>";
	print "<br>";
	echo "<font color=\"green\">$path2</font>";
	print "<br>";
	print "<br>";
	$meet7 = 0;
}
}


?>
</div>
</div>
<!-- InstanceEndEditable --></div>

<div id="footer">
  <table width="1021" border="0">
    <tr>
      <td height="23" align="center" valign="bottom" class="footer_font">สงวนลิขสิทธิ์ โรงเรียนพระหฤทัยคอนแวนต์ พ.ศ.2556 โรงเรียนพระหฤทัยคอนแวนต์ 94 ถนนสุนทรโกษา เขตคลองเตย กรุงเทพมหานคร 10110</td>
    </tr>
    <tr>
      <td align="center" class="footer_font">โทรศัพท์ 02-6719041-4, 02-6713720-24 โทรสาร 02-6719045 เว็บไซต์ <a href="http://www.shc.ac.th" style="text-decoration : none; color:#FFF">http://www.shc.ac.th</a>; e-mail <a href="mailto:sacredheart@shc.ac.th" style="text-decoration : none; color:#FFF">sacredheart@shc.ac.th</a></td>
    </tr>
  </table>
</div>

</div>
</body>
<!-- InstanceEnd --></html>