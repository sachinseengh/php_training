<?php

$cars =array("jeep","suzuki","Mahindra","BMW",);

// print_r($cars);

// foreach($cars as $n){
//     // echo $n.'<br>';

//     if($n=="volvo"){
//         echo "volvo";
//     }else{
//         // echo "no any volvo here";
//     };


    //Associated array
$ages = array("sachin"=>"20","dipesh"=>"15","surya"=>"10");
// print_r($ages);

// foreach($ages as $key=>$value){
//     echo $key."' age    =    " ; echo $value. '<br>'; 
// };

//multidimensionarray

// $multidiemsionarray=array(
//     array("sachin",'Bca'),
//     array("surya","10"),
//     array("dipesh","12")
// );
// foreach($multidiemsionarray as $key=>$value){

//     echo $key.'<br>';
//     print_r($value);
// };


//for loop
$sachin=array(2,5,4,8);
for( $i = 0;  $i < count($sachin) ;  $i++){
    echo $sachin[$i].'<br>';
};

//do while loop
$x=1;
do{
  echo "the number is : $x.<br>";
$x++;
}while($x<=15);



$cars=array("toyoto","suzuki");
foreach($cars as $x=>$c){
  echo $c."=".$x."<br>";
  // echo $c."<br>";
};



?>