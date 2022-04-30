<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','db_contact');

// get the post records
$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtPassword'];

// database insert SQL code
$sql = "INSERT INTO `users` (`Id`, `fldName`, `fldPassword`) VALUES ('0', '$txtName', '$txtPassword')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Login info Inserted";
}

?>