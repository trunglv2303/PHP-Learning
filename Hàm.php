<?php 
// Cú pháp định nghĩa hàm 
// funciton ten_ham(danh_sach_tham_so){

// }
// -ten_ham : Do chúng ta đặt ( Động từ)
// - danh_sach_tham_so : Danh sách các biến cách nhau bởi dấu (,)
function maketotal($a, $b){
    $total= $a+$b;
    echo ' kết quả total'.$total;

}
$a=10;
$b=11;
maketotal($a,$b);
function getmessage(){
    echo ' Đây là thông báo';

}
getmessage();