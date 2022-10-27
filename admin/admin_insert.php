<?php include 'connection.php';
$name="";
$number="";
$email="";
$gender="";
if(!empty($_POST['name'])){
$name = $_POST["name"];
}

if(!empty($_POST['number'])){
$number = $_POST["number"];
}

if(!empty($_POST['email'])){
$email = $_POST["email"];
}

if(!empty($_POST['password'])){
$password = $_POST["password"];
}

if(!empty($_POST['gender'])){
$gender = $_POST["gender"];
}


$sql = "INSERT INTO `new_admin`(`name`, `email`, `number`, `password`, `gender`) VALUES ('$name', '$email', '$number', '$password', '$gender')";

if (mysqli_multi_query($conn, $sql)) { 
	 
?>

	<script>
    		alert("New Admin created successfully ");
		window.open("dashboard.html");
	</script>
<?php

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?> 

