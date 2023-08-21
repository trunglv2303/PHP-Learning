<?php
$number =1;
$check =$number >0;
if($check){ //if($check==true)
    echo $number.'Là số nguyên dương';

}
echo '<br/>';
$number =-1;
if ($number>0){
    echo $number.' Là số nguyên dương';
}
else if ( $number<0){
    echo $number.'Là số nguyên âm';

}
