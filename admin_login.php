  <!DOCTYPE html>
<html>
<body>

<?php include 'connection.php';

$aemail= $_POST["email"];
$apwd = $_POST["password"];

$sql = "SELECT * FROM `new_admin` WHERE `email`='$aemail' AND `password`='$apwd';";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

?>

	<script>
    		alert("Login successfully");
		window.open("dashboard.html", "_self");
	</script>
<?php

} else {

?>

	<script>
    		alert("Incorrect id or password");
		window.open("login.html", "_self");
	</script>
<?php

}
		

mysqli_close($conn);
?> 

</body>
</html>
