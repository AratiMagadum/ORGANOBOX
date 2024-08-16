<?php
include('index.php');
if(isset($_POST['Register Now'])){
$fname=$_POST['fname'];
$Lname=$_POST['Lname'];
$email=$_POST['email'];
$password=$_POST['password'];

$host='localhost';
$user='root';
$pass='';
$dbname='register3';

$conn=mysqli_connect($host,$user,$pass,$dbname);
$sql="INSERT INTO register1(fname,Lname,email,password) values('$fname','$Lname','$email','$password)";
mysqli_query($conn,$sql);
}
?>