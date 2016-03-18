<?php

	$firstDate=strtotime('2015-10-12');
	$now=time();
	$day=($now-$firstDate)/(60*60*24) ;
	$week=$day/7;

	echo "您的宝宝于2015年10月12日开始生长<br/>";
	echo "今天是".date('Y-m-d')."日<br/>";
	echo "宝宝已经".floor($day)."天了"."<br/>".floor($week)."周";



?>
