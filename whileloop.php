<?php
// $x=1;
// //while loop first check the condition 
// while($x<=20){
//     echo " this is the number : $x <br>";
//     $x++;
// };

//do while
//it executes and then only check the condition 
// $y=1;
// do{
//     echo "the number is $y<br>";
//     $y++;
// }while($y<12);




//when the condition of break is matched it will stop the loop
// for ($x = 0; $x < 10; $x++) {
//     if ($x == 4) {
//       break;
//     }
//     echo "The number is: $x <br>";
// };  





//it will not print 4 .continue skip the when element when condition matched
for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
      continue;
    }
    echo "The number is: $x <br>";
  };





  for($y=0;$y<100;$y++){
    if($y==20){
        break;
    }
    echo "The number is $y<br>";
    
  }
  



?>