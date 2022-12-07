
<?php

if(isset($_POST ['submit'])){
       echo "<pre>";
       print_r($_FILES);
       echo "</pre>";
    echo "<pre>";
    print_r($_FILES['image']);
    echo "</pre>";
    if($_FILES['image']['error'] ==0){
        if($_FILES['image']['type']=="image/jpeg" || $_FILES['image']['type']=='image/png'||$_FILES['image']['type']=='image/jpg'){
            if($_FILES['image']['size'] <= 1024 * 10024){
                if(move_uploaded_file($_FILES['image']['tmp_name'],$_FILES['image']['name'])){
                    $imagename = $_FILES['image']['name'];
                    echo $imagename;
                    echo "image uploaded Succesfully";
                }else{
                    echo "image upload failed";
                }
                }else{
                    echo "file must be below 1mb";
                }
            }else{
                echo "file type must be jpeg or png";
            }
        }else{
            echo "file not selected";
        }
    };


    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <form action=" " method="post" enctype="multipart/form-data">


    <input type="file" name="image"><br><br>
    <input type="submit" name="submit" value="upload"></input>

    </form>
   

    <?php if(isset($imagename)) {   ?>

<img src = <?php  echo  $imagename;  ?> alt="" style="width:1000px;"> 
<?php   }   ?>



    
</body>
</html>






