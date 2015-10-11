<?php
session_start();
include("../config.inc.php");
include("../module/title.php");
include("../module/header.php");
if($_SESSION['registered'] != true)
{
	header("Location: index.php");
}
if($_SESSION['now'] == 1)
{
	$_numquiz = $_SESSION['num1'];
}
else if($_SESSION['now'] == 2)
{
	$_numquiz = $_SESSION['num2'];
}
else if($_SESSION['now'] == 3)
{
	$_numquiz = $_SESSION['num3'];
}
else if($_SESSION['now'] == 4)
{
	$_numquiz = $_SESSION['num4'];
}
else if($_SESSION['now'] == 5)
{
	$_numquiz = $_SESSION['num5'];
}
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

<div id="question_area">
  <form id="form2" name="form2" method="post" action="savechoice.php">

    <table width="501" border="0">
      <tr>
        <td colspan="3">
          
            <?php
$lesson = $_SESSION['lesson'];

$sql = "SELECT *  FROM `quizes` WHERE `LessonNo` = $lesson AND `QuizNo` = ".$_numquiz;
$sqlquery=mysql_query($sql);

$array = mysql_fetch_array($sqlquery);
print $_SESSION['now'].". ".$array['Question'];
?>
            
            
          </td>
        </tr>
      <tr>
        <td width="26" valign="top"><input name="choice" type="radio" id="choice_0" value="1" /></td>
        <td valign="top">ก.</td>
        <td width="438" valign="top"><?php
print $array['Ans1'];
?></td>
      </tr>
      <tr>
        <td valign="top"><label>
          <input type="radio" name="choice" value="2" id="choice_1" />
        </label></td>
        <td valign="top">ข.</td>
        <td><?php
print $array['Ans2'];
?></td>
      </tr>
      <tr>
        <td valign="top"><label>
          <input type="radio" name="choice" value="3" id="choice_2" />
        </label></td>
        <td valign="top">ค.</td>
        <td><?php
print $array['Ans3'];
?></td>
      </tr>
      <tr>
        <td valign="top"><label>
          <input type="radio" name="choice" value="4" id="choice_3" />
        </label></td>
        <td valign="top">ง.</td>
        <td><?php
print $array['Ans4'];

mysql_close();
?></td>
      </tr>
      <tr>
        <td height="26" colspan="3" align="left"><input type="submit" name="button2" id="button2" value="ถัดไป" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <?php
		print $_SESSION['now']."/5";
		?>        </td>
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