
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
  <div class="jumbotron">
    <h1></h1>
	<form method="POST" action="insert.php">
	 <center><table>
 <center>
   <tr>
     <td><form action="insert.php" method="post">
<p style="color: orange">Trainer Nickname:<br></p>
<input style="color: orange" type="text" name="nickname">
<br>
<p style="color: orange">Trainer Email: <br></p>
<input type="text" name="trainer_email">
<br>
<p style="color: orange">Date of Birth: <br></p>
<input type="text" name="DoB">
<br>
<p style="color: orange">Trainer level: <br></p>
<input type="number" name="tlevel">
<br>
<p style="color: orange">Trainer # of Battles: <br></p>
<input type="number" name="numBat">
<br>
<p style="color: orange">Number of Pokemon: <br></p>
<input type="number" name="numPoke">
<br>
<p style="color: orange">Distance walked: <br></p>
<input type="number" name="distance">
<br>
<p style="color: orange">Start Date:<br></p>
<input type="month" name="date">
<br>
<p style="color: orange">Total EXP:<br></p>
<input type="number" name="EXP">
<br>
<p style="color: orange">Pokemon Name: <br></p>
<input type="text" name="pokemon">
<br>
<p style="color: orange">PokeDex Number: <br></p>
<input type="number" name="pokeDex">
<br>
<p style="color: orange">Candy Required to evolve: <br></p>
<input type="number" name="candy">
<br>
<p style="color: orange">Trainer Rank: <br></p>
<input type="number" name="rank">
<br>
<p style="color: orange">Pokemon ID Number: <br></p>
<input type="number" name="pokeID">
<br>
<p style="color: orange">move: <br></p>
<input type="text" name="move">
<br>
<p style="color: orange">IV: <br></p>
<input type="number" name="IV" min = "1" max = "100">
<br>
<p style="color: orange">CP:<br></p>
<input type="number" name="CP">
<br>
<p style="color: orange">Pokemon HP: <br></p>
<input type="number" name="HP">
<br>
<p style="color: orange">Pokemon Type:<br></p>
<input type="text" name="type">
<br>
<p style="color: orange"> Attack Pts: <br></p>
<input type="number" name="attack">
<br>
<p style="color: orange">Defense Pts:<br></p>
<input type="number" name="defense">
<br>
<p style="color: orange">Speed  Pts: <br></p>
<input type="number" name="speed">
<br>
<p style="color: orange">Next Evolution:<br></p>
<input type="text" name="evolves">
<br>
<p style="color: orange">Pokemon Egg Type:<br></p>
<input type="number" name="egg">
<br><br>
<input type="submit">
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
	<a href="query1.php" class="btn btn-warning btn-lg" role="button">Sample Query 1</a>
<a href="query2.php" class="btn btn-warning btn-lg" role="button">Sample Query 2</a>	
<a href="query3.php" class="btn btn-warning btn-lg" role="button">Sample Query 3</a>
<a href="query4.php" class="btn btn-warning btn-lg" role="button">Sample Query 4</a>
<a href="query5.php" class="btn btn-warning btn-lg" role="button">Sample Query 5</a>	
<a href="query6.php" class="btn btn-warning btn-lg" role="button">Sample Query 6</a>
<a href="query7.php" class="btn btn-warning btn-lg" role="button">Sample Query 7</a>
<a href="query8.php" class="btn btn-warning btn-lg" role="button">Sample Query 8</a>	
<a href="query9.php" class="btn btn-warning btn-lg" role="button">Sample Query 9</a>
<a href="query10.php" class="btn btn-warning btn-lg" role="button">Sample Query 10</a>

	<br><br><br><br><br>	
</div>
  <p>Jacob Morra, Kevin Apuyan, Raynosan Edmond &copy 2017</p>
</footer>
</body>
</html>
