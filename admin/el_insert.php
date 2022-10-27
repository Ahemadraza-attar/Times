 <?php include 'connection.php';

$imgname = $_FILES['image']['name'];
$tmpimgname = $_FILES['image']['tmp_name'];

$pdfname = $_FILES['elfile']['name'];
$tmppdfname = $_FILES['elfile']['tmp_name'];


$title = $_POST["title"];
$sd = $_POST["sd"];

move_uploaded_file($tmpimgname, "el_files/$imgname"); 
move_uploaded_file($tmppdfname, "el_files/$pdfname"); 


$sql = "INSERT INTO `electronic`(`title`, `image`, `sd`, `efile`) VALUES ('$title', '$imgname', '$sd', '$pdfname')";

if (mysqli_query($conn, $sql)) {

?>

	<script>
    		alert("New record created successfully ");
		window.open("el_frame.php", "_self");
	</script>
<?php

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?> 
