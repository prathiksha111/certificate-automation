<?php
session_start();
include('../../includes/dbconfig.php');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $gmail = $_POST['gmail'];
    $usn = $_POST['usn'];
    $sphnum = $_POST['sphnum'];
    $fname = $_POST['fname'];
    $certificate = $_POST['certificate'];
    $branch = $_POST['branch'];
    $year = $_POST['year'];
    $gender = $_POST['gender'];
    $reason = $_POST['reason'];

    $stmt = $conn->prepare("UPDATE student SET s_name=?, email=?, usn=?, mob_no=?, f_name=?, certificate=?, branch=?, s_year=?, gender=?, reason=?, staff='1' WHERE id=?");
    $stmt->bind_param("ssssssssssi", $name, $gmail, $usn, $sphnum, $fname, $certificate, $branch, $year, $gender, $reason, $id);

    if ($stmt->execute()) {
        echo '<script>alert("Record updated successfully!");</script>';
        echo "<script>
            window.location.href='staff.php';
            </script>";
    } else {
        echo "Error updating record: " . $stmt->error;
    }

    $stmt->close();
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM student WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $name = $row['s_name'];
        $gmail = $row['email'];
        $usn = $row['usn'];
        $sphnum = $row['mob_no'];
        $fname = $row['f_name'];
        $certificate = $row['certificate'];
        $branch = $row['branch'];
        $year = $row['s_year'];
        $gender = $row['gender'];
        $reason = $row['reason'];
    } else {
        echo "No records found.";
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../res/style/style.css">
    <title>Edit Record</title>
</head>
<body>
    <form action="" method="POST" id="requestform">
        <input type="hidden" name="id" value="<?= $id ?>">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?= $name ?>" required><br>

        <label for="gmail">Gmail:</label>
        <input type="email" id="gmail" name="gmail" value="<?= $gmail ?>" required><br>

        <label for="usn">USN:</label>
        <input type="text" id="usn" name="usn" value="<?= $usn ?>" required><br>

        <label for="sphnum">Phone Number:</label>
        <input type="tel" id="sphnum" name="sphnum" value="<?= $sphnum ?>" required><br>

        <label for="fname">Father's Name:</label>
        <input type="text" id="fname" name="fname" value="<?= $fname ?>" required><br>

        <label for="certificate">Certificate Type:</label>
        <select id="certificate" name="certificate" required>
            <option value="Study Certificate" <?= $certificate === 'Study Certificate' ? 'selected' : '' ?>>Study Certificate</option>
            <option value="Bonafide Certificate" <?= $certificate === 'Bonafide Certificate' ? 'selected' : '' ?>>Bonafide Certificate</option>
        </select><br>

        <label for="branch">Branch:</label>
        <select id="branch" name="branch" required>
            <option value="">--Select your Branch--</option>
            <option value="Artificial Intelligence and Machine Learning" <?= $branch === 'Artificial Intelligence and Machine Learning' ? 'selected' : '' ?>>Artificial Intelligence and Machine Learning (AIML)</option>
            <option value="Civil Engineering" <?= $branch === 'Civil Engineering' ? 'selected' : '' ?>>Civil Engineering (CIV)</option>
            <option value="Computer Science and Engineering" <?= $branch === 'Computer Science and Engineering' ? 'selected' : '' ?>>Computer Science and Engineering (CSE)</option>
            <option value="Data Science" <?= $branch === 'Data Science' ? 'selected' : '' ?>>Data Science (DS)</option>
            <option value="Electronics and Communication Engineering" <?= $branch === 'Electronics and Communication Engineering' ? 'selected' : '' ?>>Electronics and Communication Engineering (ECE)</option>
            <option value="Electrical and Electronics Engineering" <?= $branch === 'Electrical and Electronics Engineering' ? 'selected' : '' ?>>Electrical and Electronics Engineering (EEE)</option>
            <option value="Information Science and Engineering" <?= $branch === 'Information Science and Engineering' ? 'selected' : '' ?>>Information Science and Engineering (ISE)</option>
            <option value="Mechanical Engineering" <?= $branch === 'Mechanical Engineering' ? 'selected' : '' ?>>Mechanical Engineering (ME)</option>
            <option value="Master of Business Administration" <?= $branch === 'Master of Business Administration' ? 'selected' : '' ?>>Master of Business Administration (MBA)</option>
            <option value="Master of Computer Applications" <?= $branch === 'Master of Computer Applications' ? 'selected' : '' ?>>Master of Computer Applications (MCA)</option>
            <option value="Others" <?= $branch === 'Others' ? 'selected' : '' ?>>Others</option>
        </select>
        <br>

        <label for="year">Year:</label>
        <select id="year" name="year" required>
                <option value="">--Select your Year--</option>
                <option value="FIRST" <?php if ($row['s_year'] == 'FIRST') echo 'selected'; ?>>FIRST</option>
                <option value="SECOND" <?php if ($row['s_year'] == 'SECOND') echo 'selected'; ?>>SECOND</option>
                <option value="THIRD" <?php if ($row['s_year'] == 'THIRD') echo 'selected'; ?>>THIRD</option>
                <option value="FOURTH" <?php if ($row['s_year'] == 'FOURTH') echo 'selected'; ?>>FOURTH</option>
                </select><br>

        <label for="gender">Gender:</label>
        <input type="radio" id="gender" name="gender" value="male" <?= $gender === 'male' ? 'checked' : '' ?>>Male
        <input type="radio" id="gender" name="gender" value="female" <?= $gender === 'female' ? 'checked' : '' ?>>Female
        <input type="radio" id="gender" name="gender" value="other" <?= $gender === 'other' ? 'checked' : '' ?>>Other<br>

        <label for="reason">Reason:</label>
        <textarea id="reason" name="reason" required><?= $reason ?></textarea><br>

        <button type="submit">Update</button>
    </form>
</body>
</html>

<?php
$conn->close();
?>
