<?php

	$firstDate=strtotime('2015-10-12');
	$now=time();
	$day=($now-$firstDate)/(60*60*24) ;
	$week=$day/7;

	echo "���ı�����2015��10��12�տ�ʼ����<br/>";
	echo "������".date('Y-m-d')."��<br/>";
	echo "�����Ѿ�".floor($day)."����"."<br/>".floor($week)."��";



?>
