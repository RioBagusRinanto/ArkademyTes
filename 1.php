<?php
/******************************************************************************

Welcome to GDB Online.
GDB online is an online compiler and debugger tool for C, C++, Python, Java, PHP, Ruby, Perl,
C#, VB, Swift, Pascal, Fortran, Haskell, Objective-C, Assembly, HTML, CSS, JS, SQLite, Prolog.
Code, Compile, Run and Debug online from anywhere in world.

*******************************************************************************/



function soal1($nama, $umur) {
$obj = new \stdClass();
$obj -> name = $nama;
$obj -> age = $umur;
$obj -> address = "sumbermanjing wetan malang";
$obj -> hobbies = array("bermain game","memancing");
$obj -> is_married = false;
$b = new ArrayObject();                                   
    $b['name'] = array('sdn 05 segaran','smp pgri 02 gedangan','smkn 1 gedangan', 'universitas kanjuruhan malang');
    $b['year_in'] = array('2002','2008','2011','2014');
    $b['year_out'] = array('2008','2011','2014',NULL);
    $b['major'] = array(NULL,NULL,'multimedia','sistem informasi');
$obj -> list_school = $b;
$skl = new ArrayObject();
    $skl['skill_name'] = array('PHP','Javascript','HTML','Java','Kotlin','MySQL');
    $skl['level'] = array('advanced','advanced','advanced','advanced','beginner','advanced');
$obj -> skills = $skl;
$obj -> interest_in_coding = true;
$Json = json_encode($obj);
print_r($Json);
}

soal1("Rio Bagus Rinanto", 23);


?>
