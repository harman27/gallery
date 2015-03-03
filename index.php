<?php 
	error_reporting(E_ALL^E_DEPRECATED);
	mysql_connect("localhost","root","");
	mysql_select_db("acet");
	if(isset($_POST['submit'])){
		$filename= $_FILES['gallery']['name'];
		$arr= explode(".",$filename);
		$ext= end($arr);
		$allowed= ["png","jpg","gif"];
		if(in_array($ext,$allowed)){
			$random= rand(1111111,99999999);
			$new_name=$random.$filename;
			move_uploaded_file($_FILES['gallery']['tmp_name'],"gallery/".$new_name);
			mysql_query("insert into gallery (name) values ('$new_name')");
		}else{
			echo "not";
		}
	}
	?>
	<!DOCTYPE HTML>
	<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
		<form action="" method="post" enctype="multipart/form-data">
			<input type="file" name="gallery"> <br>
			<input type="submit" value="Upload" name="submit" />
		</form>
	</body>
	</html>
