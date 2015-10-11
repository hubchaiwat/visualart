<?php
session_start();
if($_SESSION['available'] != true)
{
	header("Location: index.php");
}

$lesson = $_SESSION['lesson'];

if($lesson == 1)
  {
	  $chooselesson = "การวาดภาพ";
  }
  else if($lesson == 2)
  {
	  $chooselesson = "รูปร่างรูปทรง";
  }
  else if($lesson == 3)
  {
	  $chooselesson = "สี";
  }
  else if($lesson == 4)
  {
	  $chooselesson = "การระบายสี";
  }
  else if($lesson == 5)
  {
	  $chooselesson = "แสงเงา";
  }
  else if($lesson == 6)
  {
	  $chooselesson = "ทัศนศิลป์ในประเพณีและวัฒนธรรม";
  }
  else if($lesson == 7)
  {
	  $chooselesson = "การปะติด";
  }

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/admin_template.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>เพิ่มข้อแบบฝึกหัด : สื่อการเรียนการสอนวิชาทัศนศิลป์ ชั้นประถมศึกษาปีที่ 4 โรงเรียนพระหฤทัยคอนแวนต์</title>
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

<div class="admin_lesson_font" id="admin_lesson">

<?php
echo "บทเรียน: ".$chooselesson;

?>

</div>


<div class="admin_header_font" id="admin_header">

เพิ่มข้อแบบฝึกหัด

</div>

<script language="javascript">

function goToShowList()
{
window.location.href = 'showlist.php';
}

</script>

<div id="admin_addexam_box">
  <form id="form3" name="form3" method="post" action="saveexam.php">
    <table width="601" border="0">
      <tr>
        <td width="110" valign="top">โจทย์</td>
        <td width="481"><label for="question"></label>
          <textarea name="question" cols="40" rows="4" id="question"></textarea></td>
      </tr>
      <tr>
        <td>คำตอบที่ 1</td>
        <td><label for="ans1"></label>
          <input name="ans1" type="text" id="ans1" value="" size="50" /></td>
      </tr>
      <tr>
        <td>คำตอบที่ 2</td>
        <td><input name="ans2" type="text" id="ans2" value="" size="50" /></td>
      </tr>
      <tr>
        <td>คำตอบที่ 3</td>
        <td><input name="ans3" type="text" id="ans3" value="" size="50" /></td>
      </tr>
      <tr>
        <td>คำตอบที่ 4</td>
        <td><input name="ans4" type="text" id="ans4" value="" size="50" /></td>
      </tr>
      <tr>
        <td>คำตอบที่ถูกต้อง</td>
        <td><select name="truth" id="truth">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
        </select></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><input type="submit" name="button7" id="button7" value="เพิ่มแบบฝึกหัด" style="width:100px"/>
          <input type="button" name="button" id="button" value="ยกเลิก" style="width:100px"/ 
          onClick="JavaScript:goToShowList();this.style.display='none';"></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><span class="admin_complete">
          <?php
	  
	  /*if($_SESSION['savedexam'] == true)
	  {
		  $_SESSION['savedexam'] == null;
		  print "***เพิ่มแบบฝึกหัดข้อใหม่เรียบร้อยแล้ว";
	  }
	  */
	  ?>
        </span></td>
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