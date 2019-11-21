<?php
// Create database connection using config file
include_once("app/config.php");

// Fetch all users data from database
$result =$connection->query("SELECT * FROM users");
//echo $result;
?>

<html>

<head>
    <title>Homepage</title>
</head>

<body>
    <a href="add.php">Add New User</a><br /><br />

    <table width='80%' border=1>

        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Update</th>
        </tr>
        <?php
        while ($data = $result->fetch()) {
            echo "<tr>";
            echo "<td>" . $data['firstname'] . "</td>";
            echo "<td>" . $data['lastname'] . "</td>";
            echo "<td>" . $data['email'] . "</td>";
            echo "<td><a href='edit.php?id=$data[id]'>Edit</a> | <a href='delete.php?id=$data[id]'>Delete</a></td></tr>";
        }
        ?>
    </table>
</body>

</html>