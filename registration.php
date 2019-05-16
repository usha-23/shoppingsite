<?php
session_start();
header('location:login.php');
$con=mysqli_connect('localhost','root');
if($con){
	echo" Successfully signed in";
}
else {
	echo"No Connection";

}
mysql_select_db($con,'sessionpractical');
$name=$_POST['user'];
$pass=$_POST['password'];
$q="select* from signin where name ='$name'&& password='$pass'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==1){
	echo"Duplicate data";

}
else {
	$qy="insert into signin(name,pass) values('$name','$pass')";
	mysqli_query($con,$qy);
}
?>