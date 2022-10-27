<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>


h1 {
  font-size: 50px;
  word-break: break-all;
}





/* Clear floats after rows */ 
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Content */
.content {
  background-color: white;
  padding: 10px;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 900px) {
  .column {
    width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
}
</style>
</head>
<body>

<!-- MAIN (Center website) -->
<div class="main">



<div class="content">
 


<?php include 'connection.php';

$sqli = "SELECT title, image, sd, sfile FROM software";
$result = mysqli_query($conn, $sqli);



if (mysqli_num_rows($result) > 0) {
  
    while($row = mysqli_fetch_assoc($result)) {




 echo '<div style=" box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); padding: 20px; border-radius: 15px; margin-bottom: 20px;"><h2 style="text-align: center;">' . $row["title"]. "</h2><hr><br>"?><div style="max-height: 80%; max-width: 80%;"><img src="admin/s_files/<?php echo $row["image"]; ?>" style="width: 80%; display: block; margin-left: auto; margin-right: auto;" /></div> <?php echo '<p style="text-indent: 50px;">' . $row["sd"]. '</p><br><b id="dwtxt"> Download full project: </b>';

?>

<a href="admin/s_files/<?php echo $row['sfile'] ?>" id="dbtn"><i class="fa fa-download"></i> Download </a>


<?php
echo '</div>';

} }

else {
    echo "<br><br>0 results";
}



mysqli_close($conn);
?> 




<!-- END MAIN -->
</div>

</body>
</html>

