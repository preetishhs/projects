<?PHP
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

$results = array();
$str = 'abc'; //your string
$str = str_split($str); //converted to array
create_possible_arrays($str, $results);
print_r($results); //displaying all results
?>
