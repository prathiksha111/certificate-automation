<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'certificate';

$conn = new mysqli($servername, $username, $password, $dbname);

if (!$conn) {
    die('Could not Connect MySql: ' . mysqli_error($mysql));
} else {
    // Check if the request is from the Android app
    if (isset($_POST['data'])) {
        $data = $_POST['data'];
        $formData = json_decode($data, true);

        $name = $formData['name'];
        $usn = $formData['usn'];
        $sphnum = $formData['sphnum'];
        $mail = $formData['mail'];
        $fatherName = $formData['fname'];
        $certificateType = $formData['certificate'];
        $branch = $formData['branch'];
        $year = $formData['year'];
        $reason = $formData['reason'];
        $gender = $formData['gender'];
        $password = $formData['usn'];

        $sql = "INSERT INTO `student`(`usn`, `s_name`, `f_name`,`mob_no`,`email`, `gender`, `branch`, `certificate`, `s_year`, `reason`, `password`) VALUES ('$usn','$name','$fatherName','$sphnum','$mail','$gender','$branch','$certificateType','$year','$reason','$password')";

        if ($conn->query($sql) === TRUE) {
            $response = array('status' => 'success', 'message' => 'Form data saved successfully!');
        } else {
            $response = array('status' => 'error', 'message' => 'Failed to save form data.');
        }

        echo json_encode($response);
    } else {
        // Process the request from the webpage
        $name = $_POST['name'];
        $usn = $_POST['usn'];
        $sphnum = $_POST['sphnum'];
        $mail = $_POST['mail'];
        $fatherName = $_POST['fname'];
        $certificateType = $_POST['certificate'];
        $branch = $_POST['branch'];
        $year = $_POST['year'];
        $reason = $_POST['reason'];
        $gender = $_POST['gender'];
        $password = $_POST['usn'];

        $sql = "INSERT INTO `student`(`usn`, `s_name`, `f_name`,`mob_no`,`email`, `gender`, `branch`, `certificate`, `s_year`, `reason`, `password`) VALUES ('$usn','$name','$fatherName','$sphnum','$mail','$gender','$branch','$certificateType','$year','$reason','$password')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>
                window.location.href='success.php';
                </script>";
        } else {
            echo "<script>
                alert('Failed to save form data.');
                window.location.href='index.html';
                </script>";
        }
    }
}
?>
