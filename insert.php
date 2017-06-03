
<?php

function updateScore(){
$conn=new mysqli('localhost','root','');

if ($conn->connect_error){
	die("Connection closed: ".$conn->connect_error);
	
}

mysqli_select_db($conn,"scoreboard_db");

$sql = "Update sb_players set player_score=".$_POST["player_score"]. " where player_id=".$_POST["player_id"];
$result = $conn->query($sql);

mysqli_close($conn);

}

updateScore();

?>
