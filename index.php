<html>
<head>
<title> Score Board </title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/style.css" type="text/css">
	<script type = "text/javascript" src = "js/jquery.min.js"></script>
	<script> 
	 function updScore(num){
		 var plyrName= "player"+num;
		 var plyrScore= "score"+num;
		 var plyr = document.getElementById(plyrName).innerHTML;
		 var scr=document.getElementById(plyrScore).innerHTML;
		 var newScr=+scr + 5;
		 //document.getElementById(plyrScore).innerHTML=newScr;
		 $.ajax({
	        	url : 'insert.php',
	        	type:"post",
	        	data : {
	        		player_id : num,
					player_score : newScr
				},
	        	success: function(result){
					document.getElementById(plyrScore).innerHTML=newScr;
	            //$(plyrScore).html(newScr);
				}});
		 
	 }
	 
	</script>
</head>
<body>
<?php
$conn=new mysqli('localhost','root','');

	if ($conn->connect_error){
	die("Connection closed: ".$conn->connect_error);
	
}

mysqli_select_db($conn,"scoreboard_db");

$sql = "SELECT player_name, player_score, player_id FROM sb_players order by player_name";
$result = $conn->query($sql);

if ($result->num_rows == 0) {
	$sql = "Insert into sb_players(player_id,player_name,player_score) values (1,'Ken Murphy',0)";
	$conn->query($sql);
	$sql = "Insert into sb_players(player_id,player_name,player_score) values (2,'Mark Jackson',0)";
	$conn->query($sql);
	$sql = "Insert into sb_players(player_id,player_name,player_score) values (3,'Sheila Abbott',0)";
	$conn->query($sql);
	$sql = "Insert into sb_players(player_id,player_name,player_score) values (4,'Susan Sullivan',0)";
	$conn->query($sql);
	
	$sql = "SELECT player_name, player_score, player_id FROM sb_players order by player_name";
	$result = $conn->query($sql);
 }
 
 echo "<table>";
 echo "<thead>";
 echo "<tr>";
 echo "<th> Player</th>";
 echo "<th> Score </th>";
 echo "</tr>";
 echo "</thead>";
 echo "<tbody>";
 while($row = $result->fetch_assoc()) {
echo "<tr>";
echo '<td id="player' .$row["player_id"].'" onclick="updScore('.$row["player_id"].')">' . $row["player_name"]. " </td>";
echo '<td id="score' .$row["player_id"].'">'. $row["player_score"]. " </td>";
echo "</tr>";
    }
echo "</tbody>";
echo "</table>";
 
 

 
mysqli_close($conn);


?>

<p align> Click on player name to update their score. </p>
</body>
</html>