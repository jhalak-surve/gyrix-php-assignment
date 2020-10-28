<?php
    
    $ar = array(1, 2, 3, 7, 5);       
    $ele = 4;  //element to be searched
    
    //function for linear search

    function linearSearch($ar, $ele){
        sort($ar);
        $length = count($ar);
        if( ($ele < $ar[0]) || ($ele > $ar[$length-1]) ){
            return -1;
        }
        else{
            foreach( $ar as $x => $value ){
                if( $value === $ele ){
                    return $x;
                }
                
            }
        }
      return -1;  
    } 
    
    $result = linearSearch($ar , $ele);

    if( $result == -1 ){
        echo "Element not found";
    }
    else{
        echo "Element found at index: ".$result;
    }
   
    
?>
