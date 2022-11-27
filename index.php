<!DOCTYPE html>
<html lang="hy">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
    <form method="POST" action="add.php">
<div class="form-item">          
    <input type="text" name="name" placeholder="Name" required>
    <br>
    <br>
</div>
<div class="form-item">
    <input type="text" name="price" placeholder="Price" required>
    <br>
    <br>
</div>
<div class="form-item">
    <input type="text" name="image_url" placeholder="Image_url" required>
    <br>
    <br>
</div>
<div class="form-item">
    <textarea name="description" placeholder="Description"></textarea>
    <br>
    <br>
</div>
<div class="form-item">
    <input type="submit" name="add" class="btn">
    <br>
    <br> 
</div>
    </div>
    </div>  
    </div>
    </form>

<?php
include_once "connect.php";
$sql = "SELECT * FROM `products`";
$products = mysqli_query($conn, $sql);
?>

<?php 
include_once "connect.php";

$sql = "SELECT * FROM `products`";
$products = mysqli_query($conn, $sql);
?>

	<div class="tb">
		<table border="1">
			<?php
				if (mysqli_num_rows($products) > 0) {
				  // output data of each row
				  while($product = mysqli_fetch_assoc($products)) {?>
				  	<tr>
						<td><?php echo $product["id"]; ?></td>
						<td><?php echo $product["name"]; ?></td>
						<td><?php echo $product["price"]; ?></td>
						<td><?php echo $product["description"]; ?></td>
						<td><?php echo $product["image_url"]; ?></td>
						<td><a href='update.php/?id=<?php echo $product["id"]; ?>'>UPDATE</a></td>
						<td>
							<form action="delete.php/?id=<?php echo $product['id']; ?>" method="POST">
								<input type="submit" name="delete" value="DELETE">
							</form>
						</td>
					</tr>
				<?php    
				  }
				} else {
				  echo "0 results";
				}
			?>
			
		</table>
	</div>



</body>
</html>