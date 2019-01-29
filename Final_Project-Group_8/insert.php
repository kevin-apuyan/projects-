
<!--
This page is the initial page a user arrives at prior to creating a user account or logging in.
-->
<!DOCTYPE html>
<html>
<head>
<link type="text/css" rel='stylesheet' href='style.css'/>
<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href="http://s3.amazonaws.com/codecademy-content/courses/ltp2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="jumbotron">
	<a href= "index.php"> <img class="logo" src="pball.png"> </a>	
	<p class="title">PokemonGODatabase.net</p>
</div>
<div class="container">
	
</div>
<div class="container">
  <div class="jumbotron" style = "color:white">
    <h1></h1>
	<form method="POST" action="insert.php">
	 <center><table>
 <center>
   <tr>
     <td><form action="insert.php" method="post">
<?php



// Create connection
$connect = mysqli_connect("localhost","root","","pokemon_go");




// Check connection
if (!$connect) {
	echo 'not connected';
} 
else 
{
	//echo "Connected successfully";

	mysqli_query($connect,"INSERT INTO login VALUES ('$_POST[trainer_email]','$_POST[nickname]','$_POST[DoB]')");
$result = mysqli_query($connect,"SELECT * FROM login");
echo "<table border='1'>
<tr>
<th>trainer_email</th>
<th>username</th>
<th>DoB</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['trainer_email'] . "</td>";
echo "<td>" . $row['nickname'] . "</td>";
echo "<td>" . $row['DoB'] . "</td>";
echo "</tr>";
}
echo "</table>";
	
//**************************************************************************************************

echo "<br><br>";


mysqli_query($connect,"INSERT INTO trainer_account VALUES ('$_POST[nickname]','$_POST[tlevel]','$_POST[numBat]','$_POST[distance]','$_POST[date]','$_POST[EXP]','$_POST[rank]','$_POST[numPoke]')");
$result2 = mysqli_query($connect,"SELECT * FROM trainer_account");
echo "<table border='1'>
<tr>
<th>trainer_name</th>
<th>trainer_level</th>
<th>num_battles</th>
<th>distance_walked</th>
<th>start_date</th>
<th>total_exp</th>
<th>trainer_rank</th>
<th>num_Pokemon</th>
</tr>";



while($row = mysqli_fetch_array($result2))
{
echo "<tr>";
echo "<td>" . $row['trainer_name'] . "</td>";
echo "<td>" . $row['trainer_level'] . "</td>";
echo "<td>" . $row['num_battles'] . "</td>";
echo "<td>" . $row['distance_walked'] . "</td>";
echo "<td>" . $row['start_date'] . "</td>";
echo "<td>" . $row['total_exp'] . "</td>";
echo "<td>" . $row['trainer_rank'] . "</td>";
echo "<td>" . $row['num_Pokemon'] . "</td>";
echo "</tr>";
}
echo "</table>";
//**************************************************************************************************
echo "<br><br>";


mysqli_query($connect,"INSERT INTO statistics VALUES ('$_POST[nickname]','$_POST[distance]','$_POST[numPoke]',
'$_POST[numBat]', '$_POST[rank]','$_POST[EXP]', '$_POST[tlevel]')");
$result3 = mysqli_query($connect,"SELECT * FROM statistics");
echo "<table border='1'>
<tr>
<th>Pokemon Trainer</th>
<th>Distance</th>
<th>Number of Pokemon</th>
<th>Number of Battles</th>
<th>Rank</th>
<th>EXP</th>
<th>Trainer Level</th>

</tr>";



while($row = mysqli_fetch_array($result3))
{
echo "<tr>";
echo "<td>" . $row['trainer_name'] . "</td>";
echo "<td>" . $row['distance_walked'] . "</td>";
echo "<td>" . $row['num_pokemon'] . "</td>";
echo "<td>" . $row['num_battles'] . "</td>";
echo "<td>" . $row['trainer_rank'] . "</td>";
echo "<td>" . $row['total_exp'] . "</td>";
echo "<td>" . $row['trainer_level'] . "</td>";





echo "</tr>";
}
echo "</table>";

//**************************************************************************************************
echo "<br><br>";


mysqli_query($connect,"INSERT INTO pokemon VALUES ('$_POST[pokemon]','$_POST[nickname]','$_POST[IV]',
'$_POST[HP]', '$_POST[CP]','$_POST[pokeID]','$_POST[move]', '$_POST[type]', '$_POST[attack]',
'$_POST[defense]', '$_POST[speed]', '$_POST[evolves]','$_POST[egg]')");
$result4 = mysqli_query($connect,"SELECT * FROM pokemon");
echo "<table border='1'>
<tr>
<th>Pokemon Name</th>
<th>Trainer</th>
<th>IV</th>
<th>HP</th>
<th>CP</th>
<th>Pokemon ID</th>
<th>Move</th>
<th>Type</th>
<th>Attack</th>
<th>Defense</th>
<th>Speed</th>
<th>Next Evolution</th>
<th>Egg Type</th>
</tr>";



while($row = mysqli_fetch_array($result4))
{
echo "<tr>";
echo "<td>" . $row['pokemon_name'] . "</td>";
echo "<td>" . $row['owner'] . "</td>";
echo "<td>" . $row['iv'] . "</td>";
echo "<td>" . $row['hp'] . "</td>";
echo "<td>" . $row['cp'] . "</td>";
echo "<td>" . $row['pokeID'] . "</td>";
echo "<td>" . $row['move2'] . "</td>";
echo "<td>" . $row['type'] . "</td>";
echo "<td>" . $row['attack'] . "</td>";
echo "<td>" . $row['defense'] . "</td>";
echo "<td>" . $row['speed'] . "</td>";
echo "<td>" . $row['evolves'] . "</td>";
echo "<td>" . $row['egg_type'] . "</td>";
echo "</tr>";
}
echo "</table>";
	
//**************************************************************************************************	
echo "<br><br>";


mysqli_query($connect,"INSERT INTO moveset VALUES ('$_POST[pokemon]','$_POST[move]','$_POST[type]'
,'$_POST[pokeID]','$_POST[pokeDex]')");
$result5 = mysqli_query($connect,"SELECT * FROM moveset");
echo "<table border='1'>
<tr>
<th>Pokemon Name</th>
<th>Move</th>
<th>Move Type</th>
<th>Pokemon ID</th>
<th>PokeDex Number</th>
</tr>";



while($row = mysqli_fetch_array($result5))
{
echo "<tr>";
echo "<td>" . $row['pokemon_name'] . "</td>";
echo "<td>" . $row['move_name'] . "</td>";
echo "<td>" . $row['move_type'] . "</td>";
echo "<td>" . $row['pokeID'] . "</td>";
echo "<td>" . $row['pokeDex'] . "</td>";

echo "</tr>";
}
echo "</table>";	
//**************************************************************************************************
	echo "<br><br>";


mysqli_query($connect,"INSERT INTO evolution VALUES ('$_POST[pokemon]','$_POST[candy]','$_POST[evolves]', '$_POST[pokeID]')");
$result6 = mysqli_query($connect,"SELECT * FROM evolution");
echo "<table border='1'>
<tr>
<th>Pokemon Name</th>
<th>Candy Required</th>
<th>Next Evolution</th>
<th>Pokemon ID</th>
</tr>";



while($row = mysqli_fetch_array($result6))
{
echo "<tr>";
echo "<td>" . $row['pokemon_name'] . "</td>";
echo "<td>" . $row['candy_required'] . "</td>";
echo "<td>" . $row['possible_evolution'] . "</td>";
echo "<td>" . $row['pokeID'] . "</td>";
echo "</tr>";
}
echo "</table>";
}

?>
<br><br>
</form></td></tr>
</center>
 </table></center></form> 
  </div>
  <div class="row opaque">
    
  </div>
</div>
<!--<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>Kinder Bueno Bundle!</h3>
	  <img class="img-thumbnail" width="304" height="236" src = "http://i.ebayimg.com/images/i/271631270771-0-1/s-l1000.jpg">
	  <p>Price: $5.99/ea</p>
	</div>
    <div class="col-sm-4">
      <h3>Smarties Supreme!</h3>
	  <img class="img-thumbnail" width="304" height="236" src = "http://www.vzhh.de/upload/VerbraucherzentraleHamburg/images/ernaehrung/Nestle_Smarties_158_vorn_klein.jpg">
	  <p>Price: $6.99/ea</p>
    </div>
    <div class="col-sm-4">
      <h3>M & M Madness!</h3>
	  <img class="img-thumbnail" width="304" height="236" src = "http://ep.yimg.com/ay/blaircandy/m-m-s-candy-48ct-plain-21.jpg">
	  <p>Price: $7.99/ea</p> 
    </div>
  </div>
</div>
-->
<br><br><br>
<br><br><br>
<footer>
	<div class="jumbotron">
	<a href= "dbtoxml.php"> <img class="logo" src="xml.png"> </a>
	<br><br><br><br><br><br><br><br>	
</div>
  <p>Jacob Morra, Kevin Apuyan, Raynosan Edmond &copy 2017</p>
</footer>
</body>
</html>

