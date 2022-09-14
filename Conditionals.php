<?php


/*
//If statements
$age = 15;


if($age >= 18) {
   echo  'You are olds enoughs to votes';
}

else{
    echo 'Sorry you cannot vote';
} */

$t = date("H");
/*
if($t<12){
    echo 'Good Morning';
} elseif($t<17){
    echo 'Good afternoon';

} else{ 
    echo 'Good evening';
}

if(true){
echo 123;
}*/

$Post = ['First Post'];
//if(!empty($Post)){
//echo $Post[0];
#} else{
  //  echo 'no post';
//};

#Tannery Operators
#$Firstpost = !empty($Post) ? $Post[0] : 'No Posts';
//$Firstpost = !empty($Post) ? $Post[0] : null;

#Coalescing Operator
$Firstpost = $posts[0] ?? null;

//echo $Firstpost;

$favcolor = 'Purple';

switch($favcolor) {
    case 'red';
    echo 'Your favourite color is red';
    break;
    case 'blue';
    echo 'your favourite colour is blue';
    break;
    default;
    echo 'You dont a favourite colour, duh!';
}

?>