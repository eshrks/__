<?php
session_start();
// change the value inside quote '' to the directory of your database
include_once('../config/database.php');

$err_fullName       = "";
$err_studentNumber  = "";
$err_midtermGrade   = "";
$err_finalGrade     = "";
$err_userLevel      = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName      = $_POST['fullName'];
    if (empty($fullName)) {
        $err_fullName = "Your Full Name cannot be blank.";
    }

    $studentNumber     = $_POST['studentNumber'];
    if (empty($studentNumber)) {
        $err_studentNumber = "Student Number cannot be blank.";
    }

    $midtermGrade     = $_POST['midtermGrade'];
    if (empty($midtermGrade)) {
        $err_midtermGrade = "Midterm Grade cannot be blank.";
    }

    $finalGrade     = $_POST['finalGrade'];
    if (empty($finalGrade)) {
        $err_finalGrade = "Final Grade cannot be blank.";
    }

    $userLevel       = $_POST['userLevel'];
    if (empty($userLevel)) {
        $err_userLevel = "User Level cannot be blank.";
    }


    // if ($err_fullName == "" and $err_studentNumber == "" and $err_midtermGrade == "" and $err_finalGrade == "" and $err_userLevel == "") {
    if ($err_fullName and $err_studentNumber and $err_midtermGrade and $err_finalGrade and $err_userLevel == "") {
        unset($_SESSION['err']);
    } else {
        $_SESSION['err'] = array(
            'err_fullName'          => $err_fullName,
            'err_studentNumber'     => $err_studentNumber,
            'err_midtermGrade'      => $err_midtermGrade,
            'err_finalGrade'        => $err_finalGrade,
            'err_userLevel'         => $err_userLevel
        );
    }


    if (!isset($_SESSION['err'])) {
        $dateCreated   = date('Y-m-d');

        $query = "INSERT INTO table(
            fullName,
            studentNumber,
            midtermGrade,
            finalGrade,
            userLevel,
            dateCreated
        )
        VALUES (
            '$fullName', 
            '$studentNumber', 
            '$midtermGrade', 
            '$finalGrade', 
            '$userLevel', 
            '$dateCreated')";

        if (mysqli_query($conn, $query)) {
            echo '<br>' . "User was Added Successfully!";
        } else {
            echo '<br>' . "Error: " . $query . "" . mysqli_error($conn);
        }

        mysqli_close($conn);
    } else {
        header('location: ../user/add.php');
    }
}
echo '<br>';
?>
<!DOCTYPE html>
<html>

<head>
    <title>My Page</title>
</head>

<body>
    <a href="../user/index.php">See List of Users</a>
</body>

</html>