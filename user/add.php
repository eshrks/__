<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>

<body>
    <?php
    session_start();
    function check_error($error)
    {
        if (isset($_SESSION['err'])) {
            echo $_SESSION['err'][$error];
        }
    }
    ?>
    <h1>User's Information</h1>
    <form action="../process/add_exe.php" method="post">

        <div>
            <label for="">User Level</label>
            </select>
            <select name="userLevel" id="" required>
                <option value="">Select</option>
                <option value="admin">Admin</option>
                <option value="it_admin">IT Admin</option>
                <option value="user">Student</option>
            </select>
            <?php check_error('err_userLevel') ?>
        </div>

        <div>
            <label for="">Last Name:*</label>
            <input type="text" name="lastName" id="">
            <?php check_error('err_lastName') ?>
        </div>

        <div>
            <label for="">First Name:*</label>
            <input type="text" name="firstName" id="">
            <?php check_error('err_firstName') ?>
        </div>

        <div>
            <label for="">Middle Name:</label>
            <input type="text" name="middleName" id="">
        </div>

        <div>
            <label for="">Contact Number:*</label>
            <input type="text" name="contactNumber" id="">
            <?php check_error('err_contactNumber'); ?>
        </div>

        <div>
            <label for="">Password:*</label>
            <input type="text" name="pword" id="">
            <?php
            check_error('err_pword');
            unset($_SESSION['err']);
            ?>
        </div>

        <input type="submit" value="Register">
    </form>
</body>

</html>