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
    $conn = new mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn)
    {
    }
    Echo “Connected successfully”;
    $sql = "INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('Kimaya', 'Gaikwad', 'kimaya123@example.com')";
    if (mysqli_query($conn,$sql))
    {
    echo "New record inserted successfully";
    } else {
    echo "could not insert record: " . mysqli_error ($conn);
    }
    Mysqli_close ($conn);
?>
</body>
</html>