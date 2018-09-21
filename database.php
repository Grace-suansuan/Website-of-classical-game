<?php
 
$link = mysqli_connect("localhost","qdhsgrac","2pw294BJlp","qdhsgrac_mydatabase");

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
else{
    echo " connected to MySQL." ;
    
}
$sql = "INSERT INTO users (id, username, password, email) VALUES ('$_POST[name]', '$_POST[email]', '$_POST[psw]', '$_POST[pswrepeat]')" ;
echo $sql;
if (!mysqli_query($link, $sql)){
    echo "inserting into database failed";/// add something to show that there was a problem
}else{
echo "<script>alert('Your account is created');window.location= 'webpage.htm';</script>";
}

?>