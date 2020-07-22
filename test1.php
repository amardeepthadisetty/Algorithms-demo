<?php 

/*
 * Complete the 'processStrings' function below.
 *
 * The function is expected to return a STRING_ARRAY.
 * The function accepts following parameters:
 *  1. STRING str1
 *  2. STRING str2
 */

function diff($str1, $str2){
	$c = strlen($str2);
	for ($e = 0; $e < $c; $e++) {
	     $str1 = str_replace($str2[$e], '', $str1);
	}
	return $str1;
	
}

function processStrings($str1, $str2) {
    
    //diff($str1, $str2);

    $d = array(
    	'op1' => diff($str1, $str2),
    	'op2' => diff($str2, $str1)
    );
    
	return $d;
    
    //return $str1.$str2;

}


$str1  = "ABC";
$str2  = "BC";
$result = processStrings($str1, $str2);

print_r($result);

echo "<br>";
//echo $result;

/*
javascript solution:
str1  = "ABC";
str2  = "ABD";
result = processStrings(str1, str2);

console.log(result);

function processStrings(str1, str2) {
    
    var op1 = findDiff(str1, str2);
    var op2 = findDiff(str2, str1);
    //console.log(op1);
		var d = [];
     d.op1 = op1;
     d.op2 = op2;
    
      return d; 
    
    //return $str1.$str2;

}

function findDiff(str1, str2){ 
  var c = str2.length;
  //var str1 = str1.split("");
 // var str2 = str2.split("");
	for (var e = 0; e < c; e++) {
  //console.log(str2[e]);
	     //str1 = str_replace(str2[e], '', str1);
      // str1 = str1.replace(str2[e], '');
      str1 = str1.replace(str2[e],'');
	}
	return str1;
}
*/


?>