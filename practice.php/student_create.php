<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <script src="../jquery-3.6.1.js"></script>
    <script src="../jquery-validation-1.19.5\dist\jquery.validate.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#createForm').validate();
        })
    </script>
</head>
<body>
    
<div>
    <h3>Student form</h3>
    <form action="" method="post" id="createForm" >
<label for ="name">Name:</label>
    <input type="text" name="name" id="name" required>
    <br><br>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>
    <br><br>
    <label for="address">Address:</label>
    <input type="text" name="address" id="address"  required>
    <br><br>
    <label for="phone">Phone:</label>
    <input type="number" name="phone" id="phone" required>
    <br><br>
<input type="submit" value="submit " name="submit">    

</form>
</div>
</body>
</html>