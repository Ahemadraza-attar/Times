<!DOCTYPE html>
<html>
<body>

<?php include 'connection.php';

$uemail= $_POST["uemail"];
$upwd = $_POST["upwd"];

$sql = "SELECT * FROM `user_signin` WHERE `uemail`='$uemail' AND `upwd`='$upwd';";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

?>

	<script>
    		alert("Logout successfully");
		window.open("main_user.php", "_self");
	</script>
<?php

} else {

?>

	<script>
    		alert("Incorrect id or password");
		window.open("index.html", "_self");
	</script>
<?php

}
		

mysqli_close($conn);
?> 

</body>
</html>
