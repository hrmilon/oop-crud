<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crud OOP</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<table>
<tr>
 <td>ID</td> 
 <td>Name</td> 
 <td>Location</td> 
<td colspan="2">Action</td> 
</tr>


<?php
include "crud_model.php";
//calling instance of Model class
$obj = new Model();

//delete through id
if (isset($_GET['DeleteId'])) {
  $idr = $_GET['DeleteId'];
  $obj->Delete($idr);
}

$persons = $obj->ShowData();
foreach ($persons as $person) {
 ?>

<tr>
 <td><?php echo $person['id']  ?></td> 
 <td><?php echo $person['name']  ?></td> 
 <td><?php echo $person['city']  ?></td> 
<td colspan="2">
  <button class="del" type="submit"><a href="?DeleteId=<?php echo $person['id'];?>">Delete</a></button>
  
  <button class="edit" type="submit"><a href="?Id=<?php echo $person['id'];?>">Edit</a></button></td> 
</tr>
<?php
} // end of foreach
?>

</table>

<div class="add">
 <button class="btn"><a href="add.php">Add New Record</a></button> 
</div>
</body>
</html>