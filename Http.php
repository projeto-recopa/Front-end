<?php

$conn = mysqli_connect("bdrecopa.mysql.dbaas.com.br", "bdrecopa", "Sp@#142536", "bdrecopa");

for ($a = 0; $a < count($_FILES["images"]["name"]); $a++)
{
	$path = "images/" . $_FILES["images"]["name"][$a];

	mysqli_query($conn, "INSERT INTO images(image_path) VALUES('$path')");
	move_uploaded_file($_FILES["images"]["tmp_name"][$a], $path);
}

echo "Done";
