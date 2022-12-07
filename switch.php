<?php

include "whileloop.php";

$favcar='Bmw';


switch($favcar){
    case 'Bmw':
        echo " your fav car is Bmw";
        break;

        
    case 'volvo':
            echo " your fav car is volvo";
            break;

    case 'suzuki':
                echo " your fav car is suzuki";
                break;

    case 'mahindra':
                    echo " your fav car is mahindra";
                    break;
    default:
     echo "Not your fav car in this list;";
            
}

?>