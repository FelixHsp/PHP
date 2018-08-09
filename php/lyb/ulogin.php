<?php
	if(isset($_COOKIE['uid'])){
		setcookie('name','');
		setcookie('uid','');
		//header('location:login.php');
		echo "<script>location='index.php'</script>";
	}

?>