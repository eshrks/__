<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="add.php">Add New Users</a>
    <br><br>
    <a href="..">Go to Home</a>
    <h1>List of Users</h1>
    <?php


    include_once('../config/database.php');


    $sql = "SELECT * FROM table";
    $result = $conn->query($sql);
    $count = 1;

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            // Display the data here, e.g., echo it as HTML
            echo $count . ". " . $row["fullName"] . "<br>";
            $count++;
        }
    } else {
        echo "No results found.";
    }

    $conn->close();





    ?>
</body>

</html>