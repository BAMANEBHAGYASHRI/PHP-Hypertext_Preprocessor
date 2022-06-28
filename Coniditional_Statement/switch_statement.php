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
    $day=date("I");
    switch($day){
        case "sunday";
        echo "its sunday";
        break;

        case "monday";
        echo "its monday";
        break;

        case "tuesday";
        echo "its tuesday";
        break;

        case "wednesday";
        echo "its wednesday";
        break;

        case "thrusday";
        echo "its thrusday";
        break;

        case "friday";
        echo "its friday";
        break;
        case "staurday";
        echo "its staurday";
        break;

        default:
         echo "never executes";

    }

    
    
    
    
    
    
    
    ?>
</body>
</html>