<?php  
	//$username=$_REQUEST["username"];  
	//$password=$_REQUEST["password"];  
	
	//$score=$_REQUEST["myscore.text"];
	$score=$_POST["m_score"];
	//echo $score;

	$con=mysqli_connect('127.0.0.1', 'root', '','user_db');

	if(mysqli_connect_errno($con)){
		
		echo "Connection MySQL is failed: " . mysqli_connect_error(); 
	}

	echo 'Connection OK';
	
	$sql="insert into users (username,password,email,score) values ('derekzxq','12345678','qiqi_zxq@163.com','18.5')";  
	
	echo $sql;
	
	if(!mysqli_query($con,$sql)){
		echo " failure! ";
	}else{
		echo " Saved! ";
	}
	
	mysqli_close($con);
?> 