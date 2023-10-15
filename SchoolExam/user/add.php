<!DOCTYPE html>
<html lang="en">
<?php session_start()?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>User's Information</h1>

    <form action="../process/add_exe.php" method="post">

        <div>
            <label for="">User Level</label>
            <select name="userLevel" id="" require>
                <option value="">Select</option>
                <option value="admin">Admin</option>
                <option value="it_admin">IT Admin</option>
                <option value="user">Student</option>
            </select>
            <?php 
            if (isset($_SESSION['err'])) {
                $error = $_SESSION['err'];
                echo $error['err_userLevel'];
            }
            ?>
        </div>

        <div>
            <label for="">Student Number:*</label>
            <input type="text" name="studentNumber" id="">
            <?php 
            if (isset($_SESSION['err'])) {
                $error = $_SESSION['err'];
                echo $error['err_studentNumber'];
            }
            ?>
        </div>

        <div>
            <label for="">Full Name:*</label>
            <input type="text" name="fullName" id="">
            <?php 
            if (isset($_SESSION['err'])) {
                $error = $_SESSION['err'];
                echo $error['err_fullName'];
            }
            ?>
        </div>

        <div>
            <label for="">Midterm Grade:*</label>
            <input type="text" name="midtermGrade" id="">
            <?php 
            if (isset($_SESSION['err'])) {
                $error = $_SESSION['err'];
                echo $error['err_midtermGrade'];
            }
            ?>
        </div>

        <div>
            <label for="">Final Grade:*</label>
            <input type="text" name="finalGrade" id="">
            <?php 
            if (isset($_SESSION['err'])) {
                $error = $_SESSION['err'];
                echo $error['err_finalGrade'];
                unset($_SESSION['err']);
            }
            ?>
        </div>

        <input type="submit" value="Register">
    </form>
</body>
</html>