<?php
echo "<style>
form {border-style:solid;border-width:1px;padding: 3px;position:absolute;}
</style>";
echo "<form>
<input name='name' placeholder='Name'><br>
<input name='age' placeholder='Age'><br>
<label><input type='radio' name='gender' value='male'>Male</label><br>
<label><input type='radio' name='gender' value='female'>Female</label><br>
<input name='button' type='submit' value='Submit'><br>";
if(isset($_GET['button'])){
    $gender = $_GET['gender'];
    $name = $_GET['name'];
    $age = $_GET['age'];
    echo "My name is " . $name .". I am " . $age . " years old. I am " . $gender . ".";
}
echo"</form>";

