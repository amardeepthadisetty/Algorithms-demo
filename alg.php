<?php 
/*Create a function that will accept two string variable and validate if there are any character that occurrence more than twice from both string then print it in the output console in the form of ascending order var string1 ="ABCAADEXDZXDX"; var string2="XCZCACBZBLBOZ";
Expected Output:

ABCDXZ*/
// Efficient PHP program to sort an  
// array of numbers in range from 1 to n. 
  
  
// function for sort array 
function return_thrice_occurence($str1, $str2) 
{ 
	$final_string = '';
	$str3 = $str1.$str2;
	echo $str3."<br>";
	//$str3 = explode("", $str3);
	$n = strlen($str3);
	$to_be_removed_indexes = '';
	for ($i=0; $i < $n ; $i++) {
		$duplicate_occurence = 0; 
		for ($j= $i ; $j < $n ; $j++) {


				if ($str3[$i]==$str3[$j]) {
					$duplicate_occurence++;
					//echo "<br> found ".$str3[$j]." repeateative   ".$duplicate_occurence;

					//if the duplicate_occurence is 2, then unset that index
					if ($duplicate_occurence>2) {

						$final_string .= $str3[$j].',';

					}
				}
			
			}
			
		}
	

	
	//echo "<br>";
	//$final_string = array_unique($final_string);
	$final_string = implode(',',array_unique(explode(',', $final_string)));
	$final_string = str_replace(",", "", $final_string);
	//print_r($final_string);
	//echo "<br>";
	return $final_string;
} 
  

$str1 = "ABCAADEXDZXDX";
$str2 = "XCZCACBZBLBOZ";
//$n = count($arr); 
/*//echo "<br>".$n."<br>";
for ($i = 0; $i < $n; $i++)  
    echo $arr[$i]."     ";*/ 
  
// for sort an array 
$final_array = return_thrice_occurence($str1, $str2); 
echo "<br>";
  
// for print all the 
// element in sorted way 
print_r($final_array);
  

?> 