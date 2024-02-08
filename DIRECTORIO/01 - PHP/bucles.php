<?php

$con = 5;
$j = 1;
$num = 2;
while($num <=1000){

while($j <= $con){

   echo $num ."  ";
    $num +=2;
   $j++;

   if($num >1000){
    break;
   }
}
$j=1;
if($con<=10){
$con+=5;
}
else{
    $con = 5;
}
echo "<br>";

}

?>