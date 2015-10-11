<?php
session_start();
include("../config.inc.php");
include("../module/title.php");
include("../module/header.php");
/*ground data
$_SESSION['num1'] = 1;
$_SESSION['num2'] = 2;
$_SESSION['num3'] = 3;
$_SESSION['num4'] = 4;
$_SESSION['num5'] = 5;

$_SESSION['choice1'] = 1;
$_SESSION['choice2'] = 4;
$_SESSION['choice3'] = 3;
$_SESSION['choice4'] = 3;
$_SESSION['choice5'] = 2;

$_SESSION['name']="เม็ดทราย";
$_SESSION['surname']="กลายเป็นเพชร";
$_SESSION['year']="ป.4";
$_SESSION['number']="2";
$_SESSION['school']="พระหฤทัยคอนแวนต์";*/

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/masterpage.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>
<?php show_exam_title()?>
</title>
<!-- InstanceEndEditable -->
<link href="../css/mycss.css" rel="stylesheet" type="text/css" />
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

<form id="form1" name="form1" method="post" action="../result.php">
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

<div id="left"><a href="../index2.php"><img src="../images/common/menu1.jpg" width="218" height="61" border="0" /></a><a href="../lesson/index.html"><img src="../images/common/menu2.jpg" width="218" height="61" border="0" /></a><a href="index.html"><img src="../images/common/menu3.jpg" width="218" height="62" border="0" /></a><a href="../knowledge/index.php"><img src="../images/common/menu5.jpg" width="218" height="65" border="0" /></a></div>
<!-- InstanceBeginEditable name="EditRegion" -->
<div id="right_exam">



<div id="test_header">
<?php
show_exam_header();
?>
</div>
  
<div class="header_font" id="question_area">
  <form id="form2" name="form2" method="post" action="">

    <table width="495" border="0">
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td width="74">ชื่อ:</td>
        <td width="144"><label for="textfield2">
        
        <?php
		print $_SESSION['name'];
		if($_SESSION['name'] == null)
			print "บุคคลทั่วไป";
		?>
        
        </label></td>
        <td width="60">&nbsp;</td>
        <td width="80">นามสกุล:</td>
        <td width="115"><label for="textfield3">
        
        <?php
		print $_SESSION['surname'];
		if($_SESSION['surname'] == null)
			print "-";
		
		?>
        
        </label></td>
      </tr>
      <tr>
        <td>ชั้น:</td>
        <td><label for="textfield4">
        
        <?php
		print $_SESSION['year'];
		if($_SESSION['year'] == null)
			print "-";
		?>
        
        </label></td>
        <td>&nbsp;</td>
        <td>เลขที่:</td>
        <td><label for="textfield5">
        
        <?php
		print $_SESSION['number'];
		if($_SESSION['number'] == null)
			print "-";
		?>
        
        </label></td>
      </tr>
      <tr>
        <td>โรงเรียน:</td>
        <td>
        
        <?php
		print $_SESSION['school'];
		if($_SESSION['school'] == null)
			print "-";
		?>
        
        </td>
        <td>&nbsp;</td>
        <td>ได้คะแนน:</td>
        <td>
        
        <?php
$lesson = $_SESSION['lesson'];

//get truth choice1
$sql = "SELECT *  FROM `quizes` WHERE `LessonNo` = $lesson AND `QuizNo` = ".$_SESSION['num1'];
$sqlquery=mysql_query($sql);

$array = mysql_fetch_array($sqlquery);
$true1 = $array['Truth'];

//get truth choice2
$sql = "SELECT *  FROM `quizes` WHERE `LessonNo` = $lesson AND `QuizNo` = ".$_SESSION['num2'];
$sqlquery=mysql_query($sql);

$array = mysql_fetch_array($sqlquery);
$true2 = $array['Truth'];

//get truth choice3
$sql = "SELECT *  FROM `quizes` WHERE `LessonNo` = $lesson AND `QuizNo` = ".$_SESSION['num3'];
$sqlquery=mysql_query($sql);

$array = mysql_fetch_array($sqlquery);
$true3 = $array['Truth'];

//get truth choice4
$sql = "SELECT *  FROM `quizes` WHERE `LessonNo` = $lesson AND `QuizNo` = ".$_SESSION['num4'];
$sqlquery=mysql_query($sql);

$array = mysql_fetch_array($sqlquery);
$true4 = $array['Truth'];

//get truth choice5
$sql = "SELECT *  FROM `quizes` WHERE `LessonNo` = $lesson AND `QuizNo` = ".$_SESSION['num5'];
$sqlquery=mysql_query($sql);

$array = mysql_fetch_array($sqlquery);
$true5 = $array['Truth'];
mysql_close();		

//calculate point
$point = 0;
if($_SESSION['choice1'] == $true1)
{
	$point = $point+1;
}

if($_SESSION['choice2'] == $true2)
{
	$point = $point+1;
}

if($_SESSION['choice3'] == $true3)
{
	$point = $point+1;
}

if($_SESSION['choice4'] == $true4)
{
	$point = $point+1;
}

if($_SESSION['choice5'] == $true5)
{
	$point = $point+1;
}

print $point."/5 คะแนน";
		?>        
        </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td colspan="2"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        </tr>
      </table>
	

  </form>
  
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