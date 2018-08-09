<?php
	//创建数据库连接
	$link=@mysqli_connect('localhost','root','') or die('创建数据库连接失败');
	//选择数据库
	@mysqli_select_db($link,'lyban') or die('选择数据库失败');
	//设置数据库传输编码
	mysqli_set_charset($link,"UTF8");

	//PHP引入文件 include include_once require

?>