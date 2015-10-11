<?php
session_start();

define("FORE_VIDEO","<script type='text/javascript' src='../player/jwplayer.js'></script>
<div id='mediaspace'>This text will be replaced</div>
<script type='text/javascript'>
jwplayer('mediaspace').setup({
'flashplayer': '../player/player.swf',
'file': '");

define("BACK_VIDEO","','feature': 'topvideos_music',
'controller': 'bottom',
'autostart': 'true',
'allowFullscreen': 'false',
'width': '550',logo: {
        file: 'free.png',
        link: 'http://www.example.com/'
      },
'height': '300',
'skin': '../player/minima/minima.xml',
'screencolor': 'FFFFFF',
'image': '../images/lesson/bg_screen");


define("VIDEO_ADD1","http://www.mosheworkspace.com/visualart/flash/drawing.flv");
define("VIDEO_ADD2","http://www.mosheworkspace.com/visualart/flash/shape.flv");
define("VIDEO_ADD3","http://www.mosheworkspace.com/visualart/flash/color.flv");
define("VIDEO_ADD4","http://www.mosheworkspace.com/visualart/flash/paint.flv");
define("VIDEO_ADD5","http://www.mosheworkspace.com/visualart/flash/light.flv");
define("VIDEO_ADD6","http://www.mosheworkspace.com/visualart/flash/art.flv");
define("VIDEO_ADD7","http://www.mosheworkspace.com/visualart/flash/college.flv");

define("CLOSE_VIDEO",".jpg'});
</script>");


define("IMG_ADD1","../images/test/test_drawing_header.jpg");
define("IMG_ADD2","../images/test/test_shape_header.jpg");
define("IMG_ADD3","../images/test/test_color_header.jpg");
define("IMG_ADD4","../images/test/test_paint_header.jpg");
define("IMG_ADD5","../images/test/test_shadow_header.jpg");
define("IMG_ADD6","../images/test/test_art-in-culture_header.jpg");
define("IMG_ADD7","../images/test/test_college_header.jpg");

define("WIDTH_HEAD",290);
define("HEIGHT_HEAD",70);

define("LESSON_TITLE","บทเรียนเรื่อง ");

function showvideo()
{
	$video = FORE_VIDEO;
	
	if($_GET['lesson'] == 1)
	{
		$video = $video.VIDEO_ADD1.BACK_VIDEO."1";
	}
	else if($_GET['lesson'] == 2)
	{
		$video = $video.VIDEO_ADD2.BACK_VIDEO."2";
	}
	else if($_GET['lesson'] == 3)
	{
		$video = $video.VIDEO_ADD3.BACK_VIDEO."3";
	}
	else if($_GET['lesson'] == 4)
	{
		$video = $video.VIDEO_ADD4.BACK_VIDEO."4";
	}
	else if($_GET['lesson'] == 5)
	{
		$video = $video.VIDEO_ADD5.BACK_VIDEO."5";
	}
	else if($_GET['lesson'] == 6)
	{
		$video = $video.VIDEO_ADD6.BACK_VIDEO."6";
	}
	else if($_GET['lesson'] == 7)
	{
		$video = $video.VIDEO_ADD7.BACK_VIDEO."7";
	}
	
	$video = $video.CLOSE_VIDEO;
	echo $video;
}
?>