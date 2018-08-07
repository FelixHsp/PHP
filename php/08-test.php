<?php
	if(isset($_POST['sub'])){
		$sfile=$_FILES['sfile'];
		$sname=$sfile['name'];
		$arr=explode('.',$sname);
		$num=count($arr)-1;
		$hou=$arr[$num];
		$houarr=array('txt','exe','pdf');
		$flag=true;
		for($i=0;$i<strlen($hou);$i++){
			for($j=0;$j<count($houarr);$j++){
				if($hou[$i]==$houarr[$j]){
					$flag=false;
				}
			}
		}

		if($flag==false){
			echo "<script>alert('上传文件名非法')</script>";
		}else{
			//underscore,moment
			$oldurl=$sfile['tmp_name'];
			$newname=time().'.'.$hou;
			
			$newurl='./uploads/'.$newname;
			$a=move_uploaded_file($oldurl,$newurl);
			if($a){
				echo "success";
			}

			/*
			bool move_uploaded_file  ( string $filename  , string $destination  )*/
		}



		/*

		array(5) { ["name"]=> string(23) "11216943431d69da26o.jpg" ["type"]=> string(10) "image/jpeg" ["tmp_name"]=> string(24) "C:\xampp\tmp\php2AF3.tmp" ["error"]=> int(0) ["size"]=> int(144955) } */

		//var_dump($sfile);
	}


?>

<meta charset="utf-8">
<form action="08-test.php" method="post" enctype="multipart/form-data">
	检测一个文件名后缀<br />
	<input type="file" name="sfile">
	<input type="submit" name="sub" value="上传">
</form>