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
    echo " <h4>Serializing the array</h4></br>";
    $data = serialize(array("Red", "Green", "Blue"));
    echo $data . "<br>";
    echo " <h4>Unserialziing the array</h4></br>";
    $test = unserialize($data);
    var_dump($test);
?>

</body>
</html>