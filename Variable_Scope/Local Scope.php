<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>variables scope-Local Scope</title>
</head>
<body>
    <?php
    $a=2;
    function test(){
        $a=3;
        echo "varibles inside function is:".$a;

    }
    test();
    echo "varibles outside function is:".$a;

    
    ?>
</body>
</html>