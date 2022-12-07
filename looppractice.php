<?php
//forloop

for($x=0; $x<5 ;  $x++){
    echo "The number is : $x <br>";
};

//foreachloop

$arr=array(5,5,4,5,5,45,4);
foreach($arr as $key=>$value){

    $number=$key+1;
    // echo "The number($number) element is $value<br>";

    echo "The number   " .($key+=1) .  "   element is $value<br>";
};

//dowhileloop
// $x=10;
// do{
//     echo "The number is $x<br>";
//     $x++;
// }while($x<=20);



?>