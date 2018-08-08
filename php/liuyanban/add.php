<?php 
	include "conn.php";
	if (isset($_POST['sub'])) {
		$title=$_POST['title'];
		$con=$_POST['con'];
		//1.拼写SQL语句
		$sql="insert into blog(bid,title,time,content) values(null,'$title',now(),'$con')";
		
		//2.SQL语句发送给Mysql执行
		$rs=mysqli_query($link,$sql);
		if ($rs) {
			header('location:index.php');
		}else{
			echo "<script> alert('添加失败') </script>";
		}
	}


 ?>
 <meta charset="utf-8">
 <form 	action="add.php" method="post">
 	标题:<input type="text" name="title"><br />
 	内容:<textarea rows=5 cols=20 name="con"> </textarea> <br />
 	<input type="submit" name="sub" value="发布文章">


 </form>