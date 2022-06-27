<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bitwise oprator</title>
</head>
<body>
    <!-- bitwise and ,bitwise or -->
    <?php
    $x=13;
    $y=12;
    echo"result of bitwise and";
    echo $x & $y;
    echo "result of bitwise or";
    $x=5;
    $y=11;
    echo $x |$y; 
    ?>
    <!-- bitwise XOR and bitwise not -->
    <?php
    $x=12;
    $y=10;
    echo "bitwise not";
    echo $x & $y;
    $x=12;
    $y=11;
    echo "bitwise";
    echo $x^$y;
    ?>
    <!-- left shift and right bitwise operator -->
    <?php
    $x=8;
    $y=3;
    echo "left shift output";
    echo $x<<$y;
    $x=8;
    $y=3;
    echo "right shift output";
    echo $x>>$y;
  
    ?>

</body>
</html>