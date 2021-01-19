<?php

//Q1 :
echo "QUSTION1"."<br>";
function year($x){
    if($x % 4 == 0){
        if($x == 1700 || $x == 1900){
            echo "$x is a normal year". "<hr>";
        } else {
            echo "$x is a leap year". "<hr>";
        }
    }else {
        echo "$x is a normal year". "<hr>";
    }
}
year(2000);

                // another solution //
                
$year = 2021;
if(($year % 400 == 0) || (($year % 100 == 0) && ($year % 4 == 0))){
    echo "$year is a leap year.". "<hr>";
} else{
    echo "$year is normal year.". "<hr>";
}
//////////////////////////////////////////////////////////////////////////

//Q2 :
echo "QUSTION5"."<br>";
function Temperature($T){
    if($T < 20){
        echo "We Are in Winter". "<hr>";
    } else{
        echo "We Are in Summer". "<hr>";
    }
}
Temperature(15);

                      // another solution//
                      
$temp = 27;
if ($temp < 20 ){
    echo "we are in winter". "<hr>";
} else {
    echo "we are in summer". "<hr>";
}
/////////////////////////////////////////////////////////////////////////

//Q3 :
echo "QUSTION3"."<br>";
function Calculate($x , $y){
    $Sum = $x + $y;
    $Sum_mul = ($x + $y) * 3;
    if($x == $y){
        return $Sum_mul;
    } else{
        return $Sum;
    }
}
echo Calculate(2,2) . "<hr>";

                      // another solution//

$x = 5 ;
$y = 5 ;
if ($x == $y ){
    echo "3($x+$y)". "<hr>";
} else {
    echo $x+$y. "<hr>";
}
/////////////////////////////////////////////////////////////////////////

//Q4 :
echo "QUSTION4"."<br>";
function difference($x){
    $dif = abs($x - 100);
    if($x > 100){
        return $dif * 3;
    } else{
        return $dif;
    }
}
echo difference(120) . "<hr>";

                      // another solution//

$n = 54 ;
if($n > 100 ){
    echo abs(" 3 ( $n - 100 )"). "<hr>";
} else{
    echo abs( 100 - $n ). "<hr>";
}
/////////////////////////////////////////////////////////////////////////

//Q5 :
echo "QUSTION5"."<br>";
function intCheck($x,$y){
    $q = is_int($x);
    $w = is_int($y);
    if($q == 1 && $w == 1){
        $sum = $x + $y;
        if($sum == 30 || $x == 30 || $y ==30){
            return "True";
        } else{
            return "False";
        }
    }else {
        return "Enter an Integer Numbers";
    }
}
echo intCheck(20,10) . "<hr>";
//////////////////////////////////////////////////////////////////////////

//Q6 :
echo "QUSTION6"."<br>";
function intCheck1($x){
    $q = is_int($x);
    if($q == 1){
        if($x == 10 || $x == 100 || $x == 200){
            return "$x";
        }
    } else{
        return "Enter An Integer Number";
    }
}
echo intCheck1(200) . "<hr>";

                      // another solution//

$x = 55;
if(abs($x - 100) <= 10 || abs($x - 200) <= 10){
    echo "$x is integer". "<hr>";
} else{
    echo " not integer". "<hr>";
}
////////////////////////////////////////////////////////////////////////////

//Q7 :
echo "QUSTION7"."<br>";
function Multi($x){
    if($x >= 0){
        if($x % 3 == 0 && $x % 7 == 0){
            return "$x Is Multiple Of 3 & 7";
        }
        elseif($x % 3 == 0) //($x / 3 == 1)
        {
            return "$x Is Multiple Of 3";
        }elseif($x % 7 == 0) //($x / 7 == 1)
        {
            return "$x Is Multiple Of 7";
        }else{
            return "$x Is not Multiple Of 3 or 7";
        }
    } else{
        return "Enter A positive Number";
    }
}
echo Multi(21) . "<hr>";

                      // another solution//

$n = 49 ;
if ($n >= 0){
    if( $n % 3 == 0){
        echo "this number is a multiple of 3". "<hr>";
    }elseif( $n % 7 == 0){
         echo "this number is a multiple of 7". "<hr>";
    }else {
         echo "this number is not a multiple of 3 or 7". "<hr>";
    }
}else{
    echo "this is not positive number". "<hr>";
}
///////////////////////////////////////////////////////////////////////////

//Q8 :
echo "QUSTION8"."<br>";
$str = "WELCOME IN BACKEND";
$arr = explode(" ",$str);
if("if" === $arr[0]){
    echo "String Unchanged" ."<hr>";
} else{
    array_unshift($arr, "if");
    echo implode(" ",$arr) ."<hr>";
}
//////////////////////////////////////////////////////////////////////////

//Q9 :
echo "QUSTION9"."<br>";
function test6($s, $n)
{
    return substr($s,0,$n).substr($s,$n+1,strlen($s)-$n);
}

echo test6("Hello", 1)."<br>";
echo test6("Hello", 0)."<br>";
echo test6("Hello", 4)."<br>";
echo "<hr>";
//////////////////////////////////////////////////////////////////////////

//Q10 : 
echo "QUSTION10"."<br>";
function test9($x, $y)
{
    return ($x >= 100 && $x <= 200) || ($y >= 100 && $y <= 200);
}
var_dump(test9(100, 199));
var_dump(test9(250, 300));
var_dump(test9(105, 190));
echo "<hr>";
///////////////////////////////////////////////////////////////////////////

//Q11 :
echo "QUSTION11"."<br>";
function test33($x, $y)
{
    return ($x <= 20 || $y >= 50) || ($y <= 20 || $x >= 50);
}
var_dump(test33(20, 84));
var_dump(test33(14, 50));
var_dump(test33(11, 45));
var_dump(test33(25, 40));
echo "<hr>";
//////////////////////////////////////////////////////////////////////////

//Q12 : 
echo "QUSTION12"."<br>";
function ttest($x, $y, $z)
{
    $max = max($x, max($y, $z));
    return $max;
}
echo ttest(1, 2, 3)."\n";
echo ttest(1, 3, 2)."\n";
echo ttest(1, 1, 1)."\n";
echo ttest(1, 2, 2)."\n";
echo "<hr>";
//////////////////////////////////////////////////////////////////////////

//Q13 :
echo "QUSTION13"."<br>";
function testl($x, $y)
{
    $n = 100;
    $val = abs($x - $n);
    $val2 = abs($y - $n);
    return $val == $val2 ? 0 : ($val < $val2 ? $x : $y);
}
echo testl(78, 95)."\n";
echo testl(95, 95)."\n";
echo testl(99, 70)."\n";
echo "<hr>";
/////////////////////////////////////////////////////////////////////////

//Q14 :
echo "QUSTION14"."<hr>";
function testq($x, $y)
{
    return $x == 5 || $y == 5 || $x + $y == 5 || abs($x - $y) == 5;
}
var_dump(testq(5, 4));
var_dump(testq(4, 3));
var_dump(testq(1, 4));

?>