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
$con=mysqli_connect ("localhost","root","","Employee") ;
If(!$con)
{
die(‘error in connection’.mysqli_error());
}
//select the database
mysqli_select_db(“mydb”,$con);
//update values of empInfo table
$data="UPDATE empInfo SET name='dev',mobile=9015501256 WHERE email='devesh@gmail.com'";
mysqli_query ($con,$data);
mysqli_close($con);
?>
</body>
</html>