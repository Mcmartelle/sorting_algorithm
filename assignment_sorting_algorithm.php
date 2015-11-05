<?php
function sorting($array)
{
	$arr = $array;
	for ($i=0; $i < count($arr)/2; $i++) { 
		for ($k=count($arr)-$i-1; $k >= $i; $k--) { 
			if ($arr[$i] > $arr[$k]) {
				$swap = $arr[$i];
				$arr[$i]=$arr[$k];
				$arr[$k]=$swap;
			}
			else if ($arr[count($arr)-$i-1] < $arr[$k]) {
				$swap = $arr[count($arr)-$i-1];
				$arr[count($arr)-$i-1]=$arr[$k];
				$arr[$k]=$swap;
			}
		}
	}

	return $arr;
}
$test = array();
// $test = array(4,5,7,1,-2,3,0,9,8,10);
for ($i=0; $i < 10000; $i++) { 
	array_push($test, rand(0,10000));
}
$time_start = microtime(true);
$sorted = sorting($test);

$time_end = microtime(true);
$time = $time_end - $time_start;

echo "Did sort in $time seconds\n";

echo '<pre>' . var_export($sorted, true) . '</pre>';

?>