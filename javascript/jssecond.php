<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Javascript Form</title>
    <script>
                      function checkLogin( ){
                        document.write('hello');
                         console.log(" Hello world");
                         
                        }
    </script>

<body>
    <form  method="post"  name="loginForm"  onsubmit = checkLogin( ) >
                <label for="username">username:</label>
        <input type="text" name="username" id="username">
        <br><br>
        <label for="password" >Password:</label>
        <input type="password" name="password" id="password">
        <br><br>
        <input type="submit" name="submit" value="submit">
        </form>
</body>
</html>