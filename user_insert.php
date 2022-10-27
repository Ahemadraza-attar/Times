<?php include 'connection.php';

$uname = $_POST["uname"];
$unumber = $_POST["unumber"];
$uemail = $_POST["uemail"];
$upwd = $_POST["upwd"];
$ugender = $_POST["ugender"];

$sql = "INSERT INTO `user_signin`(`uname`, `uemail`, `unumber`, `upwd`, `ugender`) VALUES ('$uname', '$uemail', '$unumber', '$upwd', '$ugender');";

if (mysqli_multi_query($conn, $sql)) {
	 
?>

	<script>
    		alert("New User created successfully ");
		window.open("index.html", "_self");
	</script>
<?php

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?> 

