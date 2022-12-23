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




session_start();
// print_r($_SESSION);
// echo $_SESSION['message'];
if(isset($_SESSION['message']) && (!empty($_SESSION['message']))){
     $message=$_SESSION['message'];
     $_SESSION['message']=" ";
}
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
    <?php

    if(isset($message)) { ?>

        <div class="alert alert-success">
            <h5><?php echo $message; ?></h5>
        </div>
        <?php } ?>
    <a href="student_create.php" class="btn btn-primary" >Add Student</a>
<a href="logout.php" class="btn btn-danger"  style="float:right;">logout</a>

<br><br>
<table class="table ">
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
    <tbody class="table-dark">

    <?php

foreach($studentlist as $key=>$value){
    ?>
  <tr>
            <td><?php echo $key+1;   ?></td>
            <td><?php echo $value['name']; ?></td> 
            <td><?php echo $value['email'];    ?></td>
            <td><?php echo $value['address'];    ?></td>
            <td><?php echo $value['created_date'];     ?></td>
            <td><a href="studentedit.php?id=<?php echo $value['id'];?>"  class="btn btn-secondary" onclick="return confirm('Are u sure want to edit')">Edit</a>
        <a href="studentdelete.php?id=<?php echo $value['id']; ?>  " class="btn btn-danger" onclick="return confirm('Are u sure want to edit')" >delete</a>
    </td>
        </tr>

    <?php
}
    ?>
      
    </tbody>
</table>


</body>
</html>