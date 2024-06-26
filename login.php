<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./css/style.css">
</head>
<body style="background-image: url('https://i.ibb.co/zfmTbg8/purple-hospital.jpg');">

<?php
// Connecting connection methode
session_start();
include "./connection/connect.php";

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve username and password from the form
  $username = $_POST['uname'];
  $password = $_POST['psw'];

  // Prepare the SQL statement to retrieve user data
  $stmt = $pdo->prepare("SELECT * FROM Users WHERE Username = :username");
  $stmt->bindParam(':username', $username);
  $stmt->execute();
  $user = $stmt->fetch();

  // Check if the user exists and the password matches
  if ($user && password_verify($password, $user['Password'])) {
    // Get the user type
    $userType = $user['UserType'];

    // Redirect the user based on their user type
    switch ($userType) {
      case 'Doctor':
        // Redirect to Doctor page
        header('Location: doctor_page.php');
        break;
      case 'Patient':
        // Redirect to Patient page
        header('Location: patient_page.php');
        break;
      case 'Receptionist':
        // Redirect to Receptionist page
        header('Location: receptionist_page.php');
        break;
      case 'Admin':
        // Redirect to Admin page
        header('Location: admin_page.php');
        break;
      default:
        // Invalid user type
        echo "Invalid user type";
        break;
    }
    exit();
  } else {
    // Invalid username or password
    echo "Invalid username or password";
  }
}


?>

<h2>Modal Login Form</h2>

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><b> Login </b></button>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="./img/login.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label> <br>
      <input type="text" placeholder="Enter Username" name="uname" required> <br>

      <label for="psw"><b>Password</b></label> <br>
      <input type="password" placeholder="Enter Password" name="psw" required> <br>
       
      <label>
        <input type="checkbox" checked="checked" name="remember"><b> Remember me </b>
      </label> <br>

      <button type="submit"><b>Login </b></button> 
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn"><b>Cancel </b></button>
    </div>

    
  </form>
  
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>
