<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "clg";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$id=$_REQUEST['$id'];

$sql = "DELETE FROM msc WHERE `id`='$id'";

if ($conn->query($sql) === TRUE) {

?>

	<script>
    		alert("Record deleted successfully");
		window.open("show.php", "_self");
	</script>
<?php
} else {
    echo "Error deleting record: " . $conn->error;
}





mysqli_close($conn);
?> 

