<!DOCTYPE html>
<html>
<head>
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>



<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "clg";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sqli = "SELECT id, name, number, addr FROM msc";
$result = mysqli_query($conn, $sqli);
if (mysqli_num_rows($result) > 0) {
echo "<table><tr><th>ID</th><th>Name</th><th>Number</th><th>Address</th><th>Delet</th></tr>";
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {




 echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["number"]. "</td><td>" . $row["addr"]. "</td><td>";
?>

<a href="delet.php?$id=<?php echo $row['id']; ?>">Delet</a> 

<?php
echo "</td></tr>";

    

}

echo "</table>";

mysqli_free_result($result);

} 

else {
    echo "0 results";
}



mysqli_close($conn);
?> 




</body>
</html>

