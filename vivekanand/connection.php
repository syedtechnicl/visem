<?php 
$servername="localhost";
$username="root";
$password="";
$dbname="vi sem";
$con=mysqli_connect($servername,$username,$password,$dbname);
if ($con) {
	# code...
echo "connection successfully";
}
else{
echo "no connection";	
}











 ?>