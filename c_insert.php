 <?php include 'connection.php';


$name = $_POST["name"];
$email = $_POST["email"];

$number = $_POST["number"];
$subject = $_POST["subject"];


$sql = "INSERT INTO `contact`(`name`, `email`, `number`, `subject`) VALUES ('$name', '$email', '$number', '$subject')";

if (mysqli_query($conn, $sql)) {

?>

	<script>
    		alert("Thank you for your feedback");
		window.open("index.html", "_self");
	</script>
<?php

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?> 
