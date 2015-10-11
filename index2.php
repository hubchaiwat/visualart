<?php
include("config.inc.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/masterpage.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>หน้าแรก : สื่อการเรียนการสอนวิชาทัศนศิลป์ ชั้นประถมศึกษาปีที่ 4 โรงเรียนพระหฤทัยคอนแวนต์</title>
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
<div id="right">

<div id="home_info_box">
<!--info1-->
<div class="infomation_font" id="home_info">
<table width="600" height="50" border="0">
  <tr>
    <td height="40"><?php

//get truth message1
$sql = "SELECT *  FROM `info`";
$result=mysql_query($sql);
$row = mysql_fetch_array($result);
$message = $row['Info'];
if($message != null)
{
	print "- ".$message;
}
?></td>
  </tr>
</table>
</div>

<!--info2-->
<div class="infomation_font2" id="home_info">
  <table width="600" border="0">
    <tr>
    <td height="40"><?php

//get truth message2
$row = mysql_fetch_array($result);
$message = $row['Info'];

if($message != null)
{
	print "- ".$message;
}
?></td>
  </tr>
</table>
</div>

<!--info3-->
<div class="infomation_font3" id="home_info">
  <table width="600" border="0">
    <tr>
    <td height="40"><?php

//get truth message3
$row = mysql_fetch_array($result);
$message = $row['Info'];

if($message != null)
{
	print "- ".$message;
}
?></td>
  </tr>
</table>
</div>

<!--info4-->
<div class="infomation_font" id="home_info">
  <table width="600" border="0">
    <tr>
    <td height="40"><?php

//get truth message4
$row = mysql_fetch_array($result);
$message = $row['Info'];

if($message != null)
{
	print "- ".$message;
}
?></td>
  </tr>
</table>
</div>

<!--info5-->
<div class="infomation_font2" id="home_info">
  <table width="600" border="0">
    <tr>
    <td height="40"><?php

//get truth message5
$row = mysql_fetch_array($result);
$message = $row['Info'];

if($message != null)
{
	print "- ".$message;
}

mysql_close();
?></td>
  </tr>
</table>
</div>

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