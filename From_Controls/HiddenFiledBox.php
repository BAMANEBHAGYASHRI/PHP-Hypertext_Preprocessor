<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <form action="" method="post">
    <select name="foods[]" size="3">
    <option value="Tomatoes">Tomatoes</option>
    <option value="Cucumbers">Cucumbers</option>
    <option value="Celery">Celery</option>
    </select><br>
    <input type="submit" name="submit" value="Submit"/>
    </form>
    <?php
    $c= $_POST['foods'];
    if(isset($c)) 
    {
    echo 'You have chosen ';
    foreach($c as $key => $value)
    {
    echo $value;
    }
    }
    else
    {
    echo "You haven't selected any foods";
    }
    ?>
</body>
</html>