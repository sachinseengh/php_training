


<?php
 include("../Database/connection.php");

 $id=$_GET['id'];
 $studentsql ="select * from students where id='$id' ";
 $student=$conn->query($studentsql);

 $studentdetail=$student->fetch_object();
 print_r($studentdetail);






if(isset($_POST['submit'])){
      if(isset($_POST['name']) && !empty($_POST['name'])){
        $name=$_POST['name'];
      }else{
        $errorname="Name is required";
    }
    if(isset($_POST['email']) && !empty($_POST['email'])){
        // $email=$_POST['email'];
        //filter email
        if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
            $email=$_POST['email'];

            include("../Database/connection.php");
            $sql = "SELECT * FROM `students` WHERE email = '$email' ";

            $var=$conn->query($sql);

              if($var->num_rows == 1){
                $erroremail=  "email already exist";
                  
}
        }else{
            $erroremail="invalid email format";
        }
    }else{
        $erroremail="email is required";
    }
    if(isset($_POST['address']) && !empty($_POST['address'])){
        $address=$_POST['address'];
      }else{
        $erroraddress="address is required";
    }
    if(isset($_POST['phone']) && !empty($_POST['phone'])){
        $phone=$_POST['phone'];
      }else{
        $errorphone="phone is required";
    }

// $name=$_POST['name'];
// $email=$_POST['email'];
// $address=$_POST['address'];
// $phone=$_POST['phone'];


if(isset($name) && isset($email) && isset($address) ){

   include("../Database/connection.php");
   // for inserting query into data base
    $sql="UPDATE `students` SET `name`='$name',`email`='$email',`address`='$address',`phone`='$phone' WHERE id ='$id'  ";
       
      //to show in the same file
    //   $result = mysqli_query($conn,$sql);

    //   if($result){
    //     echo "success";
    // }else{
    //      echo "failed";
    // }
    
    //to show in different file like 

    $var=$conn->query($sql);
    if($var){
        $message="student edited successfully";
        session_start();
        $_SESSION['message'] = $message;
        header('location:dashboard.php');
    }else{
        $message="failed editing student";
    }
    
        }
   
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <!-- <script src="../jquery-3.6.1.js"></script>
    <script src="../jquery-validation-1.19.5\dist\jquery.validate.min.js"></script> 
    <script >
        $(document).ready(function(){
            $('#createForm').validate( );
        })
    </script> -->
</head>
<body>
    
<div>
    <h3>Student form</h3>
    <form action="" method="post" id="createForm" >
<label for ="name">Name:</label>
    <input type="text" name="name" id="name" value=<?php  echo $studentdetail->name; ?> >
    <small style=color:red>
        <?php 
        if(isset($errorname)){
            
            echo $errorname;
        }
        ?>
    </small>

    <br><br>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" value=<?php  echo $studentdetail->email; ?>  >
    <small style="color:red">
        <?php 
        if(isset($erroremail)){
            echo $erroremail;
        }
        ?>
    </small>
    <br><br>
    <label for="address">Address:</label>
    <input type="text" name="address" id="address" value=<?php  echo $studentdetail->address; ?>  >
    <small style="color:red">
        <?php 
        if(isset($erroraddress)){
            echo $erroraddress;
        }
        ?>
    </small>
    <br><br>
    <label for="phone">Phone:</label>
    <input type="number" name="phone" id="phone" value=<?php  echo $studentdetail->phone; ?> >
    <small style="color:red">
        <?php 
        if(isset($errorphone)){
            echo $errorphone;
        }
        ?>
    </small>
    <br><br>
<input type="submit" value="update " name="submit" id="submit">    

</form> 
</div>
</body>
</html>