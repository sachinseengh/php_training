<?php
print_r($_COOKIE);

//this is from last

if(isset($_COOKIE['username'])){
    header('location:dashboard.php');
}


if(isset($_POST["submit"])){
    
    if(isset($_POST['username']) &&   !empty($_POST['username'])){
        $username=$_POST['username'];
    }else{
        $error='Username not entered';
    };



    if(isset($_POST['password']) &&   !empty($_POST['password'])){
        $password=$_POST['password'];
    }else{
        $errorpassword='password not entered';
    };

    if(isset($username)  &&  isset($password)){
  
       include('../Database/connection.php');

    $sql = "SELECT * FROM `users` WHERE username = '$username' and  password = '$password' ";
    // echo $sql;



    // for inserting query into data base
//     $sql="INSERT INTO `users` (`username`,`password`) VALUES ('$username','$password')";
    
//     $result = mysqli_query($conn,$sql);
//     };
// if($result){
//     echo "success";
// }else{
//     echo "failed";
}

$var=$conn->query($sql);
      
// print_r($var);

if($var->num_rows == 1){
    setcookie('username',$username,time( )+24*60*60);
    header('location:dashboard.php');
}else{
    $notpresent="invalid creditionals"; 
};


};

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">

   
    <label for username>username:</label>
    <input type="text" name="username" id="username">
    <small style="color:green">

    <?php
if(isset($errorusername)){
    echo $errorusername;
}
    ?></small>

      <small style="color:red">
       <?php
if(isset($notpresent)){
    echo $notpresent;
}
    ?>
    <br>
    <br>
    </small>
    <label for password>password:</label>
    <input type="password" name="password" id="password">
<small style="color:green">
<?php

if(isset($errorpassword)){
    echo $errorpassword;
};

?>
</small>
    <br>
    <br>
    <input type="submit" value="submit" name="submit">
</form>
</body>
</html>

