<?php
session_start();

if($_SESSION['available'] != true)
{
	header("Location: index.php");
}

include("../config.inc.php");
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
$chooselesson = $_POST['chooselesson'];
if($chooselesson == null)
{
  if($_SESSION['lesson'] == 1)
  {
	  $chooselesson = "การวาดภาพ";
  }
  else if($_SESSION['lesson'] == 2)
  {
	  $chooselesson = "รูปร่างรูปทรง";
  }
  else if($_SESSION['lesson'] == 3)
  {
	  $chooselesson = "สี";
  }
  else if($_SESSION['lesson'] == 4)
  {
	  $chooselesson = "การระบายสี";
  }
  else if($_SESSION['lesson'] == 5)
  {
	  $chooselesson = "แสงเงา";
  }
  else if($_SESSION['lesson'] == 6)
  {
	  $chooselesson = "ทัศนศิลป์ในประเพณีและวัฒนธรรม";
  }
  else if($_SESSION['lesson'] == 7)
  {
	  $chooselesson = "การปะติด";
  }
  echo "บทเรียน: ".$chooselesson;
}
else if($chooselesson != null)
{
	echo "บทเรียน: ".$chooselesson;
}

?>

</div>

<script language="javascript">

function goToAddExamPage()
{
window.location.href = 'addexam.php';
}

</script>

<div class="admin_header_font" id="admin_header">

เพิ่ม/แก้ไขข้อแบบฝึกหัด

 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="button" name="button" id="button" value="เพิ่มข้อแบบฝึกหัด" onClick="JavaScript:goToAddExamPage();this.style.display='none';"/>
</div>
<div id="admin_chooseexam_box">
  <?php
  
  if($chooselesson == "การวาดภาพ")
  {
	  $lesson = 1;
	  $_SESSION['lesson'] = 1;
  }
  else if($chooselesson == "รูปร่างรูปทรง")
  {
	  $lesson = 2;
	  $_SESSION['lesson'] = 2;
  }
  else if($chooselesson == "สี")
  {
	  $lesson = 3;
	  $_SESSION['lesson'] = 3;
  }
  else if($chooselesson == "การระบายสี")
  {
	  $lesson = 4;
	  $_SESSION['lesson'] = 4;
  }
  else if($chooselesson == "แสงเงา")
  {
	  $lesson = 5;
	  $_SESSION['lesson'] = 5;
  }
  else if($chooselesson == "ทัศนศิลป์ในประเพณีและวัฒนธรรม")
  {
	  $lesson = 6;
	  $_SESSION['lesson'] = 6;
  }
  else if($chooselesson == "การปะติด")
  {
	  $lesson = 7;
	  $_SESSION['lesson'] = 7;
  }

  $sql = "SELECT *  FROM `quizes` WHERE `LessonNo` = $lesson";
  $sqlquery=mysql_query($sql);
  
  $quizseq = 0;
  
  echo "<table width='575' border='1'>";
  
  while($row = mysql_fetch_array($sqlquery))
  {
	  $quizseq = $quizseq+1;
	  $quizNo = $row["QuizNo"];
	  $question = $row["Question"];
	  echo "<tr><form id='form1' name='form1' method='post' action='deletequiz.php'>";
	  
	  echo "<input name='QuizNo' type='hidden' value='$quizNo'>";
	  echo "<td width='500'>$quizseq. $question</td>";
	  echo "<td><input type='submit' name='act' id='act' value='แก้ไข'/></td>";
	  echo "<td><input type='submit' name='act' id='act' value='ลบ' onclick="?>"return confirm('คุณแน่ใจหรือไม่ที่จะลบโจทย์ข้อนี้')"/><?"/>";
	  
	  echo "</td></form></tr>";
  
  }
  echo "</table>";
  
  mysql_close();

  ?>
</div>
<div class="font_del_quiz" id="admin_chooseexam_box2">
  <table width="600" border="0">
    <tr>
      <td align="center" valign="top">
      
	<?php
	if($_SESSION['del_complete'] == true)
	{
		echo "ลบข้อมูลแบบฝึกหัดเรียบร้อยแล้ว";
		$_SESSION['del_complete'] = false;
	}
	
	if($_SESSION['updatequiz'] == true)
	{
		echo "แก้ไขข้อมูลแบบฝึกหัดเรียบร้อยแล้ว";
		$_SESSION['updatequiz'] = false;
	}
	
	if($_SESSION['savedexam'] == true)
	{
		print "เพิ่มแบบฝึกหัดข้อใหม่เรียบร้อยแล้ว";
		$_SESSION['savedexam'] = false;
	}
	?>
      
      </td>
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