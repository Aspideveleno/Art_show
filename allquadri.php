<?php
$conn = new mysqli("localhost", "username", "password", "my_aspid");
if($mysqli->connect_error) {
  exit('Could not connect');
}

$sql = "SELECT * FROM quadri";
$result = $conn->query($sql);
if ($result->num_rows > 0)
{
	while($row = $result->fetch_assoc()){
	echo'<div class="post">';
	echo'    <div class="user">';
	echo'      <div class="user-img"></div>';
	echo'      <div class="user-info">';
	echo'        <div class="user-name">'.$row["nome"].'</div>';
	echo'        <span class="post-date">'.$row["anno"].' di '.$row["autore"].'</span>';
	echo'      </div>';
	echo'      <div class="actions">';
	echo'        <span class="heart" onclick="Like(); return false"></span>';
	echo'        <!---<span class="comment"></span>-->';
	echo'        <!---<span class="share"></span>-->';
	echo'     </div>';
	echo'    </div>';
	echo'    <div class="content">';
	echo'		<img src="Image/'.$row["img"].'" alt="Quadro" style="width:550px;height:500px;"><br>';
	echo'      '.$row["descrizione"].'';
	echo'    </div>';
	echo'  </div>';
    }
}
else{
	echo"errore";
}
?>