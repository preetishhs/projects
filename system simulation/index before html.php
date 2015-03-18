<?php

include "combination.php" ;

$non = 5 ;
$slots = 6 ;

$freeSlots = array("","15","2346","12356","26","134") ;
//$freeSlots = array("","15","2346","123","26","134") ;

$bandWidth = strlen($freeSlots[1]);

//$combi = array() ;

$arr = array();
$arr[0] = array("");
/*
$arr[1] = array("15");
$arr[2] = array("23","24","26","34","36","46");
$arr[3] = array("12","13","15","16","23","25","26","35","36","56");
$arr[4] = array("26");
$arr[5] = array("13","14","34");
*/

$selected = array() ;
$selected[0] = "" ;
//$selectIndex = 0 ;

//print_r($arr) ;
	
for ( $i = $bandWidth ; $i > 0 ; $i -- )
{
	for ( $j = 1 ; $j <= $non ; $j ++ )
	{
		$arr[$j] = combination ( $freeSlots[$j], $i ) ;
//		echo "$j is $freeSlots[$i]:<br>";
//		print_r($arr[$j]) ;
	}
	echo "String combinations of length $i are: <br>" ;
//	print_r($arr) ;
//	echo "<br><br>";
	if ( checkSlots($arr, 1 ) == -1 )
		echo "Failed for $i <br>" ;
	else
	{
		echo "<br>Answer is <br>" ;
		for ( $k = 1 ; $k < count($selected) ; $k ++ )
			echo "$selected[$k] " ;
//		print_r($selected) ;
		break ;
	}
	echo "<br><br>";
}

// Recursively find the slots 
function checkSlots ( &$arr, $i )
{
	global $selected ;
//		print_r($arr) ; echo "$arr[$i] $i: <br>";
	
	if ( $i == 6 )
		return "" ;
	
	for ( $j = 0 ; $j < count($arr[$i]) ; $j++ )
	{
		$selected[$i] = $arr[$i][$j] ;
//		echo "$selected[$i] : " ;
		if ( possible($selected[$i], $i ) )
		{
			$selected[$i] = $arr[$i][$j] ;
//			echo "Possible <br>" ;
			
			$result = checkSlots( $arr, $i+1) ;
			if ( is_int($result) )
			{
				if ( $result == -1 )
				{
//					printSelections( $i ) ;
					continue ;
				}
			}
			else
				return "$selected[$i] $result" ;
		}
		else
		{
//			echo "<br>" ;
			printSelections( $i ) ;
		}
	}
	return -1 ;
}

// Returns 1 if the selected string can be inserted into the specified position, else 0
function possible ( $str, $pos )
{
	global $selected ;
	
	if ( $pos == 0 )
		return 1 ;
	else if ( $pos == 1 )
	{
		if ( compareString($selected[0],$str) == 0 )
			return 0 ;
		else
			return 1 ;
	}
	else
	{
		if ( compareString($selected[$pos-1],$str) == 0 || compareString($selected[$pos-2],$str) == 0 )
			return 0 ;
		else
			return 1 ;
	}
}

// Returns 0 if the character is present, else returns 1 if two strings are unique
function compareString ( $a, $b )
{
	for ( $i = 0 ; $i < strlen($a) ; $i ++ )
	{
		if( strpos($b,$a[$i]) !== false)
			return 0 ;
	}
	return 1 ;
}

function printSelections ($n)
{
	global $selected ;
	
	for ( $i = 1 ; $i <= $n ; $i ++ )
		echo "$selected[$i] 		" ;
	echo "<br><br>" ;
}

?>
