<?php 


function rotate($arr, $steps){

	$temp = array();
	/*for ($i=0; $i <= $steps-1 ; $i++) { 
		$temp[] = $arr[$i];
	}*/
	$shift_array = array();
	$st_count = 0;
	for ($i=0; $i < count($arr) ; $i++) { 
		if ($st_count<=$steps-1) {
			$temp[] = $arr[$i];
		}else{
			$shift_array[] = $arr[$i];
		}
		
		$st_count++;
	}

	return  array_merge($shift_array, $temp);
	/*print_r($temp);
	echo "<br>";
	print_r($shift_array);
	echo "<br>";
	print_r($final_output);*/
}

$arr = [1,2,7,8,9];
$steps = 3;
echo "Input: ";
foreach ($arr as $v) {
	echo $v." ";
}
echo " || steps : ".$steps."<br>Output: ";
$output = rotate($arr, $steps) ;
foreach ($output as $v) {
	echo $v." ";
}
?>