<?php
$conn = new mysqli("localhost", "username", "password", "my_aspid");
if($mysqli->connect_error) {
  exit('Could not connect');
}
$id=$_GET["id"];
$sql = "SELECT `like` FROM `quadri` WHERE `id_quadro` =".$id;
$result = $conn->query($sql);
if ($result->num_rows > 0)
{
  $row = $result->fetch_assoc();
	echo $row["like"];
}
?>