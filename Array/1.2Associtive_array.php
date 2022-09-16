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
        "rollno"=>"103",
        "Sname"=>"Bhagyashri",
        "marks"=>"90"
    );
    echo "RollNo-".$student['rollno'];
    echo "<br>Student Name".$student['Sname'];
    echo "<br>Marks".$student['marks'];
    ?>
    
</body>
</html>