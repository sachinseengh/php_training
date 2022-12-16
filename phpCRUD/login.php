<?php



if(isset($_POST["submit"])){
    // print_r($_POST);
    if(isset($_POST['username'])     &&   !empty($_POST['username'])){
        $username =$_POST['username'];
    }else{
        $errorusername= "Enter Username!";
    };

    if(isset($_POST['password'])     &&   !empty($_POST['password'])){
    $username =$_POST['password'];
   }else{
    $errorpassword= "Enter Password";
  };



  if(isset($username)  &&  isset($password)){
  
    include('../Database/connection.php');
    print_r($conn);





    
// $name = $_POST[ 'username'];
// $sql = "SELECT * FROM `users` WHERE username = '$name' ";

// $var=$conn->query($sql);

// if($var->num_rows == 1){
//     echo "username already exist";
// };


  }

}


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

<h3>Input form</h3>

<form action="" method="post">

<input type="text" name="username" id="username">
<small style="color:red"><?php

if(isset($errorusername)){
    echo $errorusername;
}
?></small>
<br><br>

<input type="password" name="password" id="password">
<small style="color:red"><?php

if(isset($errorpassword)){
    echo $errorpassword;
}
?></small>
<br><br>

<input type="submit"   value="submit"   name="submit">
</form>
</body>
</html>