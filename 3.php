<?php
/******************************************************************************

Welcome to GDB Online.
GDB online is an online compiler and debugger tool for C, C++, Python, Java, PHP, Ruby, Perl,
C#, VB, Swift, Pascal, Fortran, Haskell, Objective-C, Assembly, HTML, CSS, JS, SQLite, Prolog.
Code, Compile, Run and Debug online from anywhere in world.

*******************************************************************************/

$bilangan = 5;
$bilArray = array();
if($bilangan < 1 || !is_int($bilangan)){
    echo "parameter harus bilangan positif";}
elseif(is_int($bilangan)){

$bilArray[] = $bilangan;
while($bilangan != 1){
    if (($bilangan%2)==1) {
        $angka = (3*$bilangan)+1;
        $bilangan = $angka;
        $bilArray[] = $bilangan;
    }if (($bilangan%2)==0) {
        $angka = $bilangan/2;
        $bilangan = $angka;
        $bilArray[] = $bilangan;
    }
}}

print_r($bilArray);