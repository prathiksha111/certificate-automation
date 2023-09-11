




<?php
// Start the session (if not already started)
session_start();

// Check if the user_id is stored in the session
if (isset($_SESSION['user_id'])) {
  $user_id = $_SESSION['user_id'];

  // Continue with the rest of your code

  // Initialize variables
  $error = "";
  $success = "";

  // Check if the form is submitted
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form input values
    $currentPassword = $_POST['current_password'];
    $newPassword = $_POST['new_password'];
    $confirmPassword = $_POST['confirm_password'];

    // Perform input validation
    if ($newPassword !== $confirmPassword) {
      $error = "New password and confirm password do not match.";
    } else {
      // Connect to the database (assuming you have already created the necessary database and table)
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "certificate"; // Replace with your actual database name

      $conn = new mysqli($servername, $username, $password, $database);

      // Check the database connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

      // Retrieve the user's current password from the database
      $sql = "SELECT * FROM staff WHERE u_id = '$user_id'";
      $result = $conn->query($sql);

      if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        $currentPasswordFromDB = $row['pass'];

        // Verify if the current password matches the one in the database
        if ($currentPassword === $currentPasswordFromDB) {
          // Update the user's password in the database
          $updateSql = "UPDATE staff SET pass = '$newPassword' WHERE u_id = '$user_id'";

          if ($conn->query($updateSql) === TRUE) {
            // Password changed successfully
            $success = "Password changed successfully!";
          } else {
            $error = "Error updating password: " . $conn->error;
          }
        } else {
          $error = "Invalid current password.";
        }
      } else {
        $error = "User not found.";
      }

      // Close the database connection
      $conn->close();
    }
  }
} else {
  // Redirect to the previous page or show an error message
  echo "User ID not found.";
  exit;
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Password Change</title>
  <style>
    body {
      margin-top: 10%;
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
    }
    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    .container h2 {
      text-align: center;
    }
    .form-group {
      margin-bottom: 15px;
    }
    .form-group label {
      display: block;
      font-weight: bold;
    }
    .form-group input {
      width: 100%;
      background-color: lightgray;
      padding: 8px;
      border: 0px solid #ccc;
      border-radius: 3px;
      box-sizing: border-box;
      animation: cubic-bezier(0.075, 0.82, 0.165, 1);
    }
    .form-group input[type="submit"] {
      background-color: black;
      color: white;
      cursor: pointer;
    }
    .form-group input[type="submit"]:hover {
      background-color: black;
      color: greenyellow;
    }
    .back-button {
      position: absolute;
      top: 10px;
      right: 1vw;
      padding: 10px 20px;
      background-color: black;
      color: white;
      text-decoration: none;
      display: inline-block;
      font-size: 14px;
      border-radius: 10px;
      border: none;
      box-shadow: 0 10px 30px 0 rgba(0, 0, 0, 0.2), 0 3px 10px 0 rgba(0, 0, 0, 0.19);
    }
    .back-button:hover {
      background-color: white;
      color: black;
    }
    .success {
      color: green;
      font-weight: bold;
      text-align: center;
      margin-bottom: 10px;
    }
    .error {
      color: red;
      font-weight: bold;
      text-align: center;
      margin-bottom: 10px;
    }
  </style>
  <script>
    function goBack() {
      window.history.back();
    }
  </script>
  
</head>
<body>
  <div class="container">
    <h2>Password Change</h2>
    <a href="staff.php" class="back-button">Back</a>
    <?php if (isset($error) && !empty($error)) { ?>
      <div class="error"><?php echo $error; ?></div>
    <?php } ?>
    <?php if (isset($success) && !empty($success)) { ?>
      <div class="success"><?php echo $success; ?></div>
    <?php } ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
      <div class="form-group">
        <label for="current_password">Current Password:</label>
        <input type="password" id="current_password" name="current_password" required>
      </div>
      <div class="form-group">
        <label for="new_password">New Password:</label>
        <input type="password" id="new_password" name="new_password" required>
      </div>
      <div class="form-group">
        <label for="confirm_password">Confirm Password:</label>
        <input type="password" id="confirm_password" name="confirm_password" required>
      </div>
      <div class="form-group">
        <input type="submit" value="Change Password">
      </div>
    </form>
  </div>
</body>
</html>
