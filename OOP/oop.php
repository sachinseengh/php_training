<?php


echo "hello "."<br>";

class player{
    //properties
    //its  like template
    public $name;
    public $speed=5;
    public $salary;

    //Methods
    function set_name($name){
        $this->name=$name;
    }
    function getname(){
        return $this->name;
    }

    // function __construct()
    // {
    //  echo "this is due to constructor".'<br>';   

    // }

    //constructor is the code which will executed whenever a new object is created without even calling the function like when u created the  object player 3 and hasnt called yet event the construct has executed


    //passsing arguments in construct and performing all the function together

    function __construct($name,$salary)
    {
      $this->name=$name;
      $this->salary=$salary;
      echo "your name is $name and your salary is $salary".'<br>';

    }
}

// $player1= new player( );
// $player1->set_name("sachin");
// echo $player1->getname( ).'<br>';



// $player2= new player( );
// $player2->set_name("singh");
// echo $player2->getname( ).'<br>';


// $player2= new player( );
// $player2->set_name("dipesh");
// echo $player2->getname( );


// $player3=new player( );

$player4=new player("sachin",15000);
echo "The salary of $player4->name is $player4->salary";
?>