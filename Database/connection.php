<?php




$conn = mysqli_connect('localhost','root','','php_training');
// print_r($conn);

if($conn->connect_errno>0){
    die('Database connection error');
};

?>