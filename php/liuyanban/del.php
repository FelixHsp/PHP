<?php
	include "conn.php";
	if(isset($_GET['bid'])){
		$bid=$_GET['bid'];
		//删除操作
		$sql="delete from blog where bid='$bid'";
		$query=mysqli_query($link,$sql);
		if($query){
			echo "<script>alert('删除成功')</script>";
			echo "<script>location='index.php'</script>";
		}
	}

?>