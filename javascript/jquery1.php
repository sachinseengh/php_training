<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jquery first</title>

    <!-- it is used to use jquery in script -->
    <script src="jquery-3.6.1.js"></script>
    <script>
      //writing jquery in script
                $(document).ready(function( ){
                   $('p').css({color:'blue'})

                   $( '#hide' ).click(function( ){
                    $('p').hide( ); 
                  })
                  $('#Show').click(function( ){
                    $('p').show( );
                  })
              
                })
    </script>
</head>
<body>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis possimus exercitationem minima at. Nesciunt eaque consequatur esse qui, placeat eum odio animi ea dignissimos molestiae sed dolorem quidem, nulla minus laborum laudantium dicta dolore, omnis maiores incidunt accusamus hic libero!</p>

    <input type="button" value="Show" id="Show">
    <input type="button" value="hide"   id="hide" >
</body>
</html>