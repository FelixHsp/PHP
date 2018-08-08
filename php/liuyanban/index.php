<a href="add.php">添加文章</a><br />
<?php
	include "conn.php";

	//$sql="select * from blog limit 3";
	$sql="select * from blog order by bid desc";
	$rs=mysqli_query($link,$sql);
	while($result=mysqli_fetch_array($rs)){
?>

<h3>标题:<?php echo $result['title'];?> |<a href="update.php?bid=<?php echo $result['bid']?>">修改</a>|<a href="del.php?bid=<?php echo $result['bid']?>">删除</a></h3>
<li>时间:<?php echo $result['time'];?></li>
<p><?php echo iconv_substr($result['content'],0,3);?>...</p>
<hr />

<?php
	}
?>
