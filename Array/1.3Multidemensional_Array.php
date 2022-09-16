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
    $student=array(
        array(
            "name"=>"tej";
            "age"=>"19";
        ),
        array(
            "name"=>"Bhagyashri";
            "age"=>"18";
        ),array(
            "name"=>"Prasad";
            "age"=>"21";
        )
    );
    echo "Student names And age:";
    echo "name-".$student[0]["name"]."and age-".$student[0]["age"];
    echo "name-".$student[1]["name"]."and age-".$student[1]["age"];
    echo "name-".$student[2]["name"]."and age-".$student[2]["age"];
    ?>
</body>
</html>