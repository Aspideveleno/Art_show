<?php
$conn = new mysqli("localhost", "username", "password", "my_aspid");
if($mysqli->connect_error) {
  exit('Could not connect');
}

$sql = "SELECT nome,anno,autore,img,descrizione
FROM quadri WHERE nome = ?";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($name, $anno, $autore, $img, $desc);
$stmt->fetch();
$stmt->close();

echo'<div class="post">';
echo'    <div class="user">';
echo'      <div class="user-img"></div>';
echo'      <div class="user-info">';
echo'        <div class="user-name">'.$name.'</div>';
echo'        <span class="post-date">'.$anno.' di '.$autore.'</span>';
echo'      </div>';
echo'      <div class="actions">';
echo'        <span class="heart" onclick="Like(); return false"></span>';
echo'        <!---<span class="comment"></span>-->';
echo'        <!---<span class="share"></span>-->';
echo'     </div>';
echo'    </div>';
echo'    <div class="content">';
echo'		<img src="'.$img.'" alt="Gabbiano" style="width:550px;height:500px;"><br>';
echo'      '.$desc.'';
echo'    </div>';
echo'  </div>';
?>