<?php
/******************************************************************************

Welcome to GDB Online.
GDB online is an online compiler and debugger tool for C, C++, Python, Java, PHP, Ruby, Perl,
C#, VB, Swift, Pascal, Fortran, Haskell, Objective-C, Assembly, HTML, CSS, JS, SQLite, Prolog.
Code, Compile, Run and Debug online from anywhere in world.

*******************************************************************************/
$prima = array();
$count = 0 ;
$number = 2 ;
while ($count < 10 )
{
$div_count=0;
for ( $i=1;$i<=$number;$i++)
{
if (($number%$i)==0)
{
$div_count++;
}
}
if ($div_count<3)
{
$prima[]=$number;
$count=$count+1;
}
$number=$number+1;
}
$jumlah = 4;
$result = array();
foreach( array_rand($prima, $jumlah) as $k ) {
  $result[] = $prima[$k];
}
print_r($result);
echo(array_sum($result));