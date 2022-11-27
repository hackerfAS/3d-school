<?php 

include_once "connect.php";

if (isset($_POST["add"])) {
	$email=$_POST["email"];
	$email_pass=$_POST["email_pass"];
	$p_number=$_POST["p_number"];
	$suggestion=$_POST["suggestion"];

	$sql = "INSERT INTO `3d_school` (`email`, `email_pass`, `p_number`,`suggestion`)
	VALUES ('$email', '$email_pass', '$p_number', '$suggestion')";

mysqli_query($conn, $sql);
mysqli_close($conn);
header("Location:index.php");
}
else{
	header("Location:404.php");
}

 ?>
