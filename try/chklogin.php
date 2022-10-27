<!DOCTYPE html>
<html>
<body>

<?php include 'connection.php';

$id = $_POST["idno"];
$name = $_POST["name"];

$sql = "SELECT * FROM `msc` WHERE `id`='$id' AND `name`='$name';";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {


?>

	<script>
    		alert("Login successfully");
		window.open("show.php", "_self");
	</script>
<?php

} else {


?>

	<script>
    		alert("invalid login");
		window.open("try.php", "_self");
	</script>
<?php

}
		

mysqli_close($conn);
?> 

</body>
</html>
