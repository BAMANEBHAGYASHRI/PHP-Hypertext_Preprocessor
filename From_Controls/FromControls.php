<!DOCTYPE html>
<html>
<body>
<form action=”welcome.php” method=”get”>
<input type=”text” name=”user”/>
<input type=”submit” value=”Submit” />
<!-- Radio Button   -->
<input type="radio" id="male" name="gender" value="male">
<label for="male">Male</label><br>
<input type="radio" id="female" name="gender" value="female">
<label for="female">Female</label><br>
<input type="radio" id="other" name="gender" value="other">
<label for="other">Other</label>
<!-- Check box -->
<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
<label for="vehicle1"> I have a bike</label><br>
<input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
<label for="vehicle2"> I have a car</label><br>
<input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
<label for="vehicle3"> I have a boat</label><br>
<!-- Buttons  -->
<div class="w3-container">
 <h2>Buttons (w3-button)</h2>
 <input type="button" class="w3-button w3-black" value="Input Button">
 <button class="w3-button w3-black">Button Button</button>
 <a href="#" class="w3-button w3-black">Link Button</a>
</div>
</form>
</body>
</html>
