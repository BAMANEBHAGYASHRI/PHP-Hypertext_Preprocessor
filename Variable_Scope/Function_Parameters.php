<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>variables scope-Function Parameters</title>
</head>
<body>
    <?php
    function test($a,$b){
        $c=$a+$b;
        return $c;
    }
    test(2,6);
    
    ?>
</body>
</html>