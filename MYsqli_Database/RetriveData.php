<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "myDB";
    // Create connection
    $conn = new mysqli_connect ($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) 
    {
    die ("Connection failed: " . mysqli_connect_error ( ));
    }
    Echo “Connected successfully <br/> ”;
    $sql = "SELECT id, firstname, lastname FROM MyGuests";
    $result = mysqli_query($conn,$sql);
    if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) 
    {
    echo "id: " . $row["id"] . " . Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
    } else 
    {
    echo "0 results";
    }
    Mysqli_close ($conn);
?>
</body>
</html>