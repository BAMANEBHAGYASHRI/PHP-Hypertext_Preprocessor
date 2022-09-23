<html>
<head>
<title>Combo Box</title>
</head>
<body>
<form action="" method="post">
<select name="foods[]">
<option value="Mango">Mango</option>
<option value="Banana">Banana</option>
<option value="Watermelon">Watermelon</option>
<option value="Grapes">Grapes</option>
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
 echo "You haven't selected any fruit";
 }
?>
</body>
</html>