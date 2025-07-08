<?php
for( $i = 1 ; $i <= 5 ; $i++ ){
   if( $i%2 == 0){
    break;//jeta sorto milbe sekhane break/stop korbe

   }
   echo "$i\n";
} 

for( $i = 1 ; $i <= 5 ; $i++ ){
    if( $i%2 == 0){
     continue;// jeta sorto milbe seta skip korbe result bakigula continue korbe
 
    }
    echo "$i\n";
 } 

 for( $i = 1 ; $i <= 5 ; $i++ ){
    if( $i%2 !== 0){//jor sonkha result pete ekhane equal er jaigai not kore dite hobe
     continue;// jeta sorto milbe seta skip korbe result bakigula continue korbe
 
    }
    echo "$i\n";
 } 
//jor sonkha result pete hole:
 for( $i = 1 ; $i <= 20 ; $i++ ){
    if( $i%2 !== 0){//jor sonkha result pete ekhane equal er jaigai not kore dite hobe
     continue;// jeta sorto milbe seta skip korbe result bakigula continue korbe
 
    }
    echo "$i\n";
 } 
