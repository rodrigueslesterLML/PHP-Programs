<?php   
    if($_POST){  
        $number = $_POST['number'];   
        //divide entered number by 2   
        //if the reminder is 0 then the number is even otherwise the number is odd  
        if(($number % 2) == 0){  
            echo "$number is an Even number";  
        }else{  
            echo "$number is Odd number";  
        }  
    }  
?>