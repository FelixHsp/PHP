<?php
	//打开数据连接
	$link=@mysqli_connect('localhost','root','') or die('打开数据库连接失败');
	//选择数据库
	@mysqli_select_db($link,'lyban') or die('数据库选择失败');
	//设置数据库传输编码
	@mysqli_set_charset($link,'UTF8');

?>