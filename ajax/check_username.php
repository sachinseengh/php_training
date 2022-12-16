<?php



include('../Database/connection.php');

$name = $_POST[ 'username'];
$sql = "SELECT * FROM `users` WHERE username = '$name' ";

$var=$conn->query($sql);

if($var->num_rows == 1){
    echo "username already exist";
}







?>