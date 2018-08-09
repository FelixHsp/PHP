<style>
	*{
		margin:0;
		padding:0;
	}
	#div1{
		width:300px;
		background:red;
		float:left;
	}
	#div2{
		width:200px;
		height:200px;
		float:right;
		background:#ccc;
		margin-right:100px;
	}
</style>


<a href="add.php">添加文章</a>&nbsp;&nbsp;
<?php
	if(isset($_COOKIE['uid'])){
		echo "<a href='manage.php'>".$_COOKIE['name']." 已登录</a>";
		echo "&nbsp;";
		echo "<a href='ulogin.php'>注销</a>";
	}else{
		echo "<a href='login.php'>未登录</a>";
	}
?>
<form action="index.php" method="get">
	<input type="text" name="search">&nbsp;
	<input type="submit" name="sub" value="搜索">
</form>

<div id="div1">
<?php
	include "conn.php";
	if(isset($_GET['sub'])){
		$search=$_GET['search'];
		$se="title like '%".$search."%'";
	}else{
		$se=1;
	}

	if(isset($_GET['cid'])){
		$cid=$_GET['cid'];
		//$se="blog.cid=catalog.cid and cid='$cid'";
		$sql="select * from blog,catalog where blog.cid=catalog.cid and blog.cid='$cid'";
	}else{
		$sql="select * from blog where $se";
	}

	
    
	$query=mysqli_query($link,$sql);
	while($rs=mysqli_fetch_array($query)){
?>

<h3><a href="all.php?bid=<?php echo $rs['bid']?>">标题:<?php echo $rs['title']?></a>|<a href="edit.php?bid=<?php echo $rs['bid']?>">编辑</a>|<a href="del.php?bid=<?php echo $rs['bid'] ?>">删除</a></h3>
<li>时间:<?php echo $rs['time']?></li>
<p><?php echo iconv_substr($rs['content'],0,3)?>...</p>
<hr />

<?php
	}
?>
</div>
<div id="div2">
	<?php 
		$sql="select * from catalog";
		$query=mysqli_query($link,$sql);
		while($rs=mysqli_fetch_array($query)){
	?>
		<li><a href="index.php?cid=<?php echo $rs['cid']?>"><?php echo $rs['cname']?></a></li>
	<?php
		}
	?>
</div>
