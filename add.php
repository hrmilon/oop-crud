<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>


<?php
include "crud_model.php";
$obj = new Model();
//adding on db
if (isset($_POST['submit'])) {
$obj->Insert();
echo 'Inserted Successfully ' . '<a class="addphp" href="index.php">View List</a>';
}

?>

<div class="field">
<form method="post">

<label>Name</label><br>
<input type="text" name="name" required> <br> 
<label>Address</label><br>
<input type="text" name="city" required> 
<br>
<button class="ad" name="submit">Add</button>

</form>
</div>
</body>
</html>