<?php 
// Efficient PHP program to sort an  
// array of numbers in range from 1 to n. 
  
  
// function for sort array 
function sortit($arr, $n) 
{ 
	$done = false;
  	while (!$done) {
    	$done = true;
    	for ($i = 1; $i < $n; $i++) {
	      if ($arr[$i - 1] > $arr[$i]) {
	        $done = false;
	        $tmp = $arr[$i - 1];
	        $arr[$i - 1] = $arr[$i];
	        $arr[$i] = $tmp;
	      }
	    }
	}
	return $arr;
} 
  
// Driver code 
$arr = array(10, 9, 2, 8, 3, 5, 4, 6, 1); 
$n = count($arr); 
echo "<br>".$n."<br>";
  
// for sort an array 
$sorted_array = sortit($arr, $n); 
  
// for print all the 
// element in sorted way 
for ($i = 0; $i < $n; $i++)  
    echo $sorted_array[$i]." "; 
  
//This code is contributed by Manish Shaw 
//(manishshaw1) 
?> 