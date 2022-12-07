
<?php

if(isset($_POST ['submit'])){
    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";
    if($_FILES['pdf']['error'] ==0){
             if($_FILES['pdf']['type']=='application/pdf'){
                if($_FILES['pdf']['size'] <=1024*10024){
                    if(move_uploaded_file($_FILES['pdf']['tmp_name'],$_FILES['pdf']['name'])){
                        $pdfshow=$_FILES['pdf']['name'];
                        echo $pdfshow;
                        echo "pdf uploaded Succesfully";
                    }else{
                        echo "pdf upload failed";
                    }
                 
                }else{
                    echo "Your file failed to uplaod upload it again file size must be less than 1MB";
                }
             }else{
                echo "Your file must be pdf";
             }
            }else{
                echo "File is not Selected";       
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


    <input type="file" name="pdf"><br><br>
    <input type="submit" name="submit" value="upload"></input>

    </form>
    <?php if(isset($pdfshow)) { ?>
  <iframe src=<?php echo $pdfshow;  ?>   style= "width:1000px" > </iframe>
   <?php } ?>
    
    
    
    
</body>
</html>




