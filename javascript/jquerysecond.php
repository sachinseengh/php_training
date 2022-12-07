
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="jquery-3.6.1.js"></script>
    <script>
                $(document).ready(function( ){
                   $('#username').keyup(function( ){
                       var uname=$('#username').val();
                       if(uname.length<6){
                        $('#usernameError').text("Minimum 6 character required").css({color:'red'});
                       }else{
                        $('#usernameError').text('ok ');
                       }
                        })

                        $('#repassword').keyup(function( ){
                       var repass=$('#repassword').val();
                       var pass=$('#password').val( );
                       if(repass== pass){
                        $('#PasswordError').text(" ")
                       }else{
                        $('#PasswordError').text("Password Mismatched ").css({color:'red' })
                       }
                       
                        })

                                        })
    </script>
</head>
<body>
<form  method="post"  name="loginForm"   >
                <label for="username">username:</label>
        <input type="text" name="username" id="username">
        <small id="usernameError"> </small>
        <br><br>
        <label for="password" >Password:</label>
        <input type="password" name="password" id="password">
        <br><br>
        <label for="repassword" >Confirm Password:</label>
        <input type="password" name="repassword" id="repassword">
        <small id="PasswordError"></small>
        <br><br>
        <input type="submit" name="submit" value="submit">
        </form>
</body>
</html>