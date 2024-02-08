<!-- dbCon.php -->
<?php 
//Ce code définit une fonction connect en PHP qui établit une connexion à une base de données MySQL. Elle prend un paramètre optionnel $flag, qui, s'il est défini sur TRUE, se connecte à une base de données spécifique nommée "booking_res". Si la connexion échoue, elle affiche un message d'erreur et arrête le script. Enfin, elle renvoie l'objet de connexion à la base de données.
function connect($flag=TRUE){
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbName = "booking_res";

	// Create connection
	if($flag){
		$conn = new mysqli($servername, $username, $password, $dbName);
	}else{
		$conn = new mysqli($servername, $username, $password);
	}
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: $conn->connect_error");
	} 
	//echo "Connected successfully";
	
	return $conn;
}

?>