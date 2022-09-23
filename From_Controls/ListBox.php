<html>
<head>
<title>List Box</title>
</head>
<body>
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
