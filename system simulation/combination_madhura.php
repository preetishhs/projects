<?php
function create_possible_arrays(&$set, &$results)
{
	for ($i = 0; $i < count($set); $i++)
	{
		$results[] = $set[$i];
		$tempset = $set;
		array_splice($tempset, $i, 1);
		$tempresults = array();
		create_possible_arrays($tempset, $tempresults);
		foreach ($tempresults as $res)
		{
			$results[] = $set[$i] . $res;
		}
	}
}
function filter_by_length(&$results,&$filtered,$len)
{
	$j=0;
	echo "<br>";
	//echo count($results);
	for ($i = 0; $i < count($results); $i++)
	{	
		if(strlen($results[$i])==$len)
		{
			echo "<br>$results[$i]";
			$filtered[$j] = $results[$i];
			$j++;
		}
	}
}

function is_anagram($a, $b) 
{
return(count_chars($a, 1)==count_chars($b, 1));
} 

function remove_anagrams(&$filtered)
{
	$distinct=array();
	$flag=0;
	for($i=0;$i<count($filtered)-1;$i++)
	{
		$flag=0;
		for($j=$i+1;$j<count($filtered);$j++)
		{
			if(is_anagram($filtered[$i],$filtered[$j]))
			$flag=1;
		}
		if($flag==0)
		$distinct[]=$filtered[$i];
	}
	$distinct[]=$filtered[$i];
	return $distinct;
}	

$results = array();
$filtered = array();
$distinct=array();
$len=2;
$str = 'abc'; //your string
$str = str_split($str); //converted to array
create_possible_arrays($str, $results);
print_r($results); //displaying all results
filter_by_length($results,$filtered,$len);
echo "<br>";
print_r($filtered);
$distinct=remove_anagrams($filtered);
echo "<br>";
print_r($distinct);
?>
