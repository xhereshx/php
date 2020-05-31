<?php

//while loop
$time_served = 10;
while($time_served <= 10){
echo '<p> ' . 'The prisoner has served ' . $time_served  . ' years' . ' </p>';
$time_served++;
}

//do .. while loop
$time_served = 10;
do{
    echo '<p> ' . 'The prisoner has served ' . $time_served  . ' years' . ' </p>';
    $time_served++;
} while($time_served <= 10);

//for loop

 for ($time_served = 0; $time_served < 10; $time_served+=2){
    echo '<p> ' . 'The prisoner has served ' . $time_served  . ' years' . ' </p>';
} 

for ($i = 0; $i < 10; $i += 2) {
	echo '<p>' . $i . '</p>';
}

//continue & break

for($i = 10 ; $i > 0 ; $i -=1){
   if($i ==3){
       continue;
   }
   
    if($i == 5){
   break;
   }

   echo '<p>' . 'The prisoner has ' . $i  . ' more years to serve.' . '</p>' ;
   echo `Going to a parole hearing...`;  
}

/*  if($i > 5){
        echo `The prisoner has ${i} more years to serve.`; 
         
    }*/

?>
