<?php
    echo "if you are using your console to execute this code please skip the following announcement: \n";
    echo "¡This exercise should be executed at console, do not execute at browser! use command: php 1_helloworld.php \n \n";
    
    $name = readline('tip your name: ');
    
    print("Hi Mr/Ms ". $name." Welcome to the Middle Earth \n");
    
    var_dump("I will show you the mordor's way... my ¡precious! \n");
    
    echo "please answer the following questions of PHP language: \n";
    
    $first = readline("tip true or false: When submitting a form using the POST method the parameters are displayed in the url?: ");
    
    if($first==='true'){
        $result1=-1;
        echo "\n Wrong answer, you fail ";
    }
    else{
        if($first==='false'){
            $result1=1;
            echo "\n It's correct, you win ";
        }
    }
    print ($result1.' coin');
?>