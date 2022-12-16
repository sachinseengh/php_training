<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax</title>
    <script src="jquery-3.6.1.js"></script>
   
    <script>
        $(document).ready(function(){
            $('#username').keyup(function(){
                var uname =$('#username').val();
            if(uname.length <6){
            $("#errorusername").text('minimum 6 character required').css({color:"red"});
            }else{
                $("#errorusername").text(' ');
                $.ajax({
                    
                    url:"check_username.php",
                    data:{"username":uname},
                    method:"post",
                    dataType:"text",
                    success:function(res){
                                   $("#errorusername").text(res);
                    }

                });

            }

            })
  
        })
    </script>
</head>
<body>
    <form action="" >
        <label for="">username</label>
        <input type="text" name="username" id="username">
        <small id="errorusername"></small>
    </form>
</body>
</html>




