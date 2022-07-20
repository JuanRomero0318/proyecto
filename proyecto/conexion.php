<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "reservas";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$tipo =$_POST['tipo'];
$numero =$_POST['numero'];
$opcion =$_POST['opcion'];
$eps =$_POST['eps'];

$sql = "INSERT INTO registros (tipo, numero, opcion, eps)
VALUES ('$tipo', '$numero', '$opcion', '$eps')";

if ($conn->query($sql) === TRUE) {
  //echo "New record created successfully";
	header("location: /proyecto/index.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>