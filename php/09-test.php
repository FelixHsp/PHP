<?php
	if(isset($_POST['sub'])){
		$s1=$_FILES['sfile'];
		
		echo "<pre>";
		var_dump($s1);
		echo "</pre>";

	}

?>

<meta charset="utf-8">
<form action="09-test.php" method="post" enctype="multipart/form-data">
	<input type="file" name="sfile[]">
	<input type="file" name="sfile[]">
	<input type="submit" name="sub" value="上传">
</form>