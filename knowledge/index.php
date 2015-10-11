<?php
session_start();
include("../config.inc.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/masterpage.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>เกร็ดความรู้ : สื่อการเรียนการสอนวิชาทัศนศิลป์ ชั้นประถมศึกษาปีที่ 4 โรงเรียนพระหฤทัยคอนแวนต์</title>
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

<div id="left"><a href="../index2.php"><img src="../images/common/menu1.jpg" width="218" height="61" border="0" /></a><a href="../lesson/index.html"><img src="../images/common/menu2.jpg" width="218" height="61" border="0" /></a><a href="../exam/index.html"><img src="../images/common/menu3.jpg" width="218" height="62" border="0" /></a><a href="index.php"><img src="../images/common/menu5.jpg" width="218" height="65" border="0" /></a></div>
<!-- InstanceBeginEditable name="EditRegion" -->
<div id="right_knowledge">

<?php

//get link1
$sql = "SELECT *  FROM `videos` WHERE `VideoNo` = 1";
$sqlquery=mysql_query($sql);

$array = mysql_fetch_array($sqlquery);
$link1 = $array['VideoLink'];
$link1 = str_replace("watch?v=","embed/",$link1);

//get video name1
$name1 = $array['VideoName'];

//get link2
$sql = "SELECT *  FROM `videos` WHERE `VideoNo` = 2";
$sqlquery=mysql_query($sql);

$array = mysql_fetch_array($sqlquery);
$link2 = $array['VideoLink'];
$link2 = str_replace("watch?v=","embed/",$link2);

//get video name2
$name2 = $array['VideoName'];

//get link3
$sql = "SELECT *  FROM `videos` WHERE `VideoNo` = 3";
$sqlquery=mysql_query($sql);

$array = mysql_fetch_array($sqlquery);
$link3 = $array['VideoLink'];
$link3 = str_replace("watch?v=","embed/",$link3);

//get video name3
$name3 = $array['VideoName'];

//get link4
$sql = "SELECT *  FROM `videos` WHERE `VideoNo` = 4";
$sqlquery=mysql_query($sql);

$array = mysql_fetch_array($sqlquery);
$link4 = $array['VideoLink'];
$link4 = str_replace("watch?v=","embed/",$link4);

//get video name4
$name4 = $array['VideoName'];

mysql_close();

?>

<div id="video_box">

<div id="video_inside"><iframe width="187" height="140" src="<?php echo $link1?>" frameborder="0" allowfullscreen></iframe></div>
<div id="video_inside2"><iframe width="187" height="140" src="<?php echo $link2?>" frameborder="0" allowfullscreen></iframe></div>

</div>

<div class="header_font" id="video_name_box">
  <table width="603" border="0">
    <tr>
      <td width="283" align="center"><?php echo $name1?></td>
      <td width="36">&nbsp;</td>
      <td width="270" align="center"><?php echo $name2?></td>
      </tr>
  </table>
</div>

<div id="video_box2">

<div id="video_inside"><iframe width="187" height="140" src="<?php echo $link3?>" frameborder="0" allowfullscreen></iframe></div>
<div id="video_inside2"><iframe width="187" height="140" src="<?php echo $link4?>" frameborder="0" allowfullscreen></iframe></div>

</div>

<div class="header_font" id="video_name_box">
<table width="603" border="0">
    <tr>
      <td width="283" align="center"><?php echo $name3?></td>
      <td width="36">&nbsp;</td>
      <td width="270" align="center"><?php echo $name4?></td>
      </tr>
  </table>

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