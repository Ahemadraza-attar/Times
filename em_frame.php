<!DOCTYPE html>
<html>
<head>
<style>


body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Full-width input fields */
input[type=text], input[type=password], textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=file]:focus, textarea:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #474e5d;
  padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 0% auto 2% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
 
/* The Close Button (x) */
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}


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

.insert:link, .insert:visited {
  background-color: #f44336;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  border-radius: 5px;
}

.insert:hover, .insert:active {
  background-color: red;
}




/*back........................................................................................................................*/
#back {
  text-decoration: none;
  display: inline-block;
  padding: 13px 16px;
}

#back:hover {
  background-color: #ddd;
  color: black;
}

.previous {
  background-color: #4CAF50;
  color: white;
}


</style>
</head>
<body>


<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>


  <form class="modal-content" action="em_insert.php" method="post" enctype="multipart/form-data">
    <div class="container">
      <h1 style="text-align: center; color: #474e5d">Insert</h1>
      <hr>
	

      <label><b>Title</b></label>
      <input type="text" placeholder="Enter Title" name="title" required><br>
      
      <labe><b>Image</b></label>
      <input type="file" placeholder="Insert Image" name="image" required><br><br>

      <label><b>Short Description</b></label>
	<textarea id="subject" name="sd" placeholder="Write something.." style="height:200px"></textarea><br><br>
 
	<label"><b>File</b></label>
      <input type="file" placeholder="Insert file" name="emfile" required><br>

	<hr>
      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn">Insert</button>
      </div>
    </div>
  </form>
</div>





<!-- Frame of Embedded....................................................................................................... 


<a href="dashboard.html" id="back" class="previous"><b>&laquo; Home</b></a>  -->
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><b>Insert</b></button>
  <button display='block'" style="width:auto" value="back" onclick="history.back()"><b>back</b></button>

<?php include 'connection.php';

$sqli = "SELECT id, title, image FROM embedded";
$result = mysqli_query($conn, $sqli);


echo "<table><tr><th>ID</th><th>Title</th><th>Image</th><th>Update</th><th>Delete</th></tr>";

if (mysqli_num_rows($result) > 0) {
  
    while($row = mysqli_fetch_assoc($result)) {




 echo "<tr><td>" . $row["id"]. "</td><td>" . $row["title"]. "</td><td>" . $row["image"]. "</td><td>";
?>

<a href="em_update.php?$id=<?php echo $row['id']; ?>">Update</a> </td><td>
<a href="em_delet.php?$id=<?php echo $row['id']; ?>">Delete</a> 

<?php
echo "</td></tr>";
   

}

echo "</table>";

mysqli_free_result($result);

} 

else {
    echo "<br><br>0 results";
}



mysqli_close($conn);
?> 




</body>
</html>

