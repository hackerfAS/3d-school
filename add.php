<?php 

include_once "connect.php";

if (isset($_POST["add"])) {
	$name=$_POST["name"];
	$price=$_POST["price"];
	$image_url=$_POST["image_url"];
	$description=$_POST["description"];

	$sql = "INSERT INTO `products` (`name`, `price`, `description`,`image_url`)
	VALUES ('$name', '$price', '$description', '$image_url')";

mysqli_query($conn, $sql);
mysqli_close($conn);
header("Location:index.php");
}
else{
	header("Location:404.php");
}

 ?>