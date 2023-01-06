<?php



//abstract class is used in case that the property is compulsory
abstract class car{
    abstract public function color( );
    abstract public function run( );
}


//if there is abstract  class , the toyota must contain these abstract class 
class toyota extends car{
    public function color(){

    }
    public function run(){

    }
}
$object=new toyota();
print_r( $object);

?>