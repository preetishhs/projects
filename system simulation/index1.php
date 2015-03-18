<!DOCTYPE html>
<html>

<body>

<?php

include "combination.php" ;

$non = 5 ;
$slots = 6 ;

$freeSlots = array("","15","2346","12356","26","134") ;

$bandWidth = strlen($freeSlots[1]);

$output = array() ;

$arr = array();
$arr[0] = array("");

$selected = array() ;
$selected[0] = "" ;

for ( $i = $bandWidth ; $i > 0 ; $i -- )
{
	for ( $j = 1 ; $j <= $non ; $j ++ )
	{
		$arr[$j] = combination ( $freeSlots[$j], $i ) ;
	}
	echo "String combinations of length $i are: <br>" ;
	if ( checkSlots($arr, 1 ) == -1 )
		echo "Failed for $i <br>" ;
	else
	{
		echo "<br>Answer is <br>" ;
		for ( $k = 1 ; $k < count($selected) ; $k ++ )
			echo "$selected[$k] " ;
		break ;
	}
	echo "<br><br>";
}

echo "<br>The output is:<br>" ;
//print_r($output) ;

/*
echo "
<button onclick=\"myFun()\" style=\"position:fixed ; margin-left:800px ; top:0px\">
Next
</button>
" ;
*/

echo "
<script>
var index=0;
function myFun()
{
	var str = \"show\"+index.toString() ;
	var ele = document.getElementById(str) ;
	ele.style.visibility=\"visible\" ;
	
	index++ ;
}
setInterval(function(){myFun()},1000);
</script>
" ;

echo "
<table border=1 style=\"width:50%;text-align:center\">
" ;

echo "
<tr>
<th>Nodes</th>
" ;

for ( $i = 1 ; $i <= $non ; $i ++)
	echo "<th>$i</th>" ;
echo "</tr>" ;

echo "
<tr>
<th>Slots</th>
" ;
for ( $i = 1 ; $i <= $non ; $i ++)
{
	$temp = str_split($freeSlots[$i] ) ;
	$temp = implode( ", ", $temp ) ;
	echo "<th>$temp</th>" ;
}
echo "</tr>" ;


$count = 0 ;
foreach ( $output as $row )
{
	echo "<tr id=\"show$count\" style=\"visibility:hidden\">";
	$count ++ ;
	echo "<td></td>" ;
	for ( $i = 0 ; $i < $non ; $i ++ )
	{
		if ( isset($row[$i]) )
		{
			if ( $row[$i] === "bubble" )
				echo "<td><div style=\"margin-left:50px;width:10px;height:10px;border-radius:10px;background:red;\"></div></td>" ;
			else
				echo "<td>$row[$i]</td>" ;
		}
		else
			echo "<td>-</td>" ;
	}
	echo "</tr>";
}

echo "
</table>
" ;

// Recursively find the slots 
function checkSlots ( &$arr, $i )
{
	global $selected ;
	
	if ( $i == 6 )
		return "" ;
	
	for ( $j = 0 ; $j < count($arr[$i]) ; $j++ )
	{
		$selected[$i] = $arr[$i][$j] ;

		if ( possible($selected[$i], $i ) )
		{
			$selected[$i] = $arr[$i][$j] ;
			
			$result = checkSlots( $arr, $i+1) ;
			if ( is_int($result) )
			{
				if ( $result == -1 )
				{
					continue ;
				}
			}
			else
				return "$selected[$i] $result" ;
		}
		else
		{
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

// Function to print all the selected combinations upto an index N
function printSelections ($n)
{
	global $selected ;
	global $output ;
	
	$tempArray = array() ;
	for ( $i = 1 ; $i <= $n ; $i ++ )
	{
		$temp = str_split($selected[$i] ) ;
		$temp = implode( ", ", $temp ) ;
		$tempArray[] = $temp ;
		
//		echo "$selected[$i] 		" ;
	}
//	echo "<br><br>" ;
	$tempArray[] = "bubble" ;
	$output[] = $tempArray ;
}

?>

</body>
</html>
