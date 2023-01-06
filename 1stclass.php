<?php

class Users{
    public $id,$name,$phone;

// public function message( ){
//     echo "message box";
// }
// public function insert(){

// }
public function __construct($value,$id,$phone){
    $this->name=$value;
    $this->id=$id;
    $this->phone=$phone;
}
}


$object = new Users('sachin',1,95884658 );
// print_r($object->message( ));
// print_r($object->insert());
print_r($object);


?>
//access modifier are of three type
//protected,private and public