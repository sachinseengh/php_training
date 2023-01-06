<?php

 class common{
    public $name;


  public function  setname($name){
    $this->name=$name;
  }

 }
 //it works like users and common class are same 
 class Users extends common{

 }
 $object =new Users( );
 $object->setname("sachin");
 print_r($object);
 
?>