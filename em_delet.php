<?php include 'connection.php';

$id=$_REQUEST['$id'];

$sql = "DELETE FROM embedded WHERE `id`='$id'";

if ($conn->query($sql) === TRUE) {

?>

	<script>
    		alert("Record deleted successfully");
		window.open("dashboard.html");
	</script>
<?php
} else {
    echo "Error deleting record: " . $conn->error;
}

mysqli_close($conn);
?> 

