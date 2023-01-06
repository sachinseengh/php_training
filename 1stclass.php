<?php

class Users{
    public $id,$name,$address;

public function message( ){
    echo "message box";
}
}


$object = new Users( );
print_r($object->message( ));


?>