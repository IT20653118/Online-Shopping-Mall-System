<!DOCTYPE html>
<html>
<head>
    <title>Homepage</title>
</head>

<body>
<a href="add.php">Add New Item</a><br/><br/>
<!--<a href="login.php">Log In User</a><br/><br/>-->

    <table width='80%' border=1>

    <tr>
        <th>First_Name</th> <th>Last_Name</th> <th>Email</th> <th>Update</th>
    </tr>
    <?php
        // Create database connection using config file
        include_once("config.php");

        // Fetch all users data from users table
        $sql = "SELECT * FROM user ORDER BY id DESC";
        $result = mysqli_query($conn, $sql);


      // output data of each row
      if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row['First_Name']."</td>";
                echo "<td>".$row['Last_Name']."</td>";
                echo "<td>".$row['Email']."</td>";
                echo "<td><a href='edit.php?id=$row[id]'>Edit</a> | <a href='delete.php?id=$row[id]'>Delete</a></td>";
                echo "</tr>";
            }
        }

    ?>
    </table>
</body>
</html>