<?php
$username=$_POST['name'];
$password=$_POST['psw'];

$link = mysqli_connect('127.0.0.1', 'root', '','user_db');
$query=mysqli_query($link,"SELECT username,password FROM users WHERE username = '$username'");
$row = mysqli_fetch_array($query);

if($_POST['login']){
    if($row['username']==$username &&$row['password']==$password){
        setcookie('uname',$username,time()+7200);
        echo "<script>alert('successfully login');window.location= 'index.html';</script>";
    }
	
    else echo "<script> alert('Sorry, you failed to login'); history.go(-2)</script>";
}

include('login.htm');?> 
