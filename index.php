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
      let text =this.responseText;
      var myJson = JSON.parse(text);
      //console.log(myJson[0]);
      for(var i = 0; i < myJson.length; i++) {
        document.getElementById("contatore" + myJson[i].id).innerHTML = myJson[i].like;
      }
    }
    xhttp.open("GET", "check.php?id="+id);
    xhttp.send();
  }
  function ControlloClass()
  {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
      let text =this.responseText;
      var myJson = JSON.parse(text);
      //console.log(myJson[0]);
      for(var i = 0; i < myJson.length; i++) {
        document.getElementById("classifica" + i).innerHTML = i + "° " + myJson[i].nome + ":" +myJson[i].like;
      }
    }
    xhttp.open("GET", "checkclass.php");
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
  <div class="sidenav">
    <a>Classifica dei quadri</a>
  <?php
    $sql = "SELECT * FROM quadri ORDER BY `like` DESC limit 3";
    $result = $conn->query($sql);
    $c=-1;
    if ($result->num_rows > 0)
    {
	    while($row = $result->fetch_assoc()){
        $c = $c +1;
        echo '<a id="classifica'.$c.'">'.$row["nome"].'  '.$row["like"].'</a>';
      }
    }
  ?>
</div>
  <!---<div id="top-bar">
    <div class="search">
      <input placeholder="Cerca un quadro"/>
    </div>
  </div>
  <div id="sub-menu">
    <div id="left-bar">
      <div class="heading">
        Notifications
      </div>
    </div>
    <div id="right-bar">
      
    </div>
  </div>-->
  <div id="main-window">
    <?php
    $sql = "SELECT * FROM quadri";
  $result = $conn->query($sql);
  $allid="";
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
    //echo'  <script>';
    $allid= $allid.$row["id_quadro"].",";
    echo $allid;//echo'  setInterval(Controllo, 1000, "'.$row["id_quadro"].'");';
    //echo'  </script>';
    }
    echo'  <script>';
    echo'  setInterval(Controllo, 1000, "'.$allid.'");';
    echo'  setInterval(ControlloClass, 1000,);';
    echo'  </script>';
  }
  else{
	  echo"errore";
  }
    ?>
  </div>
</html>
// brutto coglione metti tutto in una string con id:like,id:like.....