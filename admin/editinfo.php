<?php
session_start();
if($_SESSION['available'] != true)
{
	header("Location: index.php");
}
include("../config.inc.php");

//get info1
$sql = "SELECT *  FROM `info` WHERE `InfoNo` = 1";
$sqlquery=mysql_query($sql);

$array = mysql_fetch_array($sqlquery);
$info1= $array['Info'];

//get info2
$sql = "SELECT *  FROM `info` WHERE `InfoNo` = 2";
$sqlquery=mysql_query($sql);

$array = mysql_fetch_array($sqlquery);
$info2= $array['Info'];

//get info3
$sql = "SELECT *  FROM `info` WHERE `InfoNo` = 3";
$sqlquery=mysql_query($sql);

$array = mysql_fetch_array($sqlquery);
$info3= $array['Info'];

//get info4
$sql = "SELECT *  FROM `info` WHERE `InfoNo` = 4";
$sqlquery=mysql_query($sql);

$array = mysql_fetch_array($sqlquery);
$info4= $array['Info'];

//get info5
$sql = "SELECT *  FROM `info` WHERE `InfoNo` = 5";
$sqlquery=mysql_query($sql);

$array = mysql_fetch_array($sqlquery);
$info5= $array['Info'];

mysql_close();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/admin_template.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>แก้ไขข่าวสารหน้าโฮมเพจ : สื่อการเรียนการสอนวิชาทัศนศิลป์ ชั้นประถมศึกษาปีที่ 4 โรงเรียนพระหฤทัยคอนแวนต์</title>
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

</div>

<div id="main">

<div id="left">
<script language="javascript">

function goToEditInfo()
{
window.location.href = 'editinfo.php';
}

function goToAddExam()
{
window.location.href = 'chooselesson.php';
}

function goToEditVideo()
{
window.location.href = 'editvideo.php';
}

function goToChangePassword()
{
window.location.href = 'changepassword.php';
}

function goToLogout()
{
window.location.href = 'logout.php';
}

</script>
<form id="form2" name="form2" method="post" action="">
    <table width="200" height="255" border="0">
      <tr>
        <td height="38" align="center"><label for="loginuser">
          <input type="button" name="button2" id="button2" value="แก้ไขข่าวสารหน้าโฮมเพจ" style="width:200px; font-size:14px; height:36px"
          onClick="JavaScript:goToEditInfo();this.style.display='none';"/>
          </label></td>
      </tr>
      <tr>
        <td height="24" align="center"><input type="button" name="button3" id="button3" value="เพิ่ม/แก้ไขข้อแบบฝึกหัด" style="width:200px; font-size:14px; height:36px"
        onClick="JavaScript:goToAddExam();this.style.display='none';"/>
          </td>
      </tr>
      <tr>
        <td height="24" align="center"><input type="button" name="button4" id="button4" value="แก้ไขวิดีโอเกร็ดความรู้" style="width:200px; font-size:14px; height:36px" 
        onClick="JavaScript:goToEditVideo();this.style.display='none';"/>
          </td>
      </tr>
      <tr>
        <td height="24" align="center"><input type="button" name="button6" id="button6" value="เปลี่ยนรหัสผ่าน" style="width:200px; font-size:14px; height:36px" 
        onClick="JavaScript:goToChangePassword();this.style.display='none';"/>
          </td>
      </tr>
      <tr>
        <td height="24" align="center"><label for="loginpass">
          <input type="button" name="button5" id="button5" value="ออกจากระบบ" style="width:200px; font-size:14px; height:36px" 
          onClick="JavaScript:goToLogout();this.style.display='none';"/>
          </label></td>
      </tr>
      </table>
  </form>

</div>
<!-- InstanceBeginEditable name="EditRegion3" -->
<div id="right_admin">

<div class="admin_header_font" id="admin_header">

แก้ไขข่าวสารหน้าโฮมเพจ

</div>

<div id="admin_editinfo_box">

<form id="form1" name="form1" method="post" action="saveinfo.php">
  <table width="600" border="0">
    <tr>
      <td width="94" height="28" align="center" valign="top"><label for="textfield1"></label>
        ข่าวสารที่ 1</td>
      <td width="496" align="left" valign="top"><input name="info1" type="text" value="<?php echo $info1?>" size="70" maxlength="75" /></td>
    </tr>
    <tr>
      <td height="28" align="center" valign="top">ข่าวสารที่ 2</td>
      <td height="28" align="left" valign="top"><input name="info2" type="text" value="<?php echo $info2?>" size="70" maxlength="75" /></td>
    </tr>
    <tr>
      <td height="28" align="center" valign="top">ข่าวสารที่ 3</td>
      <td height="28" align="left" valign="top"><input name="info3" type="text" value="<?php echo $info3?>" size="70" maxlength="75" /></td>
    </tr>
    <tr>
      <td height="28" align="center" valign="top">ข่าวสารที่ 4</td>
      <td height="28" align="left" valign="top"><input name="info4" type="text" value="<?php echo $info4?>" size="70" maxlength="75" /></td>
    </tr>
    <tr>
      <td height="28" align="center" valign="top">ข่าวสารที่ 5</td>
      <td height="28" align="left" valign="top"><input name="info5" type="text" value="<?php echo $info5?>" size="70" maxlength="75" /></td>
    </tr>
    <tr>
      <td height="45" colspan="2" align="center"><input type="submit" name="button7" id="button7" value="ตกลง" style="width:60px"/>
        <input type="button" name="button" id="button" value="ยกเลิก" style="width:60px" onClick="document.location.reload(true)"/></td>
    </tr>
    <tr>
      <td height="45" colspan="2" align="center" class="admin_complete">
      
      <?php
	  
	  if($_SESSION['savedinfo'] == true)
	  {
		  print "แก้ไขข่าวสารหน้าโฮมเพจเรียบร้อยแล้ว";
		  $_SESSION['savedinfo'] = false;
	  }
	  
	  ?>
      
      </td>
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