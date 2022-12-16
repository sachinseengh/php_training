<?php


if( !isset($_COOKIE['username'])){
    header('location:intro.php');
}


include('../Database/connection.php');
// print_r($conn);
$sql ="select * from students";
$var=$conn->query($sql);

$studentlist=$var->fetch_all(MYSQLI_ASSOC);
// print_r($studentlist);

//other way
// $arr=[];
// while($row=$var->fetch_object()){
//     $arr[]=$row;
// }



// foreach($studentlist as $key=>$value){
//     echo '<pre>';
//     print_r( $value);
//     echo "</pre>";
// }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <h3>Welcome to dashboar</h3>
    <a href="student_create.php" class="btn btn-primary" >Add Student</a>
<a href="logout.php" class="btn btn-danger"  style="float:right;">logout</a>

<br><br>
<table class="table">
    <thead class="table-dark">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>address</th>
            <th>created_date</th>
            <th>action</th>
        </tr>
    </thead>
    <tbody>

    <?php

foreach($studentlist as $key=>$value){
    ?>
  <tr>
            <td><?php
            echo $key+1;
            ?></td>
            <td><?php
            echo $value['name'];
            ?></td> 
            <td><?php
            echo $value['email'];
            ?></td>
            <td><?php
            echo $value['address'];
            ?></td>
            <td><?php
            echo $value['created_date'];
            ?></td>
            <td><a href=""  class="btn btn-secondary">Edit</a>
        <a href="" class="btn btn-danger">delete</a>
    </td>
        </tr>

    <?php
}
    ?>
      
    </tbody>
</table>


</body>
</html>