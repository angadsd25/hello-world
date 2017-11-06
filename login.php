<?php

$servername="localhost";
$username="root";
$password="";
$dbname="project";

$connection=mysqli_connect($servername,$username,$password,$dbname);



$name=$_POST['name'];
$regno=$_POST['regno'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$address=$_POST['address'];
$city=$_POST['city'];
$email=$_POST['email'];
$password=$_POST['password'];

$query="INSERT INTO portalregn values('$name','$regno','$fname','$mname','$address','$city','$email','$password')";
$result_set= mysqli_query($connection,$query);


?>