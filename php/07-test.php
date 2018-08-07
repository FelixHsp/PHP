<?php
	$info=array(
			'user'=>array(
					array(1,'zhangsan',10,'male'),
					array(2,'lisi',12,'female'),
					array(3,'wangwu',23,'male'),
				),
			'score'=>array(
					array(1,100,90,80),
					array(2,45,67,68),
					array(3,34,5,78),
				),
			'connect'=>array(
					array(1,110,'aa@bb.com'),
					array(2,220,'cc@cc.com'),
					array(3,330,'rr@bb.com'),
				),

		);

	foreach($info as $k=>$v){
		echo "<table border='1' width=800 align='center'>";
		echo "<caption><h3>".$k."</h3></caption>";
		foreach($v as $value){
			echo "<tr>";
			foreach($value as $s){
				echo "<td>";
				echo $s;
				echo "</td>";
			}
			echo "</tr>";
		}

		echo "</table>"; 
	}

?>
