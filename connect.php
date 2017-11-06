<?
$conn=mysqli_connect("localhost","root","");
mysql_select_db("project");

if(!$conn)
echo "error";
else
echo "connected";
?>