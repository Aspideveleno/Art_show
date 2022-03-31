<?php
header('Content-Type: application/json');
$conn = new mysqli("localhost", "username", "password", "my_aspid");
if($mysqli->connect_error) {
  exit('Could not connect');
}
$id=$_GET["id"];
$array = explode(",",$id);
$myJSON=[];
foreach ($array as &$value) {
	$sql = "SELECT `like` FROM `quadri` WHERE `id_quadro` =".$value;
	$result = $conn->query($sql);
	if ($result->num_rows > 0)
	{
		$row = $result->fetch_assoc();
		$myObj = new \stdClass;
		$myObj->id = $value;
		$myObj->like = $row["like"];
		array_push($myJSON,$myObj);
	}
}
$myJSON = json_encode($myJSON);
echo $myJSON;
?>