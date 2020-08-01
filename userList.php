<?php
    require_once("connect.php");
    $sql = "SELECT * FROM `userdetails` where  `userID`>1"; 
    $result = mysqli_query($link, $sql) or die( mysqli_error($link));
    echo "<table class='users'>
    <tr>
    <th class='tHeading'>USER ID</th>
    <th class='tHeading'>FIRST NAME</th>
    <th class='tHeading'>LAST NAME</th>
    <th class='tHeading'>EMAIL ADDRESS</th>
    <th class='tHeading'>DATE OF BIRTH</th>
    <th class='tHeading'>USERNAME</th>
    <th class='tHeading'>PASSWORD</th>
    <th class='tHeading'></th>
    <th class='tHeading'></th>
    </tr>";

    while($row = mysqli_fetch_array($result))
    {
    echo "<tr>";
    echo "<td class='tRow'>" . $row['userID'] . "</td>";
    echo "<td class='tRow'>" . $row['first_name'] . "</td>";
    echo "<td class='tRow'>" . $row['last_name'] . "</td>";
    echo "<td class='tRow'>" . $row['email_address'] . "</td>";
    echo "<td class='tRow'>" . $row['date_of_birth'] . "</td>";
    echo "<td class='tRow'>" . $row['userName'] . "</td>";
    echo "<td class='tRow'>" . $row['pass_word'] . "</td>";
    echo "<td class='tRow'>" . "<a href='editUser.php'><button id='editUser' name='editUser' type='submit'>EDIT</button></a>". "</td>";
    echo "<td class='tRow'>" . "<a href='deleteUser.php'><button id='editUser' name='editUser' type='submit'>DELETE</button></a>". "</td>";

    echo "</tr>";
    if (isset($_POST['editUser'])){
        $id = $_SESSION['userID'];
        // ....
    }   
    }

    echo "</table>";
   
?>

<!DOCTYPE html>
<html>
    <head>
        <title>USERS</title>
        <link href="css/userList.css" type="text/css" rel="stylesheet">
    </head>
    <body>
    </body>
</html>