<!doctype html>
<html>
<body>
<form method="POST">
Name:
<input type="text" name="name" value="" placeholder="EnterYourName"><br><br>
Phone:
<input type="number" name="phone" placeholder="EnterYourPhone"><br><br>
Email:
<input type="email" name="email" placeholder="EnterYourEmail"><br><br>
Choose:
<select name="location">
<option>KaMarYut</option>
<option>BoTaHtaung</option>
<option>SueHlae</option>
<select><br><br>
<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="female">Female<br><br>
<input type="checkbox" name="sub[]" value="501">501
<input type="checkbox" name="sub[]" value="502">502
<input type="checkbox" name="sub[]" value="503">503<br>
<input type="submit" vaule="Submit" name="Submit">
</form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_REQUEST['name'];

  $email = $_REQUEST['email'];

  $phone = $_REQUEST['phone'];

  $gender = $_REQUEST['gender'];

  $location = $_REQUEST['location'];

  $subject = $_REQUEST['sub'];
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $phone;
    echo "<br>";
    echo $gender;
    echo "<br>";
    echo $location;
    echo "<br>";
    foreach($subject as $x){

      echo $x;

      echo "\t";
}
}
?>