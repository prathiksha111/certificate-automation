<?php
session_start();
include('../../includes/dbconfig.php');
if ($conn->connect_error) {
    die('Could not connect to MySQL: ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("SELECT * FROM hod WHERE ( email=? OR user_name=? ) AND password=?");
    $stmt->bind_param("sss", $_POST["user_id"],$_POST["user_id"], $_POST["password"]);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    if ($row) {
        $_SESSION["branch"] = $row['branch'];
        header("Location: hod.php");
        exit();
    } else {
        echo "<script>
            alert('Failed');
            window.location.href='../../index.php';
            </script>";
    }
    $stmt->close();
    $conn->close();
}
?>
