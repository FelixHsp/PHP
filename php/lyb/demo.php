<?php
	setcookie('name','');
	if(isset($_COOKIE['name'])){
		echo "success";
	}else{
		echo "error";
	}

?>