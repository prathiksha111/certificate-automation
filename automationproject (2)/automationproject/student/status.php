<!DOCTYPE html>
<html>
<head>
  <title>REQUEST</title>
  <style>
    .container {
      position: relative;
      height: 100vh;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      font-family: Arial, sans-serif;
    }

    .loader {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      position: relative;
      perspective: 800px;
      transform-style: preserve-3d;
      animation: rotate 4s infinite linear;
    }

    .loader .bar {
      position: absolute;
      width: 10px;
      height: 60px;
      background-color: #ff0000;
      transform-origin: center bottom;
      bottom: 20px;
      animation: move 1.5s infinite ease-in-out alternate;
    }

    .loader .bar:nth-child(1) {
      left: 0;
      animation-delay: 0s;
    }

    .loader .bar:nth-child(2) {
      left: 20px;
      animation-delay: 0.2s;
    }

    .loader .bar:nth-child(3) {
      left: 40px;
      animation-delay: 0.4s;
    }

    .loader .bar:nth-child(4) {
      left: 60px;
      animation-delay: 0.6s;
    }

    .loader .bar:nth-child(5) {
      left: 80px;
      animation-delay: 0.8s;
    }

    @keyframes rotate {
      0% {
        transform: rotateY(0deg);
      }
      100% {
        transform: rotateY(360deg);
      }
    }

    @keyframes move {
      0% {
        height: 60px;
      }
      50% {
        height: 20px;
      }
      100% {
        height: 60px;
      }
    }
    .box {
      position:relative;
      width:50%;
      margin-top:1%;
      margin-left:20%;
      padding: 45px; /* Adds some padding inside the box */
      border: 1px solid black;
      border-radius: 1em; /* Sets a solid red border */
      background-color: lightgreen; /* Sets a yellow background color */
      color: black; /* Sets the text color */
      font-size: 20px; /* Sets the font size */
      font-weight: bold; /* Sets the font weight */
      box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
      top:90px;
      left:20px;
      align-items:center;
      text-align:center;
      justify-content:center; /* Adds a box shadow */

    }
    .box1 {
      position:relative;
      width:50%;
      margin-top:1%;
      margin-left:20%;
      padding: 45px; /* Adds some padding inside the box */
      border: 1px solid black;
      border-radius: 1em; /* Sets a solid red border */
      background-color: maroon; /* Sets a yellow background color */
      color: white; /* Sets the text color */
      font-size: 20px; /* Sets the font size */
      font-weight: bold; /* Sets the font weight */
      box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
      top:90px;
      left:20px;
      align-items:center;
      text-align:center;
      justify-content:center; /* Adds a box shadow */

    }
    .back-link {

box-shadow: 0 20px 60px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
padding: 20px;
margin-top:6px;
position:relative;
top:0;
left:1400px;
background-color: BLACK;
text-align: right;
border:none;
color:white;
padding:10px 20px;
text-decoration: none;
display: inline-block;
font-size: 12px;
border-radius: 10px;
}
.back-link:hover{
background-color:white;
color:black;
}
  </style>
</head>
<body>
<a href="logout.php" class="back-link">LOG OUT</a>
<?php
session_start();
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'certificate';
$conn = new mysqli($servername, $username, $password, $dbname);
if (!$conn) {
    die('Could not Connect MySql:' . mysql_error());
} else{
  $usn = $_POST["usn"];
  $query = "SELECT * FROM student WHERE usn = '$usn'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$query1 = "SELECT * FROM student where usn='$usn'";
$result1 = mysqli_query($conn, $query1);
$row1 = mysqli_fetch_assoc($result1);
if ($row) {
  $_SESSION["usn"] = $row['usn'];
  
  
  // Assuming you have established a database connection ($conn)



  if ($row1['staff'] != 0) {
    echo "<div class='box'>BRANCH CO-ORDINATOR HAS APPROVED YOUR REQUEST...<br></div>";
    if ($row1['hod'] !=0) {
        echo "<div class='box'>HOD HAS APPROVED YOUR REQUEST...</div>";
        
            if ($row1['office'] !=0) {
                echo "<div class='box'>YOUR REQUEST HAS BEEN APPROVED BY OFFICE... PLEASE COLLECT YOUR CERTIFICATE...</div>";
            } else {
                echo "<div class='box1'>YOUR REQUEST IS UNDER PROCESS BY OFFICE<br>THANK YOU!</div>";
            }
      } else {
        echo "<div class='box1'>YOUR REQUEST IS UNDER PROCESS BY HOD<br>THANK YOU!</div>";
    }
} else {
    echo "<div class='box1'>FOR FURTHER PROCESS PLEASE CONTACT BRANCH CO-ORDINATOR<br>THANK YOU!</div>";
}
mysqli_close($conn);
      exit();

    }


 else {
  echo "<script>
      alert('Failed');
      window.location.href='index.html';
      </script>";
}


  $stmt->close();
  $conn->close();
}

?>

 
</body>
</html>

