<?php
	if(isset($_POST['sub'])){
		$you=$_POST['you'];
		$num=rand(0,2);
		$arr=array('布','剪刀','拳头');
		echo "你出的是".$arr[$you];
		if($you==2 and $num==1){
			echo "你赢";
		}

		if($you==2 and $num==2){
			echo "平";
		}

		if($you==2 and $num==0){
			echo "电脑赢";
		}
	}

?>

<meta charset="utf-8">
<form action="04-test.php" method="post">
	请出拳
	<select name="you" id="" onclick=mychange(this)>
		<option value="2">拳头</option>
		<option value="1">剪刀</option>
		<option value="0">布</option>
	</select>
	<img src="cq.jpg" alt="" id="myimg">
	<input type="submit" name="sub" value="提交">
</form>

<script>
	function mychange(obj){
		var val=obj.value;
		var oImg=document.getElementById('myimg');
		if(val==2){
			oImg.src='qt.jpg';
		}else if(val==1){
			oImg.src='jz.jpg';
		}else{
			oImg.src="b.jpg";
		}
	}
</script>