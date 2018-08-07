<?php
	$str="0123456789abcdefghigklmnopqrstuvwxyz";
	$newstr="";
	$flag=true;
	for($i=0;$i<4;$i++){

		$b=rand(0,35);
		for($j=0;$j<strlen($newstr);$j++){
			if($newstr[$j]==$str[$b]){
				$flag=false;
			}
		}

		if($flag==false){
			$i--;
			continue;
		}
		
		$newstr.=$str[$b];
		
	}

	echo $newstr;

	


?>