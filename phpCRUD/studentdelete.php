<?php 


include("../Database/connection.php");

$id=$_GET['id'];
$sql="DELETE FROM `students` WHERE id='$id'";
// echo $sql;
$var=$conn->query($sql);
// echo $var;
$var=$conn->query($sql);
if($var){
    $message="student deleted successfully";
    session_start();
    $_SESSION['message'] = $message;
    header('location:dashboard.php');
}else{
    $message="failed deleting student";
}
?>