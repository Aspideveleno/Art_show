<?php
header('Content-Type: application/json');
$conn = new mysqli("localhost", "username", "password", "my_aspid");
if($mysqli->connect_error) {
  exit('Could not connect');
}
$myJSON=[];
$sql = "SELECT * FROM `quadri` ORDER BY `like` DESC limit 3";
$result = $conn->query($sql);
if ($result->num_rows > 0)
{
	while($row = $result->fetch_assoc())
	{
	$myObj = new \stdClass;
	$myObj->nome = $row["nome"];
	$myObj->like = $row["like"];
	array_push($myJSON,$myObj);
	}
}
$myJSON = json_encode($myJSON);
echo $myJSON;
?>