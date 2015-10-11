<?php

define("LES_MAX",7);
define("LES_MAX1",9);
define("LES_MAX2",3);
define("LES_MAX3",5);
define("LES_MAX4",9);
define("LES_MAX5",5);
define("LES_MAX6",3);
define("LES_MAX7",3);

function get_max_page($lesson)
{
	if($lesson == 1)
	{
		return LES_MAX1;
	}
	else if($lesson == 2)
	{
		return LES_MAX2;
	}
	else if($lesson == 3)
	{
		return LES_MAX3;
	}
	else if($lesson == 4)
	{
		return LES_MAX4;
	}
	else if($lesson == 5)
	{
		return LES_MAX5;
	}
	else if($lesson == 6)
	{
		return LES_MAX6;
	}
	else if($lesson == 7)
	{
		return LES_MAX7;
	}
}

function show_text()
{
	echo "<img src='../images/content_text/p".$_GET['lesson']."_".$_GET['page'].".jpg' width='725' height='270' />";
}

function show_back_button()
{
	if(($_GET['page'] >= 4) && ($_GET['page'] <= 6))
	{
		echo "<a href='viewtext.php?lesson=".$_GET['lesson']."&page=3'><img src='../images/content_text/back.jpg' width='22' height='22' border='0' /></a>";
	}
	else if(($_GET['page'] >= 7) && ($_GET['page'] <= 9))
	{
		echo "<a href='viewtext.php?lesson=".$_GET['lesson']."&page=6'><img src='../images/content_text/back.jpg' width='22' height='22' border='0' /></a>";
	}
}

function show_next_button()
{
	if(($_GET['page'] >= 1) && ($_GET['page'] <= 3))
	{
		if(get_max_page($_GET['lesson']) > 3)
		{
			echo "<a href='viewtext.php?lesson=".$_GET['lesson']."&page=4'><img src='../images/content_text/next.jpg' width='22' height='22' border='0' /></a>";
		}
	}
	else if(($_GET['page'] >= 4) && ($_GET['page'] <= 6))
	{
		if(get_max_page($_GET['lesson']) > 6)
		{
			echo "<a href='viewtext.php?lesson=".$_GET['lesson']."&page=7'><img src='../images/content_text/next.jpg' width='22' height='22' border='0' /></a>";
		}
	}
}

function put_the_page($num_page)
{
	$code = $num_page."'><img src='../images/content_text/number".$num_page.check_hov($num_page);
	return $code;
}

function check_hov($num_page)
{
	if($num_page == $_GET['page'])
	{
		return "_hov";
	}
	else
	{
		return "";
	}
}

function show_left_number()
{
	$show_number = "<a href='viewtext.php?lesson=".$_GET['lesson']."&page=";
	if(($_GET['page'] >= 1) && ($_GET['page'] <= 3))
	{
		$show_number = $show_number.put_the_page(1);		
	}
	else if(($_GET['page'] >= 4) && ($_GET['page'] <= 6))
	{
		$show_number = $show_number.put_the_page(4);			
	}
	else if(($_GET['page'] >= 7) && ($_GET['page'] <= 9))
	{
		$show_number = $show_number.put_the_page(7);			
	}
	
	echo $show_number.".jpg' width='22' height='22' border='0' /></a>";
}

function show_mid_number()
{
	$show_number = "<a href='viewtext.php?lesson=".$_GET['lesson']."&page=";
	if(($_GET['page'] >= 1) && ($_GET['page'] <= 3))
	{
		$show_number = $show_number.put_the_page(2);		
	}
	else if(($_GET['page'] >= 4) && ($_GET['page'] <= 6))
	{
		if(get_max_page($_GET['lesson']) >= 5)
		{
			$show_number = $show_number.put_the_page(5);	
		}	
	}
	else if(($_GET['page'] >= 7) && ($_GET['page'] <= 9))
	{
		if(get_max_page($_GET['lesson']) >= 8)
		{
		$show_number = $show_number.put_the_page(8);
		}			
	}
	
	echo $show_number.".jpg' width='22' height='22' border='0' /></a>";
}

function show_right_number()
{
	$show_number = "<a href='viewtext.php?lesson=".$_GET['lesson']."&page=";
	if(($_GET['page'] >= 1) && ($_GET['page'] <= 3))
	{
		$show_number = $show_number.put_the_page(3);		
	}
	else if(($_GET['page'] >= 4) && ($_GET['page'] <= 6))
	{
		if(get_max_page($_GET['lesson']) >= 6)
		{
			$show_number = $show_number.put_the_page(6);	
		}	
	}
	else if(($_GET['page'] >= 7) && ($_GET['page'] <= 9))
	{
		if(get_max_page($_GET['lesson']) >= 9)
		{
		$show_number = $show_number.put_the_page(9);
		}			
	}
	
	echo $show_number.".jpg' width='22' height='22' border='0' /></a>";
}
?>