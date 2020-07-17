<?php 
// Efficient PHP program to sort an  
// array of numbers in range from 1 to n. 
  
  
// function for sort array 
function remove_first_occurence($arr, $n) 
{ 
	$to_be_removed_indexes = '';
	for ($i=0; $i < $n ; $i++) {
		$duplicate_occurence = 0; 
		for ($j= $i ; $j < $n ; $j++) { 
			//echo "<br> comparing :".$arr[$i]." and ". $arr[$j]."      ";
			if (!empty($arr[$i] ) && !empty($arr[$j]) ) {



				if ($arr[$i]==$arr[$j]) {
					$duplicate_occurence++;
					//echo "<br> found ".$arr[$j]." repeateative   ".$duplicate_occurence;

					//if the duplicate_occurence is 2, then unset that index
					if ($duplicate_occurence==2) {

						$string_to_compare = '_'.$arr[$j];
						if (strpos($to_be_removed_indexes, $string_to_compare) !== false) {
						    echo '<br>true<br>';
						}else{
							//$to_be_removed_indexes .= $j.'_'.$arr[$j].'|';
							$arr[$j]='A';
						}

					}
				}

				



			}
			
		}
		//echo "<br>";
	}

	
	$arr = array_values( array_diff($arr, ["A"]) );
	
	return $arr;
} 
  

$arr = array(0,5,-3,7,-1,200,9,5,20,-3,5,7,130); 
$n = count($arr); 
//echo "<br>".$n."<br>";
for ($i = 0; $i < $n; $i++)  
    echo $arr[$i]."     "; 
  
// for sort an array 
$final_array = remove_first_occurence($arr, $n); 
echo "<br>";
  
// for print all the 
// element in sorted way 
for ($i = 0; $i < count($final_array); $i++)  
    echo $final_array[$i]." "; 
  

?> 