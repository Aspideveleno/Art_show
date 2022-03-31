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
  if(isset($_COOKIE[$id]))
  {
    setcookie($id, "yes", time() -3600);
    $row = $result->fetch_assoc();
    $like = $row["like"] - 1;
    echo $like;
    $sql = "UPDATE quadri SET `like` = ".$like." WHERE `id_quadro`= ".$id;
    $result = $conn->query($sql);
  }
  else{
    setcookie($id, "yes");
    $row = $result->fetch_assoc();
    $like = $row["like"] + 1;
    echo $like;
    $sql = "UPDATE quadri SET `like` = ".$like." WHERE `id_quadro`= ".$id;
    $result = $conn->query($sql);
  }
}
?>