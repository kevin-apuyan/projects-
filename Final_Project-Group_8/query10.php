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
  <div class="jumbotron" style="opacity: 0.9; color: white">
    <h1></h1>
	<form method="POST" action="insert.php">
	 <center><table>
	<center>
	<tr>
	<td>
		<p style="color: orange">Find all Pokemon trainers with more battles won than ColoSphere or less battles played than 5jennifire</p>
		<?php
		 $servername = "localhost";
		$username = "root";
		$password = "password";

		// Create connection
		$conn = new mysqli($servername, $username, "");
			 //echo "Connected successfully";

		//$dbLocalhost = mysqli_connect("localhost", "root", "")
		//	or die("Could not connect: " . mysql_error());
		$conn->select_db("pokemon_go");

		$result = mysqli_query($conn,"SELECT trainer_name
FROM trainer_account
WHERE num_battles > (SELECT num_battles
			FROM trainer_account
			WHERE trainer_name = 'ColoSphere')
UNION
SELECT trainer_name
FROM trainer_account
WHERE num_battles < (SELECT num_battles
			FROM trainer_account
			WHERE trainer_name = '5jennifire')");

echo "<table border='1'>
<tr>
<th>trainer_name</th>
</tr>";



while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['trainer_name'] . "</td>";
echo "</tr>";
}
echo "</table>";
		?>
	 
	 </td></tr>
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
		<br><br><br><br><br><br><br><br>	
</div>
  <p>Jacob Morra, Kevin Apuyan, Raynosan Edmond &copy 2017</p>
</footer>
</body>
</html>