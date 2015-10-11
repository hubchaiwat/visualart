<?php
session_start();
session_destroy();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ผู้ดูแลระบบ : สื่อการเรียนการสอนวิชาทัศนศิลป์ ชั้นประถมศึกษาปีที่ 4 โรงเรียนพระหฤทัยคอนแวนต์</title>
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
</head>

<body>
<div id="wrapper">

<div id="top">

</div>

<div id="main">

<div id="right_login">
  <div id="login_box">
    <form id="form2" name="form2" method="post" action="savelogin.php">
    <table width="352" height="113" border="0">
      <tr>
        <td width="42">&nbsp;</td>
        <td width="71">Username:</td>
        <td width="136"><label for="loginuser"></label>
          <input name="loginuser" type="text" id="loginuser" maxlength="12" style="width:145px;" value="admin"/></td>
        <td width="85">&nbsp;</td>
      </tr>
      <tr>
        <td height="24">&nbsp;</td>
        <td>Password:</td>
        <td><label for="loginpass"></label>
          <input name="loginpass" type="password" id="loginpass" maxlength="12" style="width:145px;" value="xC77Byte"/></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="37">&nbsp;</td>
        <td>&nbsp;</td>
        <td align="right"><input type="submit" name="button2" id="button2" value="Login" /></td>
        <td>&nbsp;</td>
      </tr>
    </table>
  </form>
</div>

</div>
</div>

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
</html>