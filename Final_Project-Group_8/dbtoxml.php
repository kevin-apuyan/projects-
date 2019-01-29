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

	$result = mysqli_query($conn,"SELECT * from trainer_account");

	$format = 'xml'; //xml is the default

/* create one master array of the records */
$posts = array();
if(mysqli_num_rows($result)) {
	while($post = $result->fetch_assoc()){
		$posts[] = array('post'=>$post);
	}
}

if($format == 'json') {
	header('Content-type: application/json');
	echo json_encode(array('posts'=>$posts));
}
else {
	header('Content-type: text/xml');
	echo '<posts>';
	foreach($posts as $index => $post) {
		if(is_array($post)) {
			foreach($post as $key => $value) {
				echo '<',$key,'>';
				if(is_array($value)) {
					foreach($value as $tag => $val) {
						echo '<',$tag,'>',htmlentities($val),'</',$tag,'>';
					}
				}
				echo '</',$key,'>';
			}
		}
	}
	echo '</posts>';
}

/* disconnect from the db */
?>