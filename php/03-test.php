<?php
	if(isset($_POST['sub'])){
		$score=$_POST[score];
		if(is_numeric($score)){
			if($score>100 || $score<0){
				echo "<script>alert('输入分数越界')</script>";
			}else{
				
			}
		}else{
			echo "<script>alert('请输入数字')</script>";
		}
	}


?>

<meta charset="utf-8">
<h3>输入分数查询成绩</h3>
<form action="03-test.php" method="post">
	输入分数:<input type="text" name="score"><br />
	<input type="submit" name="sub" value="提交查询">&nbsp;$nbsp;
	<input type="reset" name="rst" value="重置分数">
</form>