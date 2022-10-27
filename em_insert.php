 <?php include 'connection.php';

$imgname = $_FILES['image']['name'];
$tmpimgname = $_FILES['image']['tmp_name'];

$pdfname = $_FILES['emfile']['name'];
$tmppdfname = $_FILES['emfile']['tmp_name'];


$title = $_POST["title"];
$sd = $_POST["sd"];

move_uploaded_file($tmpimgname, "em_files/$imgname"); 
move_uploaded_file($tmppdfname, "em_files/$pdfname"); 


$sql = "INSERT INTO `embedded`(`title`, `image`, `sd`, `emfile`) VALUES ('$title', '$imgname', '$sd', '$pdfname')";

if (mysqli_query($conn, $sql)) {

?>

	<script>
    		alert("New record created successfully ");
		window.open("em_frame.php", "_self");
	</script>
<?php

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?> 
