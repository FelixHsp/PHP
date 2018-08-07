<?php
	//$user=array(1,2,3,4,5);
	//$user=array(1,'laoshan',array(2,3),true);
	//索引数组 关联数组


	/*
	$user[]=1;
	$user[5]='laoshan';
	$user[]=19;
	$user[2]='male';
	$user[]='laoshan@163.com';
	$user[]=array(1,2);

	echo "<pre>";
	print_r($user);
	echo "</pre>";*/

	$user['id']=1;
	//$user[]=66;
	$user['name']='laoshan';
	$user['age']=19;
	//$user[]=89;
	$user['gender']='male';
	$user['email']='laoshan@163.com';
	/*
	echo "<pre>";
	print_r($user);
	echo "</pre>"*/

	//foreach(数组名 as 键名变量名=>键值变量名){}
	//foreach(数组名 as 键值变量名){}
	foreach($user as $k=>$v){
		echo $k."=>".$v."<br />";
	}

	$IP="192.168.0.1";
	$arr=explode('.',$IP);
	list($a,$b,$c,$d)=$arr;
	echo $b;

	echo "<br />";

	$user=array(
			'id'=>1,
			'name'=>'laoshan',
			'age'=>19,
			'email'=>'laoshan@163.com',
		);

	//$a=each($user);
	each($user);
	reset($user);
	next($user);
	prev($user);
	end($user);
	next($user);
	while($result=each($user)){
		echo $result[key]."=>".$result[value]."<br />";
	}
	//print_r($a);




?>