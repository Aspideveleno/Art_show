<?php
$conn = new mysqli("localhost", "username", "password", "my_aspid");
if($mysqli->connect_error) {
  exit('Could not connect');
}
?>
<html>
<script>
    function Controllo(id)
  {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
    document.getElementById("contatore" + id).innerHTML = this.responseText;
    }
    xhttp.open("GET", "check.php?id="+id);
    xhttp.send();
  }
  function Like(id)
  {
  	const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
    document.getElementById("contatore" + id).innerHTML = this.responseText;
    }
    xhttp.open("GET", "addlike.php?id="+id);
    xhttp.send();
  }
  </script>
  <link rel="stylesheet" href="style.css">
  <div id="top-bar">
    <!---<div class="profile">
      
    </div>-->
    <div class="search">
      <input placeholder="Cerca un quadro"/>
    </div>
    <!---<div class="new-post"></div>-->
  </div>
  <div id="sub-menu">
    <div id="left-bar">
      <div class="heading">
        Notifications
      </div>
    </div>
    <div id="right-bar">
      
    </div>
  </div>
  <div id="main-window">
    <?php
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
	  echo'        <span class="heart" onclick="Like('.$row["id_quadro"].'); return false"></span>';
	  echo'        <p id="contatore'.$row["id_quadro"].'">'.$row["like"].'</p><!---<span class="comment"></span>-->';
	  echo'        <!---<span class="share"></span>-->';
	  echo'     </div>';
	  echo'    </div>';
	  echo'    <div class="content">';
	  echo'		<img src="Image/'.$row["img"].'" alt="Quadro" style="width:550px;height:500px;"><br>';
	  echo'      '.$row["descrizione"].'';
	  echo'    </div>';
	  echo'  </div>';
    echo'  <script>';
    echo'  setInterval(Controllo, 1000, "'.$row["id_quadro"].'");';
    echo'  </script>';
    }
  }
  else{
	  echo"errore";
  }
    ?>
  </div>
</html>