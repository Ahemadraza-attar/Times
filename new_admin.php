<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Full-width input fields */
input[type=text], input[type=password], input[type=email], input[type=tel] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus, input[type=email]:focus, input[type=tel]:focus {
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


/* Float cancel and signup buttons and add an equal width */
 .signupbtn {
  margin: 0% 30% 0% 30%;
  float: left;
  width: 40%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* The Modal (background) */
.modal {
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #474e5d;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  width: 100%; /* Could be more or less, depending on screen size */
  height: 100%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
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
</style>
<body>


  <form class="modal-content" action="admin_insert.php" method="post">
    <div class="container">
      <h1 style="text-align: center;">New Admin</h1>
      <hr>

      <label><b>Name</b></label>
      <input type="text" placeholder="Enter Full Name" name="aname" required>




      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="aemail" required>
  

      <label><b>Number</b></label>
      <input type="tel" placeholder="Enter Phone Number" name="anumber" required>

      <label for="psw"><b>Password</b></label>
	<input type="password" placeholder="Enter Password" name="apwd" id="aPassword" required>
	<input type="checkbox" onclick="myFunction()">Show Password<br><br><br>


 
     <label><b>Gender</b></label>
     <input type="radio" name="agender" value="male"> Male
     <input type="radio" name="agender" value="female"> Female
     <input type="radio" name="agender" value="other"> Other</br></br></br>
      
      <hr>


      <div class="clearfix">
        <button type="submit" class="signupbtn">Sign Up</button>
      </div>
    </div>
  </form>




<script>


function myFunction() {
  var x = document.getElementById("aPassword");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>


</body>
</html>

