 <?php include 'connection.php';

$imgname = $_FILES['image']['name'];
$tmpimgname = $_FILES['image']['tmp_name'];

$pdfname = $_FILES['sfile']['name'];
$tmppdfname = $_FILES['sfile']['tmp_name'];


$title = $_POST["title"];
$sd = $_POST["sd"];

move_uploaded_file($tmpimgname, "s_files/$imgname"); 
move_uploaded_file($tmppdfname, "s_files/$pdfname"); 


$sql = "INSERT INTO `software`(`title`, `image`, `sd`, `sfile`) VALUES ('$title', '$imgname', '$sd', '$pdfname')";

if (mysqli_query($conn, $sql)) {

?>

	<script>
    		alert("New record created successfully ");
		window.open("dashboard.html", "_self");
	</script>
<?php

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?> 
