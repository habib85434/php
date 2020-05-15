<?php
/*
 * PHP has basic 4 types of operators
 * 1.Arithmetic (8 operators)
 *  - Arithmatic Binary Operator: + - % / *
 * 		- what is % operator? this is a remainder or 'vag ses'
 * 	-Arithmatic Unary Operator: (-) ++ --
 * 		- (-) this is negation sign if there is no operant before and after
 * 		  then it is just a hypen or negation but if there is a operent
 * 		  like '-5' then it is unary negation. Negation change the value
 * 		  like if the value is positive then it will make negative or the
 * 		  value is negative then it will make positive.
 *
 * 		- ++ works each time add one value which is increment and -- works each
 * 		  time minus one value which is decrement. NOTE: There are two types
 * 		  and these are pre and post.
 * 2.Conditional(8 operators)
 * 	- > >= < <=  == != === !== NOTE: conditional operator takes any oparent but
 * 	  outpus always boolen.
 * 3.Assignment (7 operators)
 * 	- += -= *= /= %= .=
 * 4.Logical (3 operators)
 * 	- && || !
*/


/*
 * Arithmatic Binary Operator +
 * OUTPUT: 12
 * */
echo 'Arithmatic Binary Operator + : ';
echo "<br>";
echo 10 + 2;
echo "<br>";

/*
 * Arithmatic Binary Operator -
 * OUTPUT: 8
 * */
echo 'Arithmatic Binary Operator - : ';
echo "<br>";
echo 10 - 2;
echo "<br>";


/*
 * Arithmatic Binary Operator /
 * OUTPUT: 5
 * */
echo 'Arithmatic Binary Operator / : ';
echo "<br>";
echo 10 / 2;
echo "<br>";

/*
 * Arithmatic Binary Operator *
 * OUTPUT: 20
 * */
echo 'Arithmatic Binary Operator * : ';
echo "<br>";
echo 10 * 2;
echo "<br>";

/*
 * Arithmatic Binary Operator %
 * OUTPUT: 1
 * */
echo 'Arithmatic Binary Operator % : ';
echo "<br>";
echo 10 % 3;
echo "<br>";

$a =5;
$b = 'Two';
$c = 6.2;
$d = true;
$e = -10;

/*
 * Arithmatic Unary Operator (-) (negation)
 * OUTPUT: -5
 *         10
 * */
echo 'Arithmatic Unary Operator (-) (negation) : ';
echo "<br>";
echo  - $a;
echo "<br>";
echo  - $e;
$a= 5; //Re assign the value
echo "<br>";

/*
 * Arithmatic Unary Operator ++
 * OUTPUT: 5
 * Explain: as we know ++ adds one value so it should have been 5+1 = 6
 * 			but still the output is 5 why? because it is printing $a first
 * 			then adding another 5 which is not printing. So it is post not pre.
 * */
echo 'Arithmatic Unary Operator ++ (post) : ';
echo "<br>";
echo  $a++;
$a= 5; //Re assign the value
echo "<br>";

/*
 * Arithmatic Unary Operator ++
 * OUTPUT: 6
 * Explain: here, unary operator pre used thats why $a +1 = $a which is 6.
 * */
echo 'Arithmatic Unary Operator ++ (pre) : ';
echo "<br>";
echo  ++$a;
$a= 5; //Re assign the value
echo "<br>";

/*
 * Arithmatic Unary Operator --
 * OUTPUT: 5
 * Explain: again here is the same post used so output is 5
 * */
echo 'Arithmatic Unary Operator -- (post) : ';
echo "<br>";
echo  $a--;
$a= 5; //Re assign the value
echo "<br>";

/*
 * Arithmatic Unary Operator ++
 * OUTPUT: 4
 * Explain: here, unary operator pre used thats why $a -1 = $a which is 4.
 * */
echo 'Arithmatic Unary Operator -- (pre) : ';
echo "<br>";
echo  --$a;
$a= 5; //Re assign the value
echo "<br>";

/*
 * Arithmatic Unary Operator ++
 * OUTPUT: 15
 * Explain: $a += 10 is $a = $a + 10 which is $a = 5 + 10
 * */
echo 'Assignment += : ';
echo "<br>";
echo  $a += 10;
$a= 5; //Re assign the value
echo "<br>";

/*
 * Conditional operator example
 * OUTPUT: 1
 * Explain: this is true and true is 1 but if it could be false then output
 * 			would be blank or null.
 * */
echo 'Conditional operator example : ';
echo "<br>";
echo  $a > $e;
$a= 5; //Re assign the value
echo "<br>";






/*
 * Example operation # 1
 * OUTPUT: A warning will show because $b is non-numaric value but yes the
 * output will still $a which is 5
 * */
echo 'Example operation # 1 : ';
echo "<br>";
echo $b + $a;
echo "<br>";











