<?php
 
 // declaring a variable to hold the number
 $a=0;
 
 
 // creating a function to check if the number is a prime number or not
 
 function isPrime($n){
    for($x=2; $x<$n; $x++){
        if($n %$x == 0){
            return 0;
        }
    }
    return 1;
 }
 
 // looping through the numbers
 
 while($a < 1000000){
     
     
     // incrementing the numbers while looping
     $a++;
     
    // checking if the number is the 10th number
    if(fmod($a,10) == 0){
        
        
        //calling the prime function
        $prime = isPrime($a);
        if($prime == 0){
            echo '<span style="font-weight:bold">'.$a.'</span><br>';
        }else{
            echo '<span style="font-weight:bold;text-decoration:underline">'.$a.'</span><br>';
        }
        
        
    // checking if the number is the 3rd number
    }elseif(fmod($a,3)){
        
        //calling the prime function
        $prime = isPrime($a);
        if($prime == 0){
            echo '<i>'.$a.'</i>'.' ';
        }else{
            echo '<i style="text-decoration:underline">'.$a.'</i>'.' &nbsp ';
        }
        
        
        
    // other number goes here
    }else{
        //calling the prime function
        $prime = isPrime($a);
        if($prime == 0){
            echo $a.' &nbsp ';
        }else{
            echo '<span style="text-decoration:underline">'.$a.'</span> &nbsp';
        }
        
        
    }
 }
 
?>