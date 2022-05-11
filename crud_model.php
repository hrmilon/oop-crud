<?php
/*  
for testing purpose

*db name = crud
*table = usertable
*column = id, name, city, timesamp

*/


class Model {
//connected db
public $host = "0.0.0.0:3306";
public $user = "root";
public $pass = "root";
public $db = "crud";
public $conn;

public function __construct(){
  $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->db);
}


public function ShowData(){
  $query = "SELECT * FROM usertable";
  $results = $this->conn->query($query);
  if ($results->num_rows > 0) {
   $info = array();
   while($row = $results->fetch_assoc()){
     $info[] = $row;
   } //end of loop
  return $info;
 
} //end of if 
else{
    echo "There are no results Found";
         }
    } //end of function.


public function Insert(){
  $name = $this->conn->real_escape_string($_POST['name']);
  $address = $this->conn->real_escape_string($_POST['city']);
 $query = "INSERT into usertable(name, city) VALUES('$name', '$address')"; 
  $sql = $this->conn->query($query);
}


public function Delete($id){
$query = "Delete from usertable where id = '$id'";
$sql = $this->conn->query($query);
      } 
      
  } //end of model


?>