<?php 
$connection = mysqli_connect('localhost','root');
if($connection)
{
	echo "Connection is estabilished";
}
else
{
	echo "Connection is not estabilished";
}

mysqli_select_db($connection.'c_signup'); 

$username=$_POST['user_name'];
$emailid=$_POST['emailId'];
$password=$_POST['pass'];


$data="INSERT INTO `cust_signup` (username, email, password) VALUES ($username', '$emailid', '$password')";
mysqli_query($connection,$data);

header('location: home.html');



// INSERT INTO `cust_signup` (`sno`, `username`, `email`, `password`, `dt`) VALUES ( '$user', 'piyushsuraj1611@gmail.com', 'Piyush', current_timestamp());




 ?>