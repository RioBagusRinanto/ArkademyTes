<?php
/******************************************************************************

Welcome to GDB Online.
GDB online is an online compiler and debugger tool for C, C++, Python, Java, PHP, Ruby, Perl,
C#, VB, Swift, Pascal, Fortran, Haskell, Objective-C, Assembly, HTML, CSS, JS, SQLite, Prolog.
Code, Compile, Run and Debug online from anywhere in world.

*******************************************************************************/
$pattern1 = "/(?=^[0-9])(?=^[a-z0-9_]{5,8}$)/";
$username = "3e743ht2";
if(preg_match($pattern1, $username)){
    echo "username true | ";
} else{
    echo "username false | ";
}


//password
$pattern = "/(?=.*[#$%^&*@()~`+=\-\[\]\';,.\/{}|\":<>?~\\\\]{1,})(?=.*[0-9]{1,})(?=.*[A-Z]{6,})/";
$password = "PAFSS3@";
if(preg_match($pattern, $password)){
    echo "Password true";
} else{
    echo "Password false";
}
?>                            		

