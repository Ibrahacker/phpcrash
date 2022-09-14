<?php

#___________________
//For Loop
/*for (initialize;condition; increment){
    code to be executed
}*/

//for ($x=0; $x <= 10; $x++ ){
//    echo 'Number '  .$x .'<br>';
//}
#___________________
//While Loop

//$x = 1;
/*
while ($x <= 15){
  echo 'Number ' . $x. '<br>';
  $x = $x+1;
}*/
#___________________
//Do while Loop

/*do {
echo 'Number ' .$x. '<br>';
$x++;
} while($x <= 5);*/

#___________________
//For each - Arrays
#foreach ($array s $value){
   // Code to be executed}
//


//$posts = ['First Post ','Second Post ','Third Post'];
/*for ($x = 0;$x< count($Post); $x++){
    echo $Post [$x];
}*/
/*
foreach($posts as $post){
    echo $post ;
}*/

/*
foreach($posts as $index=> $post){
    echo $index+1 . '-'. $post. '<br>' ;
}
*/

$person = [
    'first_name' =>'Kim',
    'last _name' => 'Muktar',
    'email' => 'Kim006@gmail.com'
    ];
   
foreach($person as $key =>$value){
echo "$key - $value<br>";
}



