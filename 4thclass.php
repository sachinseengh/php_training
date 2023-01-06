<?php
//interface

//only common function we have to include then use interface
//we cannot write property in interface. 
//common  property as well as other we should use abstract

interface Car{
    public function color();
    public function run();
}

class toyota implements Car{

}
?>