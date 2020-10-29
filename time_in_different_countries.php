<?php

    //Program for time zones in different countries
    
    $choice = 2;    //User choice
    switch($choice){
        case 0 :{                                               //Time in New Zealand
            date_default_timezone_set("Pacific/Auckland");
            echo "Time in New Zealand is: ".date("h:i:sa");  
            break;
            } 
        case 1 :{                                               //Time in Australia
            date_default_timezone_set("Australia/Melbourne");
            echo "Time in Australia is: ".date("h:i:sa");  
            break;
        } 
        case 2 :{                                               //Time in India
            date_default_timezone_set("Asia/Kolkata");
            echo "Time in India is: ".date("h:i:sa");  
            break;
        } 
        case 3 :{                                               //Time in USA
            date_default_timezone_set("America/New_York");
            echo "Time in USA is: ".date("h:i:sa");  
            break;
        } 
        case 4 :{                                               //Time in Germany
            date_default_timezone_set("Europe/Berlin");
            echo "Time in Germany is: ".date("h:i:sa");  
            break;
        } 
        default :{                                              //For incorrect choice
            echo "Please select from 0-4 ";
            break;
        } 
    }
    

?>