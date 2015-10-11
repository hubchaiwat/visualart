<?php
session_start();
if(($_GET['lesson'] == null) || ($_GET['lesson'] == 0) || ($_GET['lesson'] > 7))
{
	header("Location: index.html");
}
$_SESSION['lesson'] = $_GET['lesson'];
//session_destroy();
include("../module/title.php");
include("../module/header.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/masterpage.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title><?php show_exam_title()?></title>
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
  <form id="form1" name="form1" method="post" action="saveprofile.php">

    <table width="495" border="0">
      <tr>
        <td>&nbsp;</td>
        <td><input name="registered" type="hidden" id="registered" value="true" /></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td width="74">ชื่อ</td>
        <td width="144"><label for="name"></label>
          <input type="text" name="name" id="name" /></td>
        <td width="60">&nbsp;</td>
        <td width="80">นามสกุล</td>
        <td width="115"><label for="surname"></label>
          <input type="text" name="surname" id="surname" /></td>
      </tr>
      <tr>
        <td>ชั้น</td>
        <td><label for="year"></label>
          <input type="text" name="year" id="year" /></td>
        <td>&nbsp;</td>
        <td>เลขที่</td>
        <td><label for="number"></label>
          <input type="text" name="number" id="number" /></td>
      </tr>
      <tr>
        <td>โรงเรียน</td>
        <td><input type="text" name="school" id="school" /></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td align="right"><input type="submit" name="button2" id="button2" value="ถัดไป" /></td>
      </tr>
      </table>
	

  </form>

<div id="question_note">
  <table width="500" border="0">
    <tr>
      <td width="472">หมายเหตุ</td>
    </tr>
    <tr>
      <td>- หากไม่ต้องการกรอกข้อมูล โปรดคลิกปุ่มถัดไป</td>
    </tr>
    <tr>
      <td>-  ขณะที่ทำแบบฝึกหัด เมื่อเลือกคำตอบและคลิกถัดไปแล้ว จะไม่สามารถ</td>
    </tr>
    <tr>
      <td>&nbsp;&nbsp;&nbsp;ย้อนกลับได้ กรุณาตัดสินใจให้แน่นอนก่อนคลิกปุ่มถัดไป</td>
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