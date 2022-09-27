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
    $to=”xyz@example.com”;
    $subject=”Test mail”;
    $message=”This is HTML message”;
    $header=”From: abc@gmail.com”;
    $header .= “Cc:pqr@xyzdomain.com”;
    $retvalue=mail($to,$subject,$message,$header);
    If($retvalue == true)
    {
    Echo “ Message sent successfully”;
    }
    Else
    {
    Echo “ Message could not be sent”;
    }
?>
</body>
</html>