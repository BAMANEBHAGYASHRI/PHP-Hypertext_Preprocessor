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
    //connect database 
    $con=mysqli_connect("localhost","root","","Employee") 
    // Check connection
    if (!$con) 
    {
    die("Connection failed: " . (mysqli_error()));
    };
    // sql to delete a record
    $data="delete from empInfo WHERE email='devesh@gmail.com'";
    mysqli_query($con,$data);
    mysqli_close($con);
?>
</body>
</html>