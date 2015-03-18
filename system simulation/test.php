<!DOCTYPE html>
<html>

<body>

<?php
/*
$str = array() ;
$str[0] = array("");
$str[1] = array( "hello", "hi" ) ;
$str[2] = array("My","name","is");

function test ( $string) 
{
	global $str ;
	
	$x = $str[0][1] ;
	echo "$string and $x<br>" ;
}
*/
/*
include "combination.php" ;
$len=2;
$str = 'abc'; //your string

$distinct = combination ( $str, $len ) ;
print_r($distinct) ;
*/

/*
$string = 'bac';

$stringParts = str_split($string);
sort($stringParts);
echo implode('', $stringParts);
*/

$output = array() ;
$output[] = "bc";
$output[] = "def";

$output[0] = str_split($output[0]);
$output[0] = implode( ", ", $output[0]) ;

echo $output[0] ;

?>

</body>
</html>
