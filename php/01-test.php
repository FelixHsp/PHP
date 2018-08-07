<?php
	/*
	echo "----for循环的99乘法表----";
	echo "<br />";
	for($i=1;$i<=9;$i++){
		for($j=1;$j<=$i;$j++){
			echo $i." * ".$j." = ".($i*$j)." ";
		}
		echo "<br />";
	}

	echo "----while循环的99乘法表----";
	echo "<br />";
	$i=1;
	while($i<=9){
		$j=1;
		while($j<=$i){
			echo $i." * ".$j." = ".($i*$j)." ";
			$j++;
		}
		$i++;
		echo "<br />";
	}

	echo "----do-while循环的99乘法表----";
	echo "<br />";
	$i=1;
	do{
		$j=1;
		do{
			echo $i." * ".$j." = ".($i*$j)." ";
			$j++;
		}while($j<=$i);
		$i++;
		echo "<br />";
	}while($i<=9);*/



	echo "----表框99乘法表1----";
	echo "<table border=1 width=800>";
	for($i=1;$i<=9;$i++){
		echo "<tr>";
		for($j=1;$j<=$i;$j++){
			echo "<td>";
			echo $i." * ".$j." = ".($i*$j)." ";
			echo "</td>";
		}
		echo "</tr>";
	}

	echo "</table>";

	echo "<br />";
	echo "----表框99乘法表2----";
	echo "<table border=1 width=800>";
	for($i=9;$i>=1;$i--){
		echo "<tr>";
		for($j=1;$j<=$i;$j++){
			echo "<td>";
			echo $i." * ".$j." = ".($i*$j)." ";
			echo "</td>";
		}
		echo "</tr>";
	}
	echo "</table>";

	echo "<br />";
	echo "----表框99乘法表3----";
	echo "<table border=1 width=800>";
	for($i=9;$i>=1;$i--){
		echo "<tr>";
		//先打空格
		for($j=1;$j<=9-$i;$j++){
			echo "<td>";
			echo "&nbsp;";
			echo "</td>";
		}

		//再打算式
		for($k=1;$k<=$i;$k++){
			echo "<td>";
			echo $i." * ".$k." = ".($i*$k)." ";
			echo "</td>";
		}
		echo "</tr>";
	}
	echo "</table>";

	echo "<br />";
	echo "----表框99乘法表3----";
	echo "<table border=1 width=800>";
	
	echo "</table>";
?>


