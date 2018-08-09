<?php
	if(!isset($_COOKIE['uid'])){
		$arr=explode('/',$_SERVER['REQUEST_URI']);
		$num=count($arr)-1;
		$newurl=$arr[$num];
		echo "<script>location='login.php?url=$newurl'</script>";
	}

?>

<?php
	include "conn.php";
	if(isset($_POST['sub'])){
		$title=$_POST['title'];
		$con=$_POST['con'];
		$cid=$_POST['cid'];
		//1:拼写SQL语句
		$sql="insert into blog(bid,title,time,content,cid) values(null,'$title',now(),'$con','$cid')";
		//2:SQL语句发送给数据库执行 string->resource
		$query=mysqli_query($link,$sql);
		if($query){
			echo "<script>alert('插入数据成功')</script>";
			echo "<script>location='index.php'</script>";
		}else{
			echo "<script>location='add.php'</script>";
		}

	}

?>

<meta charset="utf-8">
<form action="add.php" method="post">
	标题:<input type="text" name="title">
	<select name="cid" id="">
		<?php
			$sql="select * from catalog";
			$query=mysqli_query($link,$sql);
			while($rs=mysqli_fetch_array($query)){
		?>
		<option value="<?php echo $rs['cid']?>"><?php echo $rs['cname']?></option>
		<?php
			}
		?>
	</select>
	<br />
	内容:<textarea rows="5" cols=30 name="con"></textarea><br />
	<input type="submit" name="sub" value="添加"> 
</form>